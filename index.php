<?php
session_start();
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

<!--Header-->
    <header id="container">
       <div class="nav">
            <div class="topLogo">
            <img src="Design/RetroGame_1.png" alt="logo">
            </div>

            <div class="searchBar">
                <input type="text" placeholder="Rechercher...">
            </div>

            <div class="logoAccountEtc">
                <a href="shoppingCard.php"><img class="panier" src="Design/panier.png" alt="panier"></a>
                <a href="connection.php"><img src="Design/icons_account.png" alt="account"></a>
            </div>
        </div>
    </header>

<!--NAVBAR-->
    <nav class="navbar navbar-expand-lg" style="background-color: #F5225C;">
        <div class="container">
           
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Playstation 5
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Prochaine sortie</a></li>
                <li><a class="dropdown-item" href="#">Nouveautés</a></li>
                <li><a class="dropdown-item" href="#">Jeux PS5</a></li>
                <li><a class="dropdown-item" href="#">Accesoires PS5</a></li>
            </ul>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Playstation 4
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Prochaine sortie</a></li>
                <li><a class="dropdown-item" href="#">Nouveautés</a></li>
                <li><a class="dropdown-item" href="#">Jeux PS4</a></li>
                <li><a class="dropdown-item" href="#">Accesoires PS4</a></li>
            </ul>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Xbox Series
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Prochaine sortie</a></li>
                <li><a class="dropdown-item" href="#">Nouveautés</a></li>
                <li><a class="dropdown-item" href="#">Jeux Xbox Series</a></li>
                <li><a class="dropdown-item" href="#">Accesoires Xbox Series</a></li>
            </ul>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Xbox One
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Prochaine sortie</a></li>
                <li><a class="dropdown-item" href="#">Nouveautés</a></li>
                <li><a class="dropdown-item" href="#">Jeux Xbox One</a></li>
                <li><a class="dropdown-item" href="#">Accesoires Xbox One</a></li>
            </ul>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Switch
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Prochaine sortie</a></li>
                <li><a class="dropdown-item" href="#">Nouveautés</a></li>
                <li><a class="dropdown-item" href="#">Jeux Switch</a></li>
                <li><a class="dropdown-item" href="#">Accesoires Switch</a></li>
            </ul>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Retro
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Prochaine sortie</a></li>
                <li><a class="dropdown-item" href="#">Nouveautés</a></li>
                <li><a class="dropdown-item" href="#">Jeux Retro</a></li>
                <li><a class="dropdown-item" href="#">Accesoires Retro</a></li>
            </ul>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PC
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Prochaine sortie</a></li>
                <li><a class="dropdown-item" href="#">Nouveautés</a></li>
                <li><a class="dropdown-item" href="#">Jeux PC</a></li>
                <li><a class="dropdown-item" href="#">Accesoires PC</a></li>
            </ul>
            </li>
        </div>
    </nav>

<!--PROCHAINE SORTIE ATTENDU-->
    <div id="carrousel">
        <div class="title">
            <div class="titleh3">
                <h3>Prochaine sortie attendu</h3>
            </div>
            
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="Design/Hogward_Legacy.jpg" class="d-block w-100" alt="Hogward Legacy">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Disponible le 10 février 2023</h5>
                    <p>LIVE THE UNWRITTEN</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="Design/MW2.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Disponible le 28 octobre 2022</h5>
                    <p>Reboot de l'emblématique jeu de tir à la première personne Call of Duty Modern Warfare 2, sorti en 2009.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="Design/GOWR.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Disponible le 9 novembre 2022</h5>
                    <p>LA SAGA NORDIQUE CONTINUE</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

           
        </div>

            <div class="subTitle">
                <div class="subTitleh3">
                    <h3>79.00 €</h3>
                    <button type="button">Precommander</button>
                </div>
            
            </div>
    </div>




