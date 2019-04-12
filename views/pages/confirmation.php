<?php session_start() ?>

<?php include '../views/partials/head.php'; ?>

<a href="<?= URL ?>"><img class="logo" src="../public/assets/images/logo.svg" alt="logo"></a>

<div class="container">
    <img class="illustration" src="../public/assets/images/illustration.svg" alt="illustration" />

    <h2>Bravo ta soirée vient d’être créée !</h2>

    <div class="button-4">
        <div class="eff-4"></div>
        <a href="<?php URL ?>dashboard">Poursuivre</a>
    </div>

    <div class="button-5">
        <div class="eff-5"></div>
        <a href="<?php URL ?>dashboard">Inviter vos amis</a>
    </div>

</div>

<?php include '../views/partials/footer.php';
