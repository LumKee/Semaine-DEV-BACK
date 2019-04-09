<div class="besoin">
    <div class="title">
        <h2>Besoin</h2>
        <div class="move"></div>
    </div>
    <div class="itemList">
            <label class="container">Produit
                <input type="checkbox" name="need">
                <span class="checkmark"></span>
            </label>
            <label class="container">Prod
                <input type="checkbox" name="need">
                <span class="checkmark"></span>
            </label>
            <label class="container">Produit
                <input type="checkbox" name="need">
                <span class="checkmark"></span>
            </label>
            <label class="container">Prod
                <input type="checkbox" name="need">
                <span class="checkmark"></span>
            </label>
            <label class="container">Produit
                <input type="checkbox" name="need">
                <span class="checkmark"></span>
            </label>
            <label class="container">Prod
                <input type="checkbox" name="need">
                <span class="checkmark"></span>
            </label>
            <label class="container">Produit
                <input type="checkbox" name="need">
                <span class="checkmark"></span>
            </label>
            <label class="container">Prod
                <input type="checkbox" name="need">
                <span class="checkmark"></span>
            </label>
    </div>
</div>
<div class="achat">
    <div class="title">
        <h2>Achat</h2>
        <div class="move"></div>
    </div>
    <div class="itemList">
        <?php foreach($myVar as $pseudoVar): ?>
            <label class="container"><?= $pseudoVar->columnName; ?>
                <input type="checkbox" name="purchase">
                <span class="checkmark"></span>
            </label>
        <?php endforeach; ?>
    </div>
</div>
<div class="acquis">
    <div class="title">
        <h2>Acquis</h2>
        <div class="move"></div>
    </div>
    <div class="itemList">
        <?php foreach($myVar as $pseudoVar): ?>
            <label class="container">Produit
                <input type="checkbox" name="own">
                <span class="checkmark"></span>
            </label>
            <a href="delete.php">delete image</a>
        <?php endforeach; ?>
    </div>
</div>
<div class="besoin">
    <div class="title">
        <h2>Besoin</h2>
        <div class="move"></div>
    </div>
    <div class="itemList">
        <?php foreach($myVar as $pseudoVar): ?> -->
            <label class="container"><?= $pseudoVar->columnName; ?>
                <input type="checkbox" name="need">
                <span class="checkmark"></span>
            </label>
        <?php endforeach; ?>
    </div>
</div>
<div class="achat">
    <div class="title">
        <h2>Achat</h2>
        <div class="move"></div>
    </div>
    <div class="itemList">
        <?php foreach($myVar as $pseudoVar): ?>
            <label class="container"><?= $pseudoVar->columnName; ?>
                <input type="checkbox" name="purchase">
                <span class="checkmark"></span>
            </label>
        <?php endforeach; ?>
    </div>
</div>
<div class="acquis">
    <div class="title">
        <h2>Acquis</h2>
        <div class="move"></div>
    </div>
    <div class="itemList">
        <?php foreach($myVar as $pseudoVar): ?>
            <label class="container"><?= $pseudoVar->columnName; ?>
                <input type="checkbox" name="own">
                <span class="checkmark"></span>
            </label>
            <a href="delete.php">delete image</a>
        <?php endforeach; ?>
    </div>
</div>