<?php
/* démarre la session*/
session_start();
?>

<link rel="stylesheet" href="/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/css_accueil/style.css">
<link rel="stylesheet" href="/MES_PROJETS/TP_PHP/exercices/css_exercices/style.css">
<?php 
// inclusion des fonctions
include_once("fonctions.php");
?>














<?php
/* contrôle de la saisie */
if(isset($_POST['validated'])  ){

    $saisie=$_POST['numeros'];
    $_SESSION["saisie"]=$_POST;
    // sauvegarde des données durant la session
    $traitementNum=theGreatFunctionForNumbers($saisie);
    // ceux qui sont valides
    $_SESSION["valid"]=afficherNumerosValid($traitementNum['validNum']['num70'],'70');
    $_SESSION["valid"].=afficherNumerosValid($traitementNum['validNum']['num75'],'75');
    $_SESSION["valid"].=afficherNumerosValid($traitementNum['validNum']['num76'],'76');
    $_SESSION["valid"].=afficherNumerosValid($traitementNum['validNum']['num77'],'77');
    $_SESSION["valid"].=afficherNumerosValid($traitementNum['validNum']['num78'],'78');
    // ceux qui sont invalides
    $_SESSION["invalid"]=afficherNumerosInvalid($traitementNum['invalidNum']);
    header("location:index.php/");
    exit();
    
}else{
    // Redirection dans la page index.php
    header('location:index.php',false);
    exit();
}

?>

