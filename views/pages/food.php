<?php include '../views/partials/head.php'; ?>
<header>
    <?php include '../views/partials/head.php'; ?>
</header>
<div class="navMenu">
    <?php include '../views/partials/nav.php'; ?>
</div>
<div class="layers">
    <div class="besoin">
        <h2>Besoin</h2>
        <?php foreach($myVar as $pseudoVar): ?> -->
            <label class="container"><?= $pseudoVar->columnName; ?>
                <input type="checkbox" name="need">
                <span class="checkmark"></span>
            </label>
        <?php endforeach; ?>
    </div>
    <div class="achat">
        <h2>Achat</h2>
        <?php foreach($myVar as $pseudoVar): ?>
            <label class="container"><?= $pseudoVar->columnName; ?>
                <input type="checkbox" name="purchase">
                <span class="checkmark"></span>
            </label>
        <?php endforeach; ?>
    </div>
    <div class="acquis">
        <h2>Acquis</h2>
        <?php foreach($myVar as $pseudoVar): ?>
            <label class="container"><?= $pseudoVar->columnName; ?>
                <input type="checkbox" name="own">
                <span class="checkmark"></span>
            </label>
            <a href="delete.php">delete image</a>
        <?php endforeach; ?>
    </div>
</div>

<?php include '../views/partials/footer.php';