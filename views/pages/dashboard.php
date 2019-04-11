<?php
    require '../database/database.php';
    session_start ();
    if(isset($_GET['categorie'])) {
        $categorie = (htmlspecialchars($_GET['categorie']));
    } 
    else {
        $categorie = "Nourriture";
    }
    if (is_null($_SESSION['party'])) {
        // On teste pour voir si nos variables ont bien été enregistrées
        echo 'Les variables ne sont pas déclarées.';
        // On démarre la session
        // On détruit les variables de notre session
        session_unset ();
        // On détruit notre session
        session_destroy ();
        // On redirige le visiteur vers la page d'accueil
        header ('location:'.URL);
    }
?>
<?php include '../views/partials/head.php'; ?>
<header>
    <?php include '../views/partials/header.php'; ?>
</header>
<div class="navMenu" data-state="<?php echo $categorie; ?>">
    <?php include '../views/partials/nav.php'; ?>
</div>
<div class="layers">
    <?php include '../views/templates/'.$categorie.'.php'; ?>
</div>


<div class="button"></div>

<?php include '../views/partials/footer.php';