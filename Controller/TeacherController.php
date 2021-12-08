<?php
declare(strict_types = 1);
//todo: form validation
//todo: check if a teacher with the same name and email already exists in the db before adding
//require 'Model/DataSource.php';
require 'Model/TeacherLoader.php';

class TeacherController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $teacherLoader = new TeacherLoader();
        $teachersArr = $teacherLoader->getTeachers();
        //var_dump($teachersArr);

//        $getTeacherById = $teacherLoader->getTeacherById(2);
//        //var_dump($getTeacherById);
//        echo implode(' - ', $getTeacherById);


        //load view
        switch ($_GET['page']) {
            case 'teachers-view':
                //add teacher
                if (isset($_POST['add'])) {
                    //refresh once the add button is clicked, so the list is immediately updated
                    echo "<meta http-equiv='refresh' content='0'>";
                    $teacherLoader->addTeacher($_POST['teacher-name'], $_POST['teacher-email']);
                }
                require 'View/teachers-view.php';
                break;
            case 'teacher-delete':
//                $teacher = $teacherLoader->getTeacherById((int)$_GET['id']);
//                //delete teacher
//                require 'View/teacher-delete.php';
                if (isset($_POST['delete'])) {

                    $teacherLoader->deleteTeacher((int)$_GET['id']);
                    //header('Location: index.php?page=teachers-view.php');
                    require 'View/teachers-view.php';
                    exit();

                } else {
                    $teacher = $teacherLoader->getTeacherById((int)$_GET['id']);
                    require 'View/teacher-delete.php';
                }

                break;
            case 'teacher-edit':
                require 'View/teacher-edit.php';
        }
    }
}