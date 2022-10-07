<?php
session_start();

//connection à la bdd
require('db.php');

//requête
$req = $db->prepare("SELECT * FROM customer");
$req->execute(array());

//récupère les données
$infoPerso = $req->fetchAll();

?>
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
    <title>Retro Game comtpe</title>
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

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Information compte</h2>

          <form method="POST" action="personalInfo.php">
            <?php foreach($infoPerso as $infoPersos): ?>

  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Nom, prénom</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"><?php echo $infoPersos["last_name"]." " .$infoPersos["first_name"]?></p>
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"><?php echo $infoPersos["email"]?></p>
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Téléphone</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"><?php echo $infoPersos["phone"]?></p>
                        </div>
                        </div>
                        <hr>
                        
                        <hr>
                        <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Adresse</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"><?php echo $infoPersos["adress"]?></p>
                        </div>
                    </div>
                </div>
            </div>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-light btn-lg me-2"><a href="index.php" >Retour à l'acceuil</a></button>
                    <button type="button" class="btn btn-light btn-lg"><a href="modifPersonalInfo.php">Modifier les informations</a></button>
                </div>
        </div>
        <?php endforeach; ?>
            </form>
        
    </div>
  
</div>





<!--Dernière commande-->
<?php

//requête
$req = $db->query("SELECT * FROM last_command");

//récupère les données
$lastCommand = $req->fetchAll();


?>

<div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Dernière commande</h2>

          
          <form method="POST" action="personnalInfo.php">
          <?php 
          //requête
          $req = $db->query("SELECT * FROM last_command");
          //récupère les données
          $lastCommand = $req->fetchAll();
          foreach($lastCommand as $lastCommands): 
          ?>

<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        

        <div class="card mb-4">
          <div class="card-body p-4">

            <div class="row align-items-center">
              
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2">Nom</p>
                  <p class="lead fw-normal mb-0" name="name"><?php echo $lastCommands["name"]?></p>
                </div>
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2">Plateforme</p>
                  <p class="lead fw-normal mb-0"><?php echo $lastCommands["platform"]?></p>
                </div>
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2">Prix</p>
                  <p class="lead fw-normal mb-0"><?php echo $lastCommands["price"]?></p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="card mb-5">
          <div class="card-body p-4">

            <div class="float-end">
              <p class="mb-0 me-5 d-flex align-items-center">
                <span class="small text-muted me-2">Total commande:</span> <span
                  class="lead fw-normal"><?php echo $lastCommands["price"]?></span>
              </p>
            </div>

          </div>
        </div>

        <div class="d-flex justify-content-end">
          <button type="button" class="btn btn-light btn-lg me-2"><a href="index.php" >Retour à l'acceuil</a></button>
          <button type="button" class="btn btn-light btn-lg">Suivre la commande</button>
        </div>

      </div>
    </div>
  </div>
  
  </form>

  <?php endforeach; ?>
</section>

</body>
</html>