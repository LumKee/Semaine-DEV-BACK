<?php

session_start();

require './../config/database.php';
include 'form-handler.php';

if (!empty($_POST)) {

    // Get party
    $statement = $bdd->prepare('SELECT * FROM parties WHERE id = :id');
    $statement->bindParam(':id', $_POST['id']);
    $statement->execute();

    $party = $statement->fetch(PDO::FETCH_ASSOC);
    
    // Test password
    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (password_verify($_POST['password'], $party['password'])) {

        // Test if user exist
        $statement = $bdd->prepare('SELECT * FROM users WHERE id_party = :id_party AND login = :login');
        $statement->bindParam(':id_party', $party['id']);
        $statement->bindParam(':login', $_POST['login']);
        $statement->execute();

        $user = $statement->fetch(PDO::FETCH_ASSOC);
        
        if ($user) {

            $_SESSION['user_id'] = $user['id'];

        }
        else {

            // Create user
            $sql = "INSERT INTO users (login, id_party) VALUES (:login, :id_party)";
            $statement = $bdd->prepare($sql);
        
            $statement->bindParam(':login', $_POST['login']);
            $statement->bindParam(':id_party', $party['id']);
        
            $statement->execute();

            $_SESSION['user_id'] = $bdd->lastInsertId();

        }
        
        header('Location: ./../Link/link.php');
        exit;
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Join</title>
    <link rel="stylesheet" href="./Assets/style/style.css">
</head>
<body>

    <a href="./../index.php"><img class="logo" src="./Assets/images/logo.svg" alt="logo"></a>

    <img class="illustration" src="./Assets/images/illustration.svg" alt="illustrations">

    <form action="#" method="post">

        <h1>Rejoins tes amis :</h1>

        <span class="id">Id</span>
        <input type="id" name="id" placeholder="Id de la soirée">
        
        <span class="password">Mot de passe</span>
        <input type="password" name="password" placeholder="Mot de passe de la soirée">
        
        <span class="pseudo">Pseudo</span>
        <input type="text" name="login" placeholder="Pseudo" >
        
        <?php foreach($messages['error'] as $_message): ?>
            <div class="message error">
                <?= $_message ?>
            </div>
        <?php endforeach; ?>
            
        <input class="Btn" type="submit" value="Connexion">

    </form>

</body>
</html>