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
<nav class="nav">
        <img class="logo" src="../public/assets/images/logo.svg" alt="logo">
        <div class="session">
            <img class="session_img" src="../public/assets/images/session.svg" alt="session">
            <span class="session_text" >Soirée So'Hetic</span>
        </div>
        <div class="profil">
            <img src="../public/assets/images/Alban.png" alt="profil">
            <span>Hello, <?= $user['login']; ?> !</span>
        </div>
        <img class="log" src="../public/assets/images/log_out.svg" alt="log_out">
</nav>