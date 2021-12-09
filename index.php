<?php

declare(strict_types=1);

//include all your model files here
require 'Model/DotEnv.php';
$env = new DotEnv(__DIR__ . '/.env');
$env->load();

//require 'Model/User.php';
require 'Model/Teacher.php';
require 'Model/Student.php';
require 'Model/StudentLoader.php';
require 'Model/Classes.php';
require 'Model/ClassesLoader.php';
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/TeacherController.php';
require 'Controller/TeacherEditController.php';
require 'Controller/StudentController.php';
require 'Controller/ClassesController.php';
require 'Controller/StudentDetailController.php';
require 'Controller/ClassesEditController.php';
require 'Controller/ClassStudentsController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();

if (isset($_GET['page']) && $_GET['page'] === 'students-view') {
    $controller = new StudentController();
} elseif (isset($_GET['page']) && $_GET['page'] === 'student-edit') {
    $controller = new StudentDetailController();
} elseif (isset($_GET['page']) && ($_GET['page'] === 'teachers-view' || $_GET['page'] === 'teacher-students')) {
    $controller = new TeacherController();
} elseif (isset($_GET['page']) && $_GET['page'] === 'teacher-edit') {
    $controller = new TeacherEditController();
} elseif (isset($_GET['page']) && $_GET['page'] === 'classes') {
    $controller = new ClassesController();
} elseif (isset($_GET['page']) && $_GET['page'] === 'classesEdit') {
    $controller = new ClassesEditController();
} elseif (isset($_GET['page']) && $_GET['page'] === 'class-students') {
    $controller = new ClassStudentsController();
}
$controller->render($_GET, $_POST);
