<?php

declare(strict_types=1);

class ClassesController {
    public function render(array $GET, array $POST) {
        $classesLoader = new ClassesLoader();
        $classesArray = $classesLoader->getClasses();

        //get the list with all the teacher
        $teacherLoader = new TeacherLoader();
        $teachers = $teacherLoader->getTeachers();

        // add class to database
        if (isset($POST['add'])) {
            $classesLoader->addClass($POST['className'], $POST['location'], (int)$POST['classTeacher']);
            $referer = $_SERVER['HTTP_REFERER'];
            header("Location: $referer");
        }

        if (isset($POST['delete'])) {
            $classesLoader->deleteClasses((int)$POST['delete']);
            $referer = $_SERVER['HTTP_REFERER'];
            header("Location: $referer");
        }

        //get the list with all the teacher
        $teacherLoader = new TeacherLoader();
        $teachers = $teacherLoader->getTeachers();

        //load the view
        require 'View/classes.php';
    }
}
