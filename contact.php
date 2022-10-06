<?php
session_start();

require("db.php");

if(isset($_POST['email']) && isset($_POST['message_type']) && isset($_POST['message_send'])){
  $email = $_POST['email'];
  $messageType = $_POST['message_type'];
  $message = $_POST['message_send'];

  //prépare la requête
  $req = $db->prepare('INSERT INTO message_contact (email, message_type, message_send) VALUES (?, ?, ?)');
  $req->execute(array($email, $messageType, $message));

  header('location: contact.php?success=send');

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
          <h2 class="fw-bold mb-5">Contact</h2>

          <?php
            if(isset($_GET['success'])){
              echo '<p id="success">Message envoyé.</p>';
            }
          ?>
         
          <form method="POST" action="contact.php">
            
            <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example3" class="form-control" name='email'/>
                    <label class="form-label" for="form3Example3">Email</label>
                    </div>

            <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example4" class="form-control" name='message_type'/>
                    <label class="form-label" for="form3Example4">Intituler de la demande</label>
                  </div>


            <!--Message-->
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="product_id">Message</label>  
                    <div class="col-md-12">
                        <textarea id="message" name="message_send" class="form-control input-md" type="text"></textarea>   
                    </div>
                  </div><br>

                        
            <!-- Submit button -->
                  <button type="submit" class="btn btn-primary btn-block mb-4">
                    Envoyer
                  </button>

            <!-- Register buttons -->
                  <div class="text-center">
                    
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