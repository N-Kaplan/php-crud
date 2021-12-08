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
        var_dump($POST);
        if (count($POST) != 0) {
            var_dump('this is from inside the if post check');
            var_dump($POST);
            $array = array_values($POST);
            $studentId = ((int)$array[0]);
            if (((int)$array[0])) {
                $studentId = ((int)$array[0]);
            }
        }

        $studentById = $studentLoader->getStudentById($studentId);
        var_dump($studentById);
        var_dump($POST);
        $studentId = (int)$studentById[0]['id'];

        //get the list with all the classes
        $classesLoader = new ClassesLoader();
        $classes = $classesLoader->getClasses();

        // this needs more work - TODO
        if (isset($POST['submitBtn'])) {
            $name = $email = $class_id = $id = '';
            $name = $POST['student-name'];
            $email = $POST['student-email'];
            $class_id = (int)$POST['student-class'];
            $id = (int)$POST['student-id'];
            $studentLoader->editStudent($name, $email, $class_id, $id);
            // echo "<meta http-equiv='refresh' content='0'>";
            echo 'action="index.php?page=students-view"';
            var_dump($POST);
            var_dump('submit button was clicked');
        }

        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/student-detail.php';
    }
}