<!--DERNIERE SORTIE-->
    <div id="titleDerniereSortie">
        <h3>DERNIERE SORTIE</h3>
    </div>
        <div id="derniereSortie">
                <div id="pictureFifa">
                    <img src="Design/Fifa23.jpg" class="rounded float-center" alt="...">
                    <div class="subPicFifa">
                            <div class="priceFifa">
                                <h3>79.00 €</h3>
                                <button type="button">Precommander</button>
                            </div>
                    </div>
                </div>    
                <div id="pictureNba">
                    <img src="Design/nba2k23.jpg" class="rounded float-center" alt="...">
                    <div class="subPicNba">
                            <div class="priceFifa">
                                <h3>79.00 €</h3>
                                <button type="button">Precommander</button>
                            </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>


<!-- Sous Derniere sortie-->
    <div id="titleSousDS">
        <h4>Dernière sortie</h4>
    </div>

    <div id="sousDerniereSortie">   
        <div class="images">
            <figure class="image">
                <img class="imageItem" src="Design/Nouveaute_1.jpg" alt="">
                <figcaption class="image-description">79.99 €</figcaption>
                <button type="button">Acheter</button>
            </figure>
        </div>

        <div class="images">
        <figure class="image">
            <img class="imageItem" src="Design/Nouveaute_2.jpg" alt="">
            <figcaption class="image-description">79.99 €</figcaption>
            <button type="button">Acheter</button>
        </figure>
        </div>

        <div class="images">
        <figure class="image">
            <img class="imageItem" src="Design/Nouveaute_3.jpg" alt="">
            <figcaption class="image-description">79.99 €</figcaption>
            <button type="button">Acheter</button>
        </figure>
        </div>

        <div class="images">
        <figure class="image">
            <img class="imageItem" src="Design/Nouveaute_4.jpg" alt="">
            <figcaption class="image-description">79.99 €</figcaption>
            <button type="button">Acheter</button>
        </figure>
        </div>

        <div class="images">
        <figure class="image">
            <img class="imageItem" src="Design/Nouveaute_5.jpg" alt="">
            <figcaption class="image-description">79.99 €</figcaption>
            <button type="button">Acheter</button>
        </figure>
        </div>

    </div>




<!--TOP VENTES-->
    <div id="titleTopVente">
            <h4>Top ventes</h4>
    </div>

    <div id="topVente">
        
        <div class="imagesTopVente">
        <figure class="imageTopVente">
            <img class="imageItem" src="Design/Top_1.jpg" alt="">
            <figcaption class="image-description">79.99 €</figcaption>
            <button type="button">Précommander</button>
        </figure>
        </div>

        <div class="imagesTopVente">
        <figure class="imageTopVente">
            <img class="imageItem" src="Design/Top_2.png" alt="">
            <figcaption class="image-description">79.99 €</figcaption>
            <button type="button">Acheter</button>
        </figure>
        </div>

        <div class="imagesTopVente">
        <figure class="imageTopVente">
            <img class="imageItem" src="Design/Top_3.jpg" alt="">
            <figcaption class="image-description">79.99 €</figcaption>
            <button type="button">Précommander</button>
        </figure>
        </div>

        <div class="imagesTopVente">
        <figure class="imageTopVente">
            <img class="imageItem" src="Design/Top_4.webp" alt="">
            <figcaption class="image-description">79.99 €</figcaption>
            <button type="button">Précommander</button>
        </figure>
        </div>

        <div class="imagesTopVente">
        <figure class="imageTopVente">
            <img class="imageItem" src="Design/Top_5.jpg" alt="">
            <figcaption class="image-description">79.99 €</figcaption>
            <button type="button">Précommander</button>
        </figure>
        </div>
    </div>



<!--VOIR TOUT-->
    <div id="buttonVoirTout">
        <button type="button">VOIR TOUT</button>
    </div>


<!--FOOTER-->
<div class="footer-basic">
        <footer>
            <div class="social">
                <a href="#"><i class="icon ion-social-instagram"></i></a>
                <a href="#"><i class="icon ion-social-snapchat"></i></a>
                <a href="#"><i class="icon ion-social-twitter"></i></a>
                <a href="#"><i class="icon ion-social-facebook"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Contact</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Retro Game © 2022</p>
        </footer>
    </div>
   






</body>
</html>