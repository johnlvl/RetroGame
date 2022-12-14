<?php
session_start();
require('db.php');
// CONNEXION
if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['password'])){

	// VARIABLES
	$first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
	$password = $_POST['password'];
	$error = 1;

	$req = $db->prepare('SELECT * FROM admin WHERE first_name = ? AND last_name = ?');
	$req->execute(array($first_name, $last_name));

	while($admin = $req->fetch()){

		if($password == $admin['password']){
			$error = 0;
			$_SESSION['connect'] = 1;
			$_SESSION['admin_id']	 = $admin['id'];

			/*if(isset($_POST['connect'])) {
				setcookie('log', $admin['secret'], time() + 365*24*3600, '/', null, false, true);
			}*/

			header('location: adminPanel.php');
			exit();
		}

	}

	if($error == 1){
		header('location: adminConnection.php?error=1');
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
          <h2 class="fw-bold mb-5">Administrateur</h2>

          <?php
                if(isset($_GET['error'])){
                  echo'<p id="error">Nous ne pouvons pas vous authentifier.</p>';
                }
		      ?>

          <form method="POST" action="adminConnection.php">
          
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example1" class="form-control" name='first_name' />
                  <label class="form-label" for="form3Example1">Pr??nom</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example2" class="form-control" name='last_name'/>
                  <label class="form-label" for="form3Example2">Nom</label>
                </div>
              </div>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form3Example4" class="form-control" name='password'/>
              <label class="form-label" for="form3Example4">Mot de passe</label>
            </div>

            
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Se connecter
            </button>

            <!-- Register buttons -->
            <div class="text-center">
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