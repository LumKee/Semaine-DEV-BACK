<?php 

// include '../database/database.php';

/**
 * Configuration
 */
define ('URL', 'http://localhost:8888/Semaine-DEV-BACK/public/');

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
else if ($q == 'food') {
    $controller = 'food';
}
// elseif (preg_match('/^page\/[1-9][0-9]*$/', $q))
// {
//     $controller = 'page';
// }

//include controller

include '../controllers/'.$controller.'.php';