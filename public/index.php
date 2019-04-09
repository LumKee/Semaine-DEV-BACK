<?php 

include '../database/database.php';

/**
 * Routing
 */

define ('URL', 'http://localhost/GitHub/Semaine-DEV-BACK/public/');

//Get q param
$q = !empty($_GET['q']) ? $_GET['q'] : 'home';
echo '<pre>';
print_r($q);
echo '</pre>';
//define controller
$controller = '404';

if($q =='home')
{
    $controller = 'home';
}

elseif (preg_match('/^page\/[1-9][0-9]*$/', $q))
{
    $controller = 'page';
}

//include controller

include '../controllers/'.$controller.'.php';