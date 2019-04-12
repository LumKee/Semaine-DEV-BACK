<?php session_start(); ?>

<?php include '../views/partials/head.php'; ?>

<div class="container">
    <a href="<?= URL ?>"><img class="logo" src="../public/assets/images/logo.svg" alt="logo"></a>

    <img class="illustration" src="../public/assets/images/illustration.svg" alt="illustrations">

    <h1>Rejoint tes amis :</h1>

    <!-- <input onClick="window.location.href='dashboard'" class="Btn" type="submit" value="Poursuivre"> -->
    
    <!-- NOUVEAU BUTTON -->
    <div class="button-4">
        <div class="eff-4"></div>
        <a href="<?php URL ?>dashboard">Poursuivre</a>
    </div>
</div>

<?php include '../views/partials/footer.php';
