<?php

// use 
use \PlatziPHP\Http\Controllers\HomeController;

require_once __DIR__.'/../vendor/autoload.php';

$request = \Illuminate\Http\Request::capture();
$controller = new HomeController();

echo $controller->index($request);