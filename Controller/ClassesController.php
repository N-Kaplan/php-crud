<?php
declare(strict_types = 1);

class ClassesController
{
    public function render(array $GET, array $POST)
    {
        $classesLoader = new ClassesLoader();
        $classesArray = $classesLoader->getClasses();
<<<<<<< HEAD
        
        //get the list with all the teacher
        $teacherLoader = new TeacherLoader();
        $teachers = $teacherLoader->getTeachers();

        // add student to database
        if (isset($POST['add'])) {
            $classesLoader->addClass($POST['className'], $POST['location'], (int)$POST['classTeacher']);
            echo "<meta http-equiv='refresh' content='0'>";
        }

        if (isset($POST['delete'])) {
            $classesLoader->deleteClasses((int)$POST['delete']);
            echo "<meta http-equiv='refresh' content='0'>";
        }
=======
        // var_dump($classesArray);
>>>>>>> a9e02457d380b4d889d814a34f38e3b5e492e732

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