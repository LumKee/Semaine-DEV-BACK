<?php

define('DB_HOST', 'localhost');
define('DB_PORT', '8889');
define('DB_NAME', 'test');
define('DB_USER', 'root');
define('DB_PASS', 'root');

try {
    $bdd = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST.';port='.DB_PORT, DB_USER, DB_PASS);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}

catch (PDOException $e) {
    die('Cannot connect');
}
