<div class="besoin">
    <div class="title">
        <h2>Besoin</h2>
        <div class="move"></div>
    </div>
    <div class="itemList">
        <div class="container">Produit
            <div class="move_1"></div>
            <p>In order to discuss the general funct of the logo. </p>
        </div>
        <div class="container">Prod
            <div class="move_1"></div>
            <p>In order to discuss the general funct of the logo. </p>
        </div>
        <div class="container">Produit
            <div class="move_1"></div>
            <p>In order to discuss the general funct of the logo. </p>
        </div>
        <div class="container">Prod
            <div class="move_1"></div>
            <p>In order to discuss the general funct of the logo. </p>
        </div>
        <div class="container">Produit
            <div class="move_1"></div>
            <p>In order to discuss the general funct of the logo. </p>
        </div>
        <div class="container">Prod
            <div class="move_1"></div>
            <p>In order to discuss the general funct of the logo. </p>
        </div>
        <div class="container">Produit
            <div class="move_1"></div>
            <p>In order to discuss the general funct of the logo. </p>
        </div>
        <div class="container">Prod
            <div class="move_1"></div>
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
<div class="background" <?php echo $search; ?>>
    <div class="popup">
        <form action="<?= URL ?>dashboard?categorie=Nourriture" method="get" class="present">
            <img src= '../public/assets/images/burger.svg' alt="burger"/>
            <h2>Matériels
            <span class="close">&times;</span>
            </h2>
            <input type="search" name="product" placeholder="Search">
            <input class='sub' type="submit">
        </form>
        <div class="itemList" <?php echo $visib; ?>>
            <?php for ($i=0; $i < count($resultTab); $i++):?>
            <label class="container">
                <img class="img_food" src="<?php echo $resultTab[$i][1]; ?>">
                <?php echo $resultTab[$i][0]; ?>
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <?php endfor ?>
                <div class="users">
                    <div class="user_btn"></div>
                </div>
            </div>
        </div>
    </div>
</div>