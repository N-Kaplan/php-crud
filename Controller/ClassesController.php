<?php
declare(strict_types = 1);

class ClassesController
{
    public function render(array $GET, array $POST)
    {
        $classesLoader = new ClassesLoader();
        $classesArray = $classesLoader->getClasses();
        // var_dump($classesArray);

         //get the list with all the teacher
         $teacherLoader = new TeacherLoader();
         $teachers = $teacherLoader->getTeachers();
 
         // add student to database
         if (isset($POST['add'])) {
             $classesLoader->addClass($POST['className'], $POST['location'], (int)$POST['classTeacher']);
             echo "<meta http-equiv='refresh' content='0'>";
         }
         

        //load the view
        require 'View/classes.php';
    }
}