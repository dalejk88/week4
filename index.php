<?php
// 328/week4/index.php
// This is my controller

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');

// Instantiate the F3 Base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function() {
    // Render a view page
    $view = new Template();
    echo $view->render('views/info.html');
});

// Run Fat-Free
$f3->run();