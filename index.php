<?php

//This is my CONTROLLER for the hello project

//Turn on error reporting

ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

// Create an instance of the Base class
$f3 = Base::instance();
//Java equivalent -> Base f3 = new Base();

// Define a default route ("Home page" for hello project)
$f3->route('GET /', function(){
    echo '<h1>Zebra!</h1>';
    echo '<h2>Giraffe</h2>';
    echo '<h3>Dog</h3>';
    echo '<h4>Cat</h4>';
//    $view = new Template();
//    echo $view->render('views/Home.html');
});

//Run Fat-Free
$f3->run();
//Java -> f3.run();
