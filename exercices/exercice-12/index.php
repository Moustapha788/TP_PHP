<?php
/* démarre la session*/
session_start();
?>

<link rel="stylesheet" href="/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/css_accueil/style.css">
<link rel="stylesheet" href="/MES_PROJETS/TP_PHP/exercices/css_exercices/style.css">
<?php 
/* inclusion des fonctions */
include_once("fonctions.php");
/*  Menu*/ 
include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/menu.html.php");

?>



<?php




$flagEN='flagEN';
$ref2='controller.php';

AfficheMoisWithContext('',$moisFr,$flagEN,$ref2);

    
    
    
    
    
    
include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/defilement.footer.html.php");
    


?>



