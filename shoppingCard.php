<?php
session_start();
include_once("fonctions-panier.php");

$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
   if(!in_array($action,array('ajout', 'suppression', 'refresh')))
   $erreur=true;

   //récupération des variables en POST ou GET
   $name = (isset($_POST['name'])? $_POST['name']:  (isset($_GET['name'])? $_GET['name']:null )) ;
   $price = (isset($_POST['price'])? $_POST['price']:  (isset($_GET['price'])? $_GET['price']:null )) ;
   $quantity = (isset($_POST['quantity'])? $_POST['quantity']:  (isset($_GET['quantity'])? $_GET['quantity']:null )) ;

   //Suppression des espaces verticaux
   $name = preg_replace('#\v#', '',$name);
   //On vérifie que $price est un float
   $price = floatval($price);

   //On traite $quantity qui peut être un entier simple ou un tableau d'entiers
    
   if (is_array($quantity)){
      $QteArticle = array();
      $i=0;
      foreach ($quantity as $contenu){
         $QteArticle[$i++] = intval($contenu);
      }
   }
   else
   $quantity = intval($quantity);
    
}

if (!$erreur){
   switch($action){
      Case "ajout":
         ajouterArticle($name,$quantity,$price);
         break;

      Case "suppression":
         supprimerArticle($name);
         break;

      

      Default:
         break;
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
          <h2 class="fw-bold mb-5">Panier</h2>


<form method="post" action="shoppingCard.php">
<table style="width: 400px">
    <tr>
        <td colspan="4">Votre panier</td>
    </tr>
    <tr>
        <td>Nom</td>
        <td>Quantité</td>
        <td>Prix Unitaire</td>
        <td></td>
    </tr>


    <?php
    if (creationPanier())
    {
      if(isset($_SESSION['panier']['name'])){
        $nbArticles=count($_SESSION['panier']['name']);
        if ($nbArticles <= 0)
        echo "<tr><td>Votre panier est vide </ td></tr>";
        else
        {
            for ($i=0 ;$i < $nbArticles ; $i++)
            {
              echo "<tr>";
              echo "<td>".htmlspecialchars($_SESSION['panier']['name'][$i])."</ td>";
              echo "<td><input type=\"text\" size=\"4\" name=\"quantity[]\" value=\"".htmlspecialchars($_SESSION['panier']['quantity'][$i])."\"/></td>";
              echo "<td>".htmlspecialchars($_SESSION['panier']['price'][$i])."</td>";
              echo "<td><a href=\"".htmlspecialchars("shoppingCard.php?action=suppression&name=".rawurlencode($_SESSION['panier']['name'][$i]))."\">Supprimé</a></td>";
              echo "</tr>";
            }

            echo "<tr><td colspan=\"2\"> </td>";
            echo "<td colspan=\"2\">";
            echo "Total : ".MontantGlobal();
            echo "</td></tr>";

            

            echo "</td></tr>";
        }
      }
      else {
        echo "<tr><td>Votre panier est vide </ td></tr>";
      }
    }
    ?>
</table>
</form>


        <div class="d-flex justify-content-end">
          <button type="button" class="btn btn-light btn-lg me-2"><a href="index.php" >Retour à l'acceuil</a></button>
          <button type="button" class="btn btn-light btn-lg me-2"><a href="index.php">Continuer les achats</a></button>
          <button type="button" class="btn btn-light btn-lg">Commander</button>
        </div>

      </div>
    </div>
  </div>
</section>



</body>
</html>