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
require 'Controller/InfoController.php';
require 'Controller/TeacherController.php';
require 'Controller/TeacherEditController.php';
require 'Controller/StudentController.php';
require 'Controller/ClassesController.php';
require 'Controller/StudentDetailController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!
$env = new DotEnv(__DIR__ . '/.env');
$env->load();
//todo: remove info page, infoController


$controller = new HomepageController();

if (isset($_GET['page']) && $_GET['page'] === 'students-view') {
    $controller = new StudentController();
} elseif (isset($_GET['page']) && $_GET['page'] === 'student-detail') {
    $controller = new StudentDetailController();
} elseif (isset($_GET['page']) && ($_GET['page'] === 'teachers-view' || $_GET['page'] === 'teacher-delete')) {
    $controller = new TeacherController();
} elseif (isset($_GET['page']) && $_GET['page'] === 'teacher-edit') {
    $controller = new TeacherEditController();
} elseif (isset($_GET['page']) && $_GET['page'] === 'classes') {
    $controller = new ClassesController();
}
$controller->render($_GET, $_POST);


// function whatIsHappening()
// {
//     echo '<h2>$_GET</h2>';
//     var_dump($_GET);
//     echo '<h2>$_POST</h2>';
//     var_dump($_POST);
//     echo '<h2>$_COOKIE</h2>';
//     var_dump($_COOKIE);
//     echo '<h2>$_SESSION</h2>';
//     //var_dump($_SESSION);
// }

// whatIsHappening();