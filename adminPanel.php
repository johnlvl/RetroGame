<?php
session_start();

//connection à la bdd
require('db.php');


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Design/RetroGame_1.png" />
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha3812-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha3812-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi1266C8" crossorigin="anonymous"></script>
    <title>Retro Game Admin</title>
</head>
<body>

<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('Design/RetroGame.png');
        height: 200px;
        "></div>
  <!-- Background image -->

  <div class="card mx-12 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-5">Panneau Administrateur</h2>
            </div>
        




<?php
if(!empty($_POST["name"]) && !empty($_POST["product_categorie"]) && !empty($_POST["price"])){
    if(isset($_POST["name"]) && isset($_POST["product_categorie"]) && isset($_POST["price"])){
        $name = htmlspecialchars($_POST["name"]);
        $product_categorie = htmlspecialchars($_POST["product_categorie"]);
        $price = htmlspecialchars($_POST["price"]);

        //$filebutton = htmlspecialchars($_POST["filebutton"]);

        //requête
        $req = $db->prepare("INSERT INTO article (name, platform, price) VALUES (:name, :platform, :price)");
        //injecte les données
        $req->bindValue(":name", $name, PDO::PARAM_STR);
        $req->bindValue(":platform", $product_categorie, PDO::PARAM_STR);
        $req->bindValue(":price", $price, PDO::PARAM_STR);
        
        //exécute la requête
        $req->execute();
    } else {
        echo "Problème";
    }
}
?>
<!--Ajouter un article-->
<form method="POST" action="adminPanel.php">
<fieldset>


<!-- Form Name -->
<legend>Ajouter un article</legend>

<!-- Text input-->


    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-12 control-label" for="product_name">Nom du produit</label>  
    <div class="col-md-12">
    <input id="product_name" name="name" class="form-control input-md" type="text">
        
    </div>
    </div>



    <!-- Select Basic -->
    <div class="form-group">
    <label class="col-md-12 control-label" for="product_categorie">Plateforme</label>  
    <div class="col-md-12">
    <input id="product_categorie" name="product_categorie" class="form-control input-md" type="text">
        
    </div>
    </div>


    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-12 control-label" for="price">Prix</label>  
    <div class="col-md-12">
    <input id="price" name="price" class="form-control input-md" type="text">

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-12 control-label" for="date">Date d'ajout</label>  
    <div class="col-md-12">
    <input id="price" name="dateAdd" class="form-control input-md" type="text">
        
    <!-- File Button --> 
    <div class="form-group">
    <label class="col-md-12 control-label" for="filebutton">Image</label>
    <div class="col-md-12">
        <input id="filebutton" name="filebutton" class="input-file" type="file">
    </div>
    </div>

    <!-- Button -->
    <div class="form-group">
    <div class="col-md-12">
        <br><button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Ajouter</button>
    </div>
    </div>

    </fieldset>
    


<!--Supprimer un article-->
    <?php
    if(!empty($_POST["delete"])){
        if(isset($_POST["delete"])){
            $delete = htmlspecialchars($_POST["delete"]);
    
            //requête
            $req = $db->prepare("DELETE FROM article WHERE name = ?");

            //exécute la requête
            $req->execute(array($_POST['delete']));
        }
    }
    ?>
    <br><legend>Supprimer un article</legend>
    
    <!-- Text input-->
        <div class="form-group">
        <label class="col-md-12 control-label" for="delete">ID du produit</label>  
        <div class="col-md-12">
        <input id="product_id" name="delete" class="form-control input-md" type="text">
            
        </div>
        </div>
    <!-- Button -->
        <div class="form-group">
        <div class="col-md-12">
            <br><button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Supprimer</button>
        </div>
        </div><br>







<!-- Form Name -->
    <legend>Message</legend>
<!-- Text input-->
    <div class="form-group">
        <label class="col-md-12 control-label" for="product_id">Message</label>  
        <div class="col-md-12">
            <textarea id="message" name="message" class="form-control input-md" type="text"></textarea>   
        </div>
        </div>







<!-- ajouter seller -->
    <?php
    if(!empty($_POST["sellerFirstName"]) && !empty($_POST["sellerLastName"]) && !empty($_POST["sellerPassword"])){
        if(isset($_POST["sellerFirstName"]) && isset($_POST["sellerLastName"]) && isset($_POST["sellerPassword"])){
            $sellerFirstName = htmlspecialchars($_POST["sellerFirstName"]);
            $sellerLastName = htmlspecialchars($_POST["sellerLastName"]);
             // Cryptage mdp
            $sellerPassword = "aq1".sha1($_POST["sellerPassword"]."1254")."25";

            //requête
            $req = $db->prepare("INSERT INTO seller (first_name, last_name, password) VALUES (:first_name, :last_name, :password)");
            //injecte les données
            $req->bindValue(":first_name", $sellerFirstName, PDO::PARAM_STR);
            $req->bindValue(":last_name", $sellerLastName, PDO::PARAM_STR);
            $req->bindValue(":password", $sellerPassword, PDO::PARAM_STR);
            //exécute la requête
            $req->execute();
    
        } else {
            echo "Problème";
        }
    }
    ?>
    <br><legend>Ajout vendeur</legend>
   <!-- 2 column grid layout with text inputs for the first and last names -->
   <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example1" class="form-control" name="sellerFirstName"/>
                  <label class="form-label" for="form3Example1">Prénom</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example2" class="form-control" name="sellerLastName"/>
                  <label class="form-label" for="form3Example2">Nom</label>
                </div>
              </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="password" id="form3Example3" class="form-control" name="sellerPassword"/>
              <label class="form-label" for="form3Example3">Mot de passe</label>
            </div>

            <!-- Button -->
            <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="btn btn-light btn-lg">Confirmer le vendeur</button>
            </div>
            </div>













        </div>
</form>







</div>
</div>    
</div>
</div>
</div>
</section>
</body>
</html>