<?php


// CONNEXION
if(!empty($_POST['email']) && !empty($_POST['password'])){

	// VARIABLES
	$email = $_POST['email'];
	$password = $_POST['password'];
	$error = 1;

  // CRYPTER LE PASSWORD
	$password = "aq1".sha1($password."1254")."25";

	echo $password;

	$req = $db->prepare('SELECT * FROM customer WHERE email = ?');
	$req->execute(array($email));

	while($customer = $req->fetch()){

		if($password == $customer['password']){
			$error = 0;
			$_SESSION['connect'] = 1;
			$_SESSION['pseudo']	 = $customer['pseudo'];

			if(isset($_POST['connect'])) {
				setcookie('log', $customer['secret'], time() + 365*24*3600, '/', null, false, true);
			}

			header('location: connection.php?success=1');
			exit();
		}

	}

	if($error == 1){
		header('location: connection.php?error=1');
		exit();
	}
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
          <h2 class="fw-bold mb-5">Se connecter</h2>

          <?php
                if(isset($_GET['error'])){
                  echo'<p id="error">Nous ne pouvons pas vous authentifier.</p>';
                }
                else if(isset($_GET['success'])){
                  echo'<p id="success">Vous êtes maintenant connecté.</p>';
			          }
		      ?>

          <form method="POST" action="connection.php">
          
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" class="form-control" />
              <label class="form-label" for="form3Example3">Email</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form3Example4" class="form-control" />
              <label class="form-label" for="form3Example4">Mot de passe</label>
            </div>

            
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Se connecter
            </button>

            <!-- Register buttons -->
            <div class="text-center">
              <p>Pas de compte?</p>
              <a href="register.php">S'inscrire</a><br>
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