<?php

declare(strict_types = 1);


class ClassesEditController
{
    public function render(array $GET, array $POST) {
        $teacherLoader = new TeacherLoader();
        $teachers = $teacherLoader->getTeachers();

        $classesLoader = new ClassesLoader();
        $class = $classesLoader->getClassesById((int)$_GET['id']);
        //edit teacher
        if (isset($_POST['edit'])) {
            $classesLoader->editClass($_POST['class_name'], $_POST['class_location'],(int)$_POST['class_teacher'], (int)$class['id']);  
            $referer = $_SERVER['HTTP_REFERER'];
            header("Location: $referer");
        }
        require 'View/classesEdit.php';
    }
}