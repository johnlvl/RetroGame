<?php
session_start();
    require('db.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Site de vente de jeux-vidéo retro et récent.">
    <meta name="keywords" content="jeux retro, jeux video">
    <meta name="author" content="John">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Design/RetroGame_1.png" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Retro Game</title>
</head>
<body>

<!--Header-->
<header id="container">
    <form action="index.php" method="POST">
       <div class="nav">
            <div class="topLogo">
            <a href="index.php"><img src="Design/RetroGame_1.png" alt="logo"></a>
            </div>
            
            
            <div class="searchBar">
                <input type="text" name="searchBar" placeholder="Rechercher...">
            </div>
    </form>
            <div class="logoAccountEtc">
                <a href="shoppingCard.php"><img class="panier" src="Design/panier.png" alt="panier"></a>


                <?php if(isset($_SESSION['connect'])){ ?>
                    <a href="personalInfo.php"><img src="Design/icons_account.png" alt="account"></a>
                    <a href="disconnect.php"><img src="Design/cross.png" alt=""></a>
                <?php } else{ ?>
                    <a href="connection.php"><img src="Design/icons_account.png" alt="account"></a>
                <?php } ?>
            </div>
        </div>
    </header>