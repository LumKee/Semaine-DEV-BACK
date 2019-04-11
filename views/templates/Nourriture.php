<?php
    $productName = !empty($_GET['product']) ? $_GET['product'] : null;
    if ($productName !== null) {
        $search = "style='display: flex;'";
    }
    else {
        $search = '';
    }
    $resultTab[] = 0;
    $visib = "style='display: none'";
    if ($productName !== null) {
      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.fr.carrefour.io/v1/openapi/items",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode([
          'queries' => [
            [
              'query' => $productName,
              'field' => 'barcodeDescription',
            ],
          ]
        ]),
        CURLOPT_HTTPHEADER => array(
          "accept: application/json",
          "content-type: application/json",
          "x-ibm-client-id: 6dbcbac3-ff4e-4d3e-b1d5-f331ebaebe77",
          "x-ibm-client-secret: yM5mB3vB0vD6mN3aI6eM8bL1oF6rK7sR3iP4qL3hE0rC5lO2aX"
        ),
      ));
    
      $response = curl_exec($curl);
      curl_close($curl);
      $response = json_decode($response);
      $key = 0;
      foreach ($response->list as $_list) {
        $curl = curl_init('https://world.openfoodfacts.org/api/v0/product/'.$_list->gtin.'.json');
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        $responseOpen = curl_exec($curl);
        curl_close($curl);
        $responseOpen = json_decode($responseOpen);
        if ($responseOpen->status !== 0 ) {
          if (!empty($responseOpen->product->image_front_url)) {
            $name = $responseOpen->product->product_name;
            $image = $responseOpen->product->image_front_url;
            $resultTab[$key] = [$name, $image = $responseOpen->product->image_front_url];
            $key = $key + 1;
            $visib = "style='display: block'";
          }
        }
      }
    }
?>

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
<div class="background" <?php echo $search; ?>>
    <div class="popup">
        <form action="<?= URL ?>dashboard?categorie=Nourriture" method="get" class="present">
            <img src= '../public/assets/images/burger.svg' alt="burger"/>
            <h2>Nourriture
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