<?php

error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/app.php';

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

use app\Http\Request;
use \app\Controllers\MovieController;

$dependencies = require_once __DIR__ . '/app/Container/Dependencies.php';

$container = new \app\Container\Container($dependencies);
$test = $container->get(Request::class);
$movieController = $container->get(MovieController::class);
$movieController->index();
