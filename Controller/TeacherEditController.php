<?php

declare(strict_types = 1);


class TeacherEditController
{
    public function render(array $GET, array $POST) {
        $teacherLoader = new TeacherLoader();
        $teacher = $teacherLoader->getTeacherById((int)$_GET['id']);
        //edit teacher
        if (isset($_POST['edit'])) {
            $teacherLoader->editTeacher($_POST['teacher-name'], $_POST['teacher-email'], (int)$teacher['id']);
            //return to main teacher page after submitting form
            header("Location: index.php?page=teachers-view");
        }
        if (isset($_POST['delete'])) {
            $teacherLoader->deleteTeacher((int)$teacher['id']);
            $teachersArr = $teacherLoader->getTeachers();
            //return to main teacher page after submitting form
            header("Location: index.php?page=teachers-view");
        }
        require 'View/teacher-edit.php';
    }
}