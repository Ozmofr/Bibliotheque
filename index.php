<?php
if(!isset($_GET['page'])){
    $_GET['page'] = 'acceuil';
}  
include_once('./header.php');
switch($_GET['page']){
    case ('acceuil'):
        break;
    case ('listep'):
        include_once('./listeProduit.php');
        break;
    case ('ajoutp'):
        include_once('./produit/ajoutProduit.php');
        break;
    case ('modificationp'):
        include_once('./produit/modifProduit.php');
        break;
    case ('Traitement') :
        include_once('./produit/TraitementProduit.php');
    case ('inscr'):
        include_once('./utilisateur/Inscription.php');
        break;
    case ('ListeU'):
        include_once('./utilisateur/listeUtilisateur.php');
        break;
    case ('TraitementU'):
        include_once('./utilisateur/TraitementUtilisateur.php');
        break;
    case('modificationu'):
        include_once('./utilisateur/modifUtilisateur.php');
        break;
    case ('Livre'):
        include_once('./produit/livre.js');
        break;
    default:
        break;

}
include_once('./footer.php');
?>