<?php

declare(strict_types=1);

class StudentController {
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST) {

        //this is just example code, you can remove the line below
        //get the list of all the students
        $studentLoader = new StudentLoader();
        $students = $studentLoader->getStudents();
        var_dump($students);

        // $studentById = $studentLoader->getStudentById(4);

        //get the list with all the classes
        $classesLoader = new ClassesLoader();
        $classes = $classesLoader->getClasses();

        // add student to database
        if (isset($POST['add'])) {
            $studentLoader->addStudent($POST['student-name'], $POST['student-email'], (int)$POST['student-class']);
            echo "<meta http-equiv='refresh' content='0'>";
            var_dump('the add button was pressed in the students page');
        }

        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/students-view.php';
    }
}
