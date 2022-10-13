<?php
session_start();

//connection à la bdd
require('db.php');


if(isset($_POST["first_name"]) && isset($_POST["last_name"])){
    // Cryptage mdp
    $password = "aq1".sha1($_POST["password"]."1254")."25";
    //requête
    $req = $db->prepare("UPDATE customer SET first_name = ?, last_name = ?, email = ?, phone = ?, adress = ?, password = ?");
    $req->execute(array($_POST["first_name"], $_POST["last_name"], $_POST["email"], $_POST["phone"], $_POST["adress"], $password));

    //récupère les données
    $modif = $req->fetchAll();

}
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
    <title>Retro Game Modification comtpe</title>
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

          <form method="POST" action="modifPersonalInfo.php">
           

  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Nom</p>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="last_name" class="text-muted mb-0">
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Prénom</p>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="first_name" class="text-muted mb-0">
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="email" class="text-muted mb-0" required>
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Téléphone Mobile</p>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="phone" class="text-muted mb-0">
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Adresse</p>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="adress" class="text-muted mb-0"></p>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Mot de passe</p>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="password" class="text-muted mb-0" required>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-light btn-lg me-2"><a href="personalInfo.php" >Retour</a></button>
                    <button type="submit" class="btn btn-light btn-lg">Confirmer les changements</button>
                </div>
        </div>
        
            </form>
        
    </div>
  
</div>


</section>

</body>
</html>