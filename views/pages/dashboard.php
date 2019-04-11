<?php
    if(isset($_GET['categorie'])) {
        $categorie = (htmlspecialchars($_GET['categorie']));
    } 
    else {
        $categorie = "Nourriture";
    }
?>
<?php include '../views/partials/head.php'; ?>
<header>
    <?php include '../views/partials/head.php'; ?>
</header>
<div class="navMenu" data-state="<?php echo $categorie; ?>">
    <?php include '../views/partials/nav.php'; ?>
</div>
<div class="layers">
    <?php include '../views/templates/'.$categorie.'.php'; ?>
</div>


<div class="button"></div>

<?php include '../views/partials/footer.php';