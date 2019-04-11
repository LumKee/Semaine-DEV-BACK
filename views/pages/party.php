<?php

session_start();

require 'config/database.php';

if (isset($_SESSION['user_id'])) {

    // Get user name
    $statement = $bdd->prepare('SELECT * FROM users WHERE id = :id');
    $statement->bindParam(':id', $_SESSION['user_id']);
    $statement->execute();
    
    $results = $statement->fetch(PDO::FETCH_ASSOC);
    $user = $results;
    
}
if (isset($_SESSION)) {
    // Get party name
    $statement2 = $bdd->prepare('SELECT * FROM parties WHERE id = :id');
    $statement2->bindParam(':id', $_SESSION['user_id']);
    $statement2->execute();
    
    $results2 = $statement2->fetchAll();
    $party = $results2;;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Bienvenue</title>    
</head>
<body>

    <header>
        <span>Connecté en tant que : <?= $user['login']; ?></span><br>

        <span>Party :</span>

        <br>

        <a href="index.php">Se déconneter</a>
    </header>
    
</body>
</html>