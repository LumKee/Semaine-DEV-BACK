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
// elseif (preg_match('/^page\/[1-9][0-9]*$/', $q))
// {
//     $controller = 'page';
// }

//include controller

include '../controllers/'.$controller.'.php';