<?php
declare(strict_types = 1);

class ClassesController
{
    public function render(array $GET, array $POST)
    {
        $classesLoader = new ClassesLoader();
        $classesArray = $classesLoader->getClasses();
        var_dump($classesArray);


        //load the view
        require 'View/classes.php';
    }
}