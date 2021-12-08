<?php

declare(strict_types=1);

class StudentController {
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST) {

        //get the list of all the students
        $studentLoader = new StudentLoader();
        $students = $studentLoader->getStudents();

        //get the list with all the classes
        $classesLoader = new ClassesLoader();
        $classes = $classesLoader->getClasses();

        // add student to database
        if (isset($POST['add'])) {
            $studentLoader->addStudent($POST['student-name'], $POST['student-email'], (int)$POST['student-class']);
            echo "<meta http-equiv='refresh' content='0'>";
        }

        // delete student from database
        if (isset($POST['delete'])) {
            $studentLoader->deleteStudent((int)$POST['delete']);
            echo "<meta http-equiv='refresh' content='0'>";
        }

        require 'View/students-view.php';
    }
}
