<?php
require_once __DIR__ . '/vendor/autoload.php';
use App\phpappbuilder\router\Router;
use Tracy\Debugger;

Debugger::enable();

$router = new Router();
$router->run();
