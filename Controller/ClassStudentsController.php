<?php

declare(strict_types=1);

class ClassStudentsController {
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST) {

        //get the list of all the students
        $studentLoader = new StudentLoader();
        var_dump($_GET);
        // $students = $studentLoader->getStudentsByClassId((int)$_GET['id']);

        //get the list with all the classes
        // $classesLoader = new ClassesLoader();
        // $classes = $classesLoader->getClasses();

        // add student to database

        require 'View/class-students.php';
    }
}
