<?php

declare(strict_types = 1);


class TeacherEditController
{
    public function render(array $GET, array $POST) {
        $teacherLoader = new TeacherLoader();
        $teacher = $teacherLoader->getTeacherById((int)$_GET['id']);

        require 'View/teacher-edit.php';
    }
}