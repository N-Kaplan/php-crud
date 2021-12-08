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


        //delete teacher (get functional & move to different page?)
        if (isset($_POST['delete'])) {
            $teachersArr->deleteTeacher();
        }

        //load view
        switch ($_GET['page']) {
            case 'teachers-view':
                //add teacher
                if (isset($_POST['add'])) {
                    //echo "<meta http-equiv='refresh' content='0'>";
                    $teacherLoader->addTeacher($_POST['teacher-name'], $_POST['teacher-email']);
                }
                require 'View/teachers-view.php';
                break;
            case 'teacher-delete':
                $teacher = $teacherLoader->getTeacherById((int)$_GET['id']);
                //delete teacher
                if (isset($_POST['delete'])) {
                    //echo "<meta http-equiv='refresh' content='0'>";
                    //$teacherLoader->deleteTeacher($_GET['id']);
                }
                require 'View/teacher-delete.php';
                break;
            //case 'teacher-edit':
        }
    }
}