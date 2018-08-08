<?php
require_once __DIR__ . '/vendor/autoload.php';
use App\phpappbuilder\router\App;
use Tracy\Debugger;

Debugger::enable();

$app = new App();
$app->run();
