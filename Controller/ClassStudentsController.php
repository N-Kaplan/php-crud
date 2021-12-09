<?php

declare(strict_types=1);

class ClassStudentsController {
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST) {

        $studentLoader = new StudentLoader();
        $students = $studentLoader->getStudentsByClassId((int)$_GET['id']);

        require 'View/class-students.php';
    }
}
