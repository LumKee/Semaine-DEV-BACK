<?php 

// include '../database/database.php';

/**
 * Configuration
 */
define ('URL', 'http://localhost/GitHub/Semaine-DEV-BACK/public/');

/**
 * Routing
 */
//Get q param
$q = !empty($_GET['q']) ? $_GET['q'] : 'home';

// Define controller
$controller = '404';
if($q =='home')
{
    $controller = 'home';
}
else if ($q == 'dashboard') {
    $controller = 'dashboard';
}
else if ($q == 'confirmation') {
    $controller = 'confirmation';
}
else if ($q == 'create') {
    $controller = 'create';
}
else if ($q == 'join') {
    $controller = 'join';
}
else if ($q == 'link') {
    $controller = 'link';
}

//include controller

include '../controllers/'.$controller.'.php';