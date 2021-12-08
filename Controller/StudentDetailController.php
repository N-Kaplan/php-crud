<?php

declare(strict_types=1);

class StudentDetailController {
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST) {

        //this is just example code, you can remove the line below
        //get the list of all the students
        $studentLoader = new StudentLoader();
        $students = $studentLoader->getStudents();

        // get the id for the selected student? no idea what I'm doing at this point, feels like voodoo
        $array = array_values($POST);
        $studentId = ((int)$array[0]);

        $studentById = $studentLoader->getStudentById($studentId);

        //get the list with all the classes
        $classesLoader = new ClassesLoader();
        $classes = $classesLoader->getClasses();

        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/student-detail.php';
    }
}
