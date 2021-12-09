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
            echo '<meta http-equiv="refresh" content="0;url=\"index.php?page=teachers-view\" />';
        }
        require 'View/teacher-delete.php';
    }
}