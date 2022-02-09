
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





<div class="champ_de_saisie special">

    <?php
    /*[SUMMARY]
    Générer le côté en utilisant la fonction rand() puis calculer et
    afficher le périmètre,la surface et la diagonale. */

    // inclusion du fichier "fonctions.php"
    require_once("fonctions.php");

    // donne moi un côté au hasard
    $cote=rand();

    // Appel de ma procédure carre_figure définie dans la le fichier fonctions.php
    carre_figure($cote);
    
    ?>

</div>
<?php

reActualiser();
/*  défilement*/
include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/defilement.footer.html.php");
?>
