<!-- Exemple -->
<div class="persona">
    <a href="delete.php"></a>
    <div class="id">
        <div class="image"></div>
        <h3>Golden</h3>
    </div>
    <div class="itemList">
            <ul class="container">
                <li>Produits</li>
                <li>Prod</li>
                <li>Produits</li>
                <li>Prod</li>
                <li>Produits</li>
                <li>Prod</li>
                <li>Produits</li>
                <li>Prod</li>
            </ul>
            <ul class="price">
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
            </ul>
    </div>
    <div class="total">Totale : 20€</div>
</div>
<div class="persona">
    <a href="delete.php"></a>
    <div class="id">
        <div class="image"></div>
        <h3>Golden</h3>
    </div>
    <div class="itemList">
            <ul class="container">
                <li>Produits</li>
                <li>Prod</li>
                <li>Produits</li>
                <li>Prod</li>
                <li>Produits</li>
                <li>Prod</li>
                <li>Produits</li>
                <li>Prod</li>
            </ul>
            <ul class="price">
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
            </ul>
    </div>
    <div class="total">Totale : 20€</div>
</div>
<div class="persona">
    <a href="delete.php"></a>
    <div class="id">
        <div class="image"></div>
        <h3>Golden</h3>
    </div>
    <div class="itemList">
            <ul class="container">
                <li>Produits</li>
                <li>Prod</li>
                <li>Produits</li>
                <li>Prod</li>
                <li>Produits</li>
                <li>Prod</li>
                <li>Produits</li>
                <li>Prod</li>
            </ul>
            <ul class="price">
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
            </ul>
    </div>
    <div class="total">Totale : 20€</div>
</div>
<div class="persona">
    <a href="delete.php"></a>
    <div class="id">
        <div class="image"></div>
        <h3>Golden</h3>
    </div>
    <div class="itemList">
            <ul class="container">
                <li>Produits</li>
                <li>Prod</li>
                <li>Produits</li>
                <li>Prod</li>
                <li>Produits</li>
                <li>Prod</li>
                <li>Produits</li>
                <li>Prod</li>
            </ul>
            <ul class="price">
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
                <li>5 €</li>
            </ul>
    </div>
    <div class="total">Totale : 20€</div>
</div>

<!-- Vrai -->
<?php foreach($myVar as $pseudoVar0): ?>
    <div class="persona">
    <a href="delete.php"></a>
    <div class="id">
    <div class="image"></div>
        <h3><?= $pseudoVar0->columnNameID; ?></h3>
    </div>
    <div class="itemList">
            <ul class="container">
                <?php foreach($myVar as $pseudoVar): ?>
                    <li><?= $pseudoVar->columnName; ?></li>
                <?php endforeach; ?>
            </ul>
            <ul class="price">
                <?php foreach($myVar as $pseudoVar): ?>
                    <li><?= $pseudoVar->columnName; ?> €</li>
                <?php endforeach; ?>
            </ul>
    </div>
    <div class="total">Totale : <?= number_format($pseudoVar0->total, 2); ?>€</div>
    </div>
<?php endforeach; ?>
