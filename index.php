<?php
session_start();
    require('db.php');
?>

<?php
    require('header.php');
?>

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

    </div>




<!--DERNIERE SORTIE-->
    <div id="titleDerniereSortie">
    
        <h3>DERNIERE SORTIE</h3>
    </div>
    <form method="post" action="panier.php">
        <div id="derniereSortie">
            
                <div id="pictureFifa">
                    <img src="Design/Fifa23.jpg" class="rounded float-center" alt="...">
                    <div class="subPicFifa">
                            <div class="priceFifa">
                                <h3>79.99</h3>
                                <button type="button"><a href="shoppingCard.php?action=ajout&amp;name=Fifa 23&amp;quantity=1&amp;price=79.99" onclick="window.location.href='shoppingCard.php'(this.href, '', 
                                'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Précommander</a></button>
                            </div>
                    </div>
                 
                </div>    
                <div id="pictureNba">
                    <img src="Design/nba2k23.jpg" class="rounded float-center" alt="...">
                    <div class="subPicNba">
                            <div class="priceFifa">
                                <h3>79.99 €</h3>
                                <button type="button"><a href="shoppingCard.php?action=ajout&amp;name=NBA 2K23&amp;quantity=1&amp;price=79.99" onclick="window.location.href='shoppingCard.php'(this.href, '', 
                                'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Précommander</a></button>
                            </div>
                    </div>
                </div>    
            </div>
        </div>
        
        
        </div>
    </form>


<!-- Sous Derniere sortie-->
    <div id="titleSousDS">
        <h4>Dernière sortie</h4>
    </div>

    <div id="sousDerniereSortie">   
        <div class="images1">
            <figure class="image">
                <img class="imageItem" src="Design/Nouveaute_1.jpg" alt="">
                <figcaption class="image-description">79.99 €</figcaption>
                <button type="button"><a href="shoppingCard.php?action=ajout&amp;name=Session&amp;quantity=1&amp;price=79.99" onclick="window.location.href='shoppingCard.php'(this.href, '', 
                                'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Acheter</a></button>
            </figure>
        </div>

        <div class="images">
            <figure class="image">
                <img class="imageItem" src="Design/Nouveaute_2.jpg" alt="">
                <figcaption class="image-description">79.99 €</figcaption>
                <button type="button"><a href="shoppingCard.php?action=ajout&amp;name=Stray&amp;quantity=1&amp;price=79.99" onclick="window.location.href='shoppingCard.php'(this.href, '', 
                                    'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Acheter</a></button>
            </figure>
        </div>

        <div class="images">
            <figure class="image">
                <img class="imageItem" src="Design/Nouveaute_3.jpg" alt="">
                <figcaption class="image-description">69.99 €</figcaption>
                <button type="button"><a href="shoppingCard.php?action=ajout&amp;name=Splatoon 3&amp;quantity=1&amp;price=69.99" onclick="window.location.href='shoppingCard.php'(this.href, '', 
                                    'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Acheter</a></button>
            </figure>
        </div>

        <div class="images">
            <figure class="image">
                <img class="imageItem" src="Design/Nouveaute_4.jpg" alt="">
                <figcaption class="image-description">79.99 €</figcaption>
                <button type="button"><a href="shoppingCard.php?action=ajout&amp;name=SteeelRising&amp;quantity=1&amp;price=79.99" onclick="window.location.href='shoppingCard.php'(this.href, '', 
                                    'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Acheter</a></button>
            </figure>
        </div>

        <div class="images">
            <figure class="image">
                <img class="imageItem" src="Design/Nouveaute_5.jpg" alt="">
                <figcaption class="image-description">69.99 €</figcaption>
                <button type="button"><a href="shoppingCard.php?action=ajout&amp;name=Made in Abyss&amp;quantity=1&amp;price=69.99" onclick="window.location.href='shoppingCard.php'(this.href, '', 
                                    'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Acheter</a></button>
            </figure>
        </div>

    </div>




<!--TOP VENTES-->
    <div id="titleTopVente">
            <h4>Top ventes</h4>
    </div>

    <div id="topVente">
        
        <div class="imagesTopVente1">
        <figure class="imageTopVente">
            <img class="imageItem" src="Design/Top_1.jpg" alt="">
            <figcaption class="image-description">79.99 €</figcaption>
            <button type="button"><a href="shoppingCard.php?action=ajout&amp;name=God of War Ragnarok&amp;quantity=1&amp;price=79.99" onclick="window.location.href='shoppingCard.php'(this.href, '', 
                                'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Précommander</a></button>
        </figure>
        </div>

        <div class="imagesTopVente">
        <figure class="imageTopVente">
            <img class="imageItem" src="Design/Top_2.png" alt="">
            <figcaption class="image-description">79.99 €</figcaption>
            <button type="button"><a href="shoppingCard.php?action=ajout&amp;name=Fifa 23&amp;quantity=1&amp;price=79.99" onclick="window.location.href='shoppingCard.php'(this.href, '', 
                                'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Acheter</a></button>
        </figure>
        </div>

        <div class="imagesTopVente">
        <figure class="imageTopVente">
            <img class="imageItem" src="Design/Top_3.jpg" alt="">
            <figcaption class="image-description">79.99 €</figcaption>
            <button type="button"><a href="shoppingCard.php?action=ajout&amp;name=Hogwarts Legacy&amp;quantity=1&amp;price=79.99" onclick="window.location.href='shoppingCard.php'(this.href, '', 
                                'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Précommander</a></button>
        </figure>
        </div>

        <div class="imagesTopVente">
        <figure class="imageTopVente">
            <img class="imageItem" src="Design/Top_4.webp" alt="">
            <figcaption class="image-description">79.99 €</figcaption>
            <button type="button"><a href="shoppingCard.php?action=ajout&amp;name=Assassin's creed Mirage&amp;quantity=1&amp;price=79.99" onclick="window.location.href='shoppingCard.php'(this.href, '', 
                                'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Précommander</a></button>
        </figure>
        </div>

        <div class="imagesTopVente">
        <figure class="imageTopVente">
            <img class="imageItem" src="Design/Top_5.jpg" alt="">
            <figcaption class="image-description">79.99 €</figcaption>
            <button type="button"><a href="shoppingCard.php?action=ajout&amp;name=Call of Duty MW2&amp;quantity=1&amp;price=79.99" onclick="window.location.href='shoppingCard.php'(this.href, '', 
                                'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Précommander</a></button>
        </figure>
        </div>
    </div>



<!--VOIR TOUT-->
    <div id="buttonVoirTout">
        <button type="button">VOIR TOUT</button>
    </div>


<!--FOOTER-->

<?php
require('footer.php')
?>