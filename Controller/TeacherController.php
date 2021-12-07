<?php
declare(strict_types = 1);

require 'Model/DataSource.php';
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

        //load the view
        require 'View/teachers.php';
    }
}