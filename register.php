<?php
require('db.php');


if(!empty($_POST['fist_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['adress'])){

    $firstName = $_POST['fist_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $adress = $_POST['adress'];
   
    
// test si email deja utilisé

$req = $db->prepare('SELECT COUNT(*) as numberEmail FROM customer WHERE email = ?');
$req->execute(array($email));


while($email_verification = $req->fetch()){
    if($email_verification['numberEmail'] != 0){
        header('location: register.php/?error=1&email=1');
    }
}

// Secret
$secret = sha1($email).time();
$secret = sha1($secret).time().time();

// Cryptage mdp
$password = "aq1".sha1($password."1254")."25";


// Envoie de la requete
$req = $db->prepare("INSERT INTO customer (first_name, last_name, email, password, adress, secret) VALUE (?, ?, ?, ?, ?, ?)");
$req->execute(array($firstName, $lastName, $email, $password, $adress, $secret));

header('location: index.php');


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
    <title>Retro Game</title>
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
          <h2 class="fw-bold mb-5">S'inscrire maintenant</h2>

          <?php
              if(isset($_GET['error'])){
                  if(isset($_GET['email'])){
                      echo '<p id="error">Cette adresse email est déjà utilisé.</p>';
                  }
              }
              else if(isset($_GET['success'])){
                  echo '<p id="success">Inscription faite.</p>';
              }
        
        
          ?>

          <form method="POST" action="register.php">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example1" class="form-control" name='fist_name' />
                  <label class="form-label" for="form3Example1">Prénom</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example2" class="form-control" name='last_name'/>
                  <label class="form-label" for="form3Example2">Nom</label>
                </div>
              </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" class="form-control" name="email"/>
              <label class="form-label" for="form3Example3">Email</label>
            </div>

            <!-- Adress input -->
            <div class="form-outline mb-4">
              <input type="text" id="form3Example4" class="form-control" name='adress'/>
              <label class="form-label" for="form3Example4">Adresse</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form3Example5" class="form-control" name='password'/>
              <label class="form-label" for="form3Example5">Mot de passe</label>
            </div>

            
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              S'inscrire
            </button>

            <!-- Register buttons -->
            <div class="text-center">
              <p>Déjà inscrit?</p>
              <a href="connection.php">Se connecter</a><br>
              <br>
              <a href="index.php">Accueil</a>
             
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>