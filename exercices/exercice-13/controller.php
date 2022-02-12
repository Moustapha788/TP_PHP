<?php
/* démarre la session*/
session_start();
// inclusions de fonctions
include_once("fonctions.php");
?>



<link rel="stylesheet" href="/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/css_accueil/style.css">
<link rel="stylesheet" href="/MES_PROJETS/TP_PHP/exercices/css_exercices/style.css">







<?php
/* contrôle de la saisie */
if(isset($_POST['validated'])){

    $paragraphSaisi=$_POST['paragraph'];
    
    // sauvegarde des données durant la session
    $_SESSION['post']=$_POST;
    // $paragraphSaisi;
    // $paragraphCorrige=scindeParagrah($paragraphSaisi);
    $_SESSION['resultat']=$paragraphCorrige;    
    header("location:index.php");
    exit();
    
}else{
    // Redirection dans la page index.php
    header('location:index.php',false);
    exit();
}


?>


