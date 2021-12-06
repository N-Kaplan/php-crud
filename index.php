<?php

declare(strict_types=1);

//include all your model files here
require 'Model/DotEnv.php';
require 'Model/Student.php';
require 'Model/StudentLoader.php';
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/InfoController.php';
require 'Controller/StudentController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!
$env = new DotEnv(__DIR__ . '/.env');
$env->load();

$controller = new HomepageController();
if (isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();
} elseif (isset($_GET['page']) && $_GET['page'] === 'student-view') {
    $controller = new StudentController();
}

$controller->render($_GET, $_POST);
