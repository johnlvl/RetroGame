<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Design/RetroGame_1.png" />
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Retro Game Seller</title>
</head>
<body>


<!-- Section: Design Block -->
<section class="text">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('Design/RetroGame.png');
        height: 200px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Panneau Vendeur</h2>
        </div>
       </div>

<!--Ajouter un article-->
<form>
<fieldset>


<!-- Form Name -->
<legend>Ajouter un article</legend>

<!-- Text input-->
<div class="row">
<div class="col-md-6 mb-4">
        
    <div class="form-group">
    <label class="col-md-4 control-label" for="product_id">ID du produit</label>  
    <div class="col-md-4">
    <input id="product_id" name="product_id" class="form-control input-md" required="" type="text">
        
    </div>
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="product_name">Nom du produit</label>  
    <div class="col-md-4">
    <input id="product_name" name="product_name" class="form-control input-md" required="" type="text">
        
    </div>
    </div>



    <!-- Select Basic -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="product_categorie">Plateforme</label>
    <div class="col-md-4">
        <select id="product_categorie" name="product_categorie" class="form-control">
        </select>
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="available_quantity">Quantiter en stock</label>  
    <div class="col-md-4">
    <input id="available_quantity" name="available_quantity" class="form-control input-md" required="" type="text">
        
    </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="product_name_fr">Description du produit</label>
    <div class="col-md-4">                     
        <textarea class="form-control" id="product_name_fr" name="product_name_fr"></textarea>
    </div>
    </div>


    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="price">Prix</label>  
    <div class="col-md-4">
    <input id="price" name="price" class="form-control input-md" required="" type="text">
        
    <!-- File Button --> 
    <div class="form-group">
    <label class="col-md-4 control-label" for="filebutton">Image</label>
    <div class="col-md-4">
        <input id="filebutton" name="filebutton" class="input-file" type="file">
    </div>
    </div>

    <!-- Button -->
    <div class="form-group">
    <div class="col-md-4">
        <br><button id="singlebutton" name="singlebutton" class="btn btn-primary">Ajouter</button>
    </div>
    </div>

    </fieldset>
    
    <!--Supprimer un article-->
    <br><legend>Supprimer un article</legend>
    
    <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="product_id">ID du produit</label>  
        <div class="col-md-4">
        <input id="product_id" name="product_id" class="form-control input-md" required="" type="text">
            
        </div>
        </div>
    <!-- Button -->
        <div class="form-group">
        <div class="col-md-4">
            <br><button id="singlebutton" name="singlebutton" class="btn btn-primary">Supprimer</button>
        </div>
        </div>




        </div>
</form>
</body>
</html>