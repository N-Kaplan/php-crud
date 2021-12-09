<?php

declare(strict_types=1);

class StudentDetailController {
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST) {

        //this is just example code, you can remove the line below
        //get the list of all the students
        $studentLoader = new StudentLoader();
        $students = $studentLoader->getStudents();

        $studentById = $studentLoader->getStudentById((int)$_GET['id']);

        //get the list with all the classes
        $classesLoader = new ClassesLoader();
        $classes = $classesLoader->getClasses();

        if (isset($POST['submitBtn'])) {
            $name = $email = $class_id = $id = '';
            $name = $POST['student-name'];
            $email = $POST['student-email'];
            $class_id = (int)$POST['student-class'];
            $id = (int)$POST['student-id'];
            $studentLoader->editStudent($name, $email, $class_id, $id);
        }

        //load the view
        require 'View/student-detail.php';
    }
}
