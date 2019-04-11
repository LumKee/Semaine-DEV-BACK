<div class="besoin">
    <div class="title">
        <h2>Besoin</h2>
        <div class="move"></div>
    </div>
    <div class="itemList">
        <div class="container">Produit
            <div class="point"></div>
            <p>In order to discuss the general funct of the logo. </p>
        </div>
        <div class="container">Prod
            <div class="point"></div>
            <p>In order to discuss the general funct of the logo. </p>
        </div>
        <div class="container">Produit
            <div class="point"></div>
            <p>In order to discuss the general funct of the logo. </p>
        </div>
        <div class="container">Prod
            <div class="point"></div>
            <p>In order to discuss the general funct of the logo. </p>
        </div>
        <div class="container">Produit
            <div class="point"></div>
            <p>In order to discuss the general funct of the logo. </p>
        </div>
        <div class="container">Prod
            <div class="point"></div>
            <p>In order to discuss the general funct of the logo. </p>
        </div>
        <div class="container">Produit
            <div class="point"></div>
            <p>In order to discuss the general funct of the logo. </p>
        </div>
        <div class="container">Prod
            <div class="point"></div>
            <p>In order to discuss the general funct of the logo. </p>
        </div>
    </div>
</div>
<div class="achat">
    <div class="title">
        <h2>Achat</h2>
        <div class="move"></div>
    </div>
    <div class="itemList">
        <div class="container">Produit
            <div class="move_1"></div>
            <p>In order to discuss the general funct of the logo. </p>
            <div class="users">
                <div class="user_btn"></div>
                <div class="user_perso"></div>
            </div>
        </div>
        <div class="container">Prod
            <div class="move_1"></div>
            <p>In order to discuss the general funct of the logo. </p>
            <div class="users">
                <div class="user_btn"></div>
                <div class="user_perso"></div>
            </div>
        </div>
        <div class="container">Produit
            <div class="move_1"></div>
            <p>In order to discuss the general funct of the logo. </p>
            <div class="users">
                <div class="user_btn"></div>
                <div class="user_perso"></div>
            </div>
        </div>
        <div class="container">Prod
            <div class="move_1"></div>
            <p>In order to discuss the general funct of the logo. </p>
            <div class="users">
                <div class="user_btn"></div>
                <div class="user_perso"></div>
            </div>
        </div>
        <div class="container">Produit
            <div class="move_1"></div>
            <p>In order to discuss the general funct of the logo. </p>
            <div class="users">
                <div class="user_btn"></div>
                <div class="user_perso"></div>
            </div>
        </div>
        <div class="container">Prod
            <div class="move_1"></div>
            <p>In order to discuss the general funct of the logo. </p>
            <div class="users">
                <div class="user_btn"></div>
                <div class="user_perso"></div>
            </div>
        </div>
        <div class="container">Produit
            <div class="move_1"></div>
            <p>In order to discuss the general funct of the logo. </p>
            <div class="users">
                <div class="user_btn"></div>
                <div class="user_perso"></div>
            </div>
        </div>
        <div class="container">Prod
            <div class="move_1"></div>
            <p>In order to discuss the general funct of the logo. </p>
            <div class="users">
                <div class="user_btn"></div>
                <div class="user_perso"></div>
            </div>
        </div>
    </div>
</div>
<div class="acquis">
    <div class="title">
        <h2>Acquis</h2>
        <div class="move"></div>
    </div>
    <div class="itemList">
        <div class="container">Produit
            <div class="move_1"></div>
        </div>
        <div class="container">Prod
            <div class="move_1"></div>
        </div>
        <div class="container">Produit
            <div class="move_1"></div>
        </div>
        <div class="container">Prod
            <div class="move_1"></div>
        </div>
        <div class="container">Produit
            <div class="move_1"></div>
        </div>
        <div class="container">Prod
            <div class="move_1"></div>
        </div>
        <div class="container">Produit
            <div class="move_1"></div>
        </div>
        <div class="container">Prod
            <div class="move_1"></div>
        </div>
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
<div class="background">
    <div class="popup">
        <div class="present">
            <img src= '../public/assets/images/burger.svg' alt="burger"/>
            <h2>Nourriture
            <span class="close">&times;</span>
            </h2>
            <input type="search" name="search" placeholder="Search">
        </div>
        <div class="itemList">
            <div class="container">
                <div class="img_food"></div>Produit
                <p>In order to discuss the general funct of the logo. </p>
                <div class="users">
                    <div class="user_btn"></div>
                </div>
            </div>

            <div class="container">Prod<div class="img_food"></div>
                <p>In order to discuss the general funct of the logo. </p>
                <div class="users">
                    <div class="user_btn"></div>
                </div>
            </div>

            <div class="container">Produit<div class="img_food"></div>
                <p>In order to discuss the general funct of the logo. </p>
                <div class="users">
                    <div class="user_btn"></div>
                </div>
            </div>

            <div class="container">Prod<div class="img_food"></div>
                <p>In order to discuss the general funct of the logo. </p>
                <div class="users">
                    <div class="user_btn"></div>
                </div>
            </div>

            <div class="container">Produit<div class="img_food"></div>
                <p>In order to discuss the general funct of the logo. </p>
                <div class="users">
                    <div class="user_btn"></div>
                </div>
            </div>

            <div class="container">Prod<div class="img_food"></div>
                <p>In order to discuss the general funct of the logo. </p>

                <div class="users">
                    <div class="user_btn"></div>
                </div>
            </div>

            <div class="container">Produit<div class="img_food"></div>
                <p>In order to discuss the general funct of the logo. </p>

                <div class="users">
                    <div class="user_btn"></div>
                </div>
            </div>

            <div class="container">Prod<div class="img_food"></div>
                <p>In order to discuss the general funct of the logo. </p>

                <div class="users">
                    <div class="user_btn"></div>
                </div>
            </div>
        </div>
    </div>
</div>