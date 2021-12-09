<?php

class TeacherDeleteController
{
    public function render(array $GET, array $POST)
    {
        $teacherLoader = new TeacherLoader();
        $teacher = $teacherLoader->getTeacherById((int)$_GET['id']);
        if (isset($_POST['delete'])) {
            $teacherLoader->deleteTeacher((int)$teacher['id']);
            $teachersArr = $teacherLoader->getTeachers();

            //refresh the page after submitting the form
//            $referer = $_SERVER['HTTP_REFERER'];
//            header("Location: $referer");
           // echo '<meta http-equiv="refresh" content="0;url=\"index.php?page=teachers-view\" />';
        }
        require 'View/teacher-delete.php';
    }

    function alert()
    {
        echo "<div class='' role='alert'>Teacher deleted.</div>";
    }
}