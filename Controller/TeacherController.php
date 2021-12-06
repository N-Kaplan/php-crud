<?php
declare(strict_types = 1);

require 'Model/DataSource.php';
require 'Model/TeacherLoader.php';

class TeacherController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $teachers = new TeacherLoader();
        $getTeachers = $teachers->getTeachers();

        //load the view
        require 'View/teachers.php';
    }
}