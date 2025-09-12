<?php 
// contant for application control 
define ('CONTROL', true);

// including files
$routes = require_once('inc/routes.php');

// route define
$route = $_GET['route']?? 'home';

if(!in_array($route, $routes)){

    $route = '404';
}

// routes flow
switch($route){

    case 'home':
        require_once 'inc/header.php';
        require_once 'scripts/home.php';
        require_once 'inc/footer.php';
        break;
    case '404':
        require_once 'inc/header.php';
        require_once 'scripts/404.php';
        require_once 'inc/footer.php';
        break;
}