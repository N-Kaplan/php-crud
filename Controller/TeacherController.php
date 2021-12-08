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
        var_dump($teachersArr);

        $getTeacherById = $teacherLoader->getTeacherById(2);
        var_dump($getTeacherById);
        echo implode(' - ', $getTeacherById);

        //add teacher
        if (isset($_POST['add'])) {
            echo "<meta http-equiv='refresh' content='0'>";
            $teacherLoader->addTeacher($_POST['teacher-name'], $_POST['teacher-email']);
        }

        //delete teacher (get functional & move to different page)
        if (isset($_POST['delete'])) {
            $teachersArr->deleteTeacher();
        }

        //load the view
        require 'View/teachers-view.php';
    }
}