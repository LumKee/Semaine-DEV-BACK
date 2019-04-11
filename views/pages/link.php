<?php include '../views/partials/head.php'; ?>
<div class="container">
    <a href="<?= URL ?>"><img class="logo" src="../public/assets/images/logo.svg" alt="logo"></a>
    <img class="illustration" src="../public/assets/images/illustration.svg" alt="illustrations">
    <h1>Rejoint tes amis :</h1>
    <input onClick="window.location.href='<?= URL ?>party'" class="Btn" type="submit" value="Poursuivre">
</div>
<?php include '../views/partials/footer.php';