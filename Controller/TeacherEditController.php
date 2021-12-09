<?php

declare(strict_types = 1);


class TeacherEditController
{
    public function render(array $GET, array $POST) {
        $teacherLoader = new TeacherLoader();
        $teacher = $teacherLoader->getTeacherById((int)$_GET['id']);
//        $students = $teacherLoader->getStudents((int)$_GET['id']);
//        var_dump($students);
        //edit teacher
        if (isset($_POST['edit'])) {
            $teacherLoader->editTeacher($_POST['teacher-name'], $_POST['teacher-email'], (int)$teacher['id']);
            $referer = $_SERVER['HTTP_REFERER'];
            header("Location: $referer");
        }
        require 'View/teacher-edit.php';
    }
}