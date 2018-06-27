<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\phpappbuilder\router\Router;

$router = new Router();
$router->run();