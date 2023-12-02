<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cv.css">
</head>
<body>
    
    
<?php include('na.php') ?>
<?php include('db_conn.php') ?>


<br>
    <section class="content">
       <div> <h1>Nouveauté</h1>
        <p>notre cataloge dfgh ghj jk cvb</p>
        <button>Decouvreir</button>
    </div>
    <div>
        
    </div>
    </section>


    <h1 class="produits_text">nos meilleur ventes</h1>
    
  
    <section class="section_produits">
       <div class="produits">
        <div class="carte">
        

  
            <div class="img">
            <?php
            $reponse = $conn->query("select * from produit where id=1");
                    $mi = $reponse->fetch();
        ?>
            <img src="admin/uploadImage<?php echo $mi["image"]?>" alt=""></div>
            <div class="desc">serviette en coton</div>
            <div class="titre">Pc abd</div>
            <div class="box">
                <div class="prix"> <?php
                $reponse = $conn->query("select * from produit where id=1");
while($donnees = $reponse->fetch()){
?><?php echo $donnees["price"] ?></div>
                <button class="achat">acheter</button>
            </div>
        </div>
        <?php
}
?>
        <div class="carte">
            <div class="img"><img src="image/ser1.jpg" alt=""></div>
            <div class="desc">huile</div>
            <div class="titre">Pc abd</div>
            <div class="box">
                <div class="prix">650fcfa</div>
                <button class="achat">acheter</button>
            </div>
        </div>
        <div class="carte">
            <div class="img"><img src="image/ser2.jpg" alt=""></div>
            <div class="desc">Tourteau de coton pour la volaille</div>
            <div class="titre">Pc abd</div>
            <div class="box">
                <div class="prix">650fcfa</div>
                <button class="achat">acheter</button>
            </div>
        </div>
        <div class="carte">
            <div class="img"><img src="image/coffee.png" alt=""></div>
            <div class="desc">tissu 2</div>
            <div class="titre">Pc abd</div>
            <div class="box">
                <div class="prix">650fcfa</div>
                <button class="achat">acheter</button>
            </div>
        </div>
        <div class="carte">
            <div class="img"><img src="image/coffee.png" alt=""></div>
            <div class="desc">tissu 2</div>
            <div class="titre">Pc abd</div>
            <div class="box">
                <div class="prix">650fcfa</div>
                <button class="achat">acheter</button>
            </div>
        </div>
        <div class="carte">
            <div class="img"><img src="image/coffee.png" alt=""></div>
            <div class="desc">tissu 2</div>
            <div class="titre">Pc abd</div>
            <div class="box">
                <div class="prix">650fcfa</div>
                <button class="achat">acheter</button>
            </div>
        </div>
        <div class="carte">
            <div class="img"><img src="image/coffee.png" alt=""></div>
            <div class="desc">tissu 2</div>
            <div class="titre">Pc abd</div>
            <div class="box">
                <div class="prix">650fcfa</div>
                <button class="achat">acheter</button>
            </div>
        </div>
        <div class="carte">
            <div class="img"><img src="image/coffee.png" alt=""></div>
            <div class="desc">tissu 2</div>
            <div class="titre">Pc abd</div>
            <div class="box">
                <div class="prix">650fcfa</div>
                <button class="achat">acheter</button>
            </div>
        </div>
        <div class="carte">
            <div class="img"><img src="image/coffee.png" alt=""></div>
            <div class="desc">tissu 2</div>
            <div class="titre">Pc abd</div>
            <div class="box">
                <div class="prix">650fcfa</div>
                <button class="achat">acheter</button>
            </div>
        </div>
        <div class="carte">
            <div class="img"><img src="image/coffee.png" alt=""></div>
            <div class="desc">tissu 2</div>
            <div class="titre">Pc abd</div>
            <div class="box">
                <div class="prix">650fcfa</div>
                <button class="achat">acheter</button>
            </div>
        </div>
        <div class="carte">
            <div class="img"><img src="image/coffee.png" alt=""></div>
            <div class="desc">tissu 2</div>
            <div class="titre">Pc abd</div>
            <div class="box">
                <div class="prix">650fcfa</div>
                <button class="achat">acheter</button>
            </div>
        </div>
        <div class="carte">
            <div class="img"><img src="image/coffee.png" alt=""></div>
            <div class="desc">tissu 2</div>
            <div class="titre">Pc abd</div>
            <div class="box">
                <div class="prix">650fcfa</div>
                <button class="achat">acheter</button>
            </div>
        </div>
       </div>
    </section>
    <?php include('voirplus.php') ?><br>
    <?php include('footer.php') ?>
</body>
</html>