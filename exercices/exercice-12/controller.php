<?php
/* démarre la session*/
session_start();
/* inclusion des fonctions */
include_once("fonctions.php");
/* includsion de fonctions  */
include_once("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fonctionsCommunsExercicesAccueil/fonctionsCommuns.php");
?>
<!-- liens css -->
<link rel="stylesheet" href="/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/css_accueil/style.css">
<link rel="stylesheet" href="/MES_PROJETS/TP_PHP/exercices/css_exercices/style.css">






<?php 

$_SESSION['post']=$_POST;

$flagFR='flagFR';
$ref1='index.php';
$lanFR="langue_fr";



/* contrôle de la saisie */
if(isset($_SESSION['post'])):
    include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/menu.html.php");
    AfficheMoisWithContext('',$moisEn,$flagFR,$ref1,$lanFR);  
else:
    header("Location:index.php" );
    exit();
endif;


    
include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/defilement.footer.html.php");
?>







