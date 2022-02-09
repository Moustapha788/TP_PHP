
<?php
/* démarre la session*/
session_start();
?>
<link rel="stylesheet" href="/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/css_accueil/style.css">
<link rel="stylesheet" href="/MES_PROJETS/TP_PHP/exercices/css_exercices/style.css">
<?php 
/*  Menu*/ 
include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/menu.html.php");

/* includsion de fonctions  */
include_once("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fonctionsCommunsExercicesAccueil/fonctionsCommuns.php");
?>




<div class="champ_de_saisie special ">

    <?php
    /*[SUMMARY] 
        Générer la longueur et la largeur en utilisant la fonction
        rand() puis calculer et afficher le périmètre,la surface et la diagonale. */



    // inclusion du fichier "fonctions.php"
    require_once("fonctions.php");


    // donne moui une longueur
    $Longueur=genere_longueur();
    // donne moui une largeur
    $largeur=rand($min=0,$max=$Longueur);
    // appel de ma procédure définie dans le fichier fonctions.php
    rectangle($Longueur,$largeur);


    ?>

</div>


<?php

reActualiser();
/*  défilement*/
include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/defilement.footer.html.php");
?>