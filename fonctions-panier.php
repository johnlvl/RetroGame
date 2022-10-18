<?php

/**
 * Verifie si le panier existe, le crée sinon
 * @return booleen
 */
function creationPanier(){
      $_SESSION['panier']=array();
      $_SESSION['panier']['name'] = array();
      $_SESSION['panier']['quantity'] = array();
      $_SESSION['panier']['price'] = array();
   
   return true;
}


/**
 * Ajoute un article dans le panier
 * @param string $name
 * @param int $quantity
 * @param float $price
 * @return void
 */
function ajouterArticle($name,$quantity,$price){

   //Si le panier existe
   if (isset($_SESSION['panier']['name']))
   {
      //Si le produit existe déjà on ajoute seulement la quantité
      $positionProduit = array_search($name, $_SESSION['panier']['name']);

      if ($positionProduit !== false)
      {
         $_SESSION['panier']['quantity'][$positionProduit] += $quantity ;
      }
      else
      {
         //Sinon on ajoute le produit
         array_push( $_SESSION['panier']['name'],$name);
         array_push( $_SESSION['panier']['quantity'],$quantity);
         array_push( $_SESSION['panier']['price'],$price);
      }
   }
   else
   {
      //Sinon on ajoute le produit
      creationPanier();
      array_push( $_SESSION['panier']['name'],$name);
      array_push( $_SESSION['panier']['quantity'],$quantity);
      array_push( $_SESSION['panier']['price'],$price);
      // $_SESSION['panier']['verrou'] = false;
   }
}



/**
 * Modifie la quantité d'un article
 * @param $name
 * @param $quantity
 * @return void
 */
function modifierQTeArticle($name,$quantity){
   //Si le panier existe
   if (creationPanier())
   {
      //Si la quantité est positive on modifie sinon on supprime l'article
      if ($quantity > 0)
      {
         //Recharche du produit dans le panier
         $positionProduit = array_search($name, $_SESSION['panier']['name']);

         if ($positionProduit !== false)
         {
            $_SESSION['panier']['quantity'][$positionProduit] = $quantity ;
         }
      }
      else
      supprimerArticle($name);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

/**
 * Supprime un article du panier
 * @param $name
 * @return unknown_type
 */
function supprimerArticle($name){
   //Si le panier existe
   if (creationPanier())
   {
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['name'] = array();
      $tmp['quantity'] = array();
      $tmp['price'] = array();
      

      for($i = 0; $i < count($_SESSION['panier']['name']); $i++)
      {
         if ($_SESSION['panier']['name'][$i] !== $name)
         {
            array_push( $tmp['name'],$_SESSION['panier']['name'][$i]);
            array_push( $tmp['quantity'],$_SESSION['panier']['quantity'][$i]);
            array_push( $tmp['price'],$_SESSION['panier']['price'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}


/**
 * Montant total du panier
 * @return int
 */
function MontantGlobal(){
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['name']); $i++)
   {
      $total += $_SESSION['panier']['quantity'][$i] * $_SESSION['panier']['price'][$i];
   }
   return $total;
}


/**
 * Fonction de suppression du panier
 * @return void
 */
function supprimePanier(){
   unset($_SESSION['panier']);
}

/**
 * Compte le nombre d'articles différents dans le panier
 * @return int
 */
function compterArticles()
{
   if (isset($_SESSION['panier']))
   return count($_SESSION['panier']['name']);
   else
   return 0;

}

?>