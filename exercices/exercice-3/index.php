
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






    <?php
    /* [SUMMARY] 
        Générer deux nombres puis calculer et afficher:
        ● Somme
        ● Exponentiel
        ● Différence
        ● Produit
        ● Modulo
        ● Division
        ● Carré 
    */



    // inclusion du fichier "fonctions.php"
    require_once("fonctions.php");

    $a=generator_of_number();
    $b=generator_of_number();
    // procédure qui permet de donner l
    

    ?>

<div class="maths_exo3">
    
    <?php 
        mathsFonctions($a,$b);
    ?>
</div>




<?php

reActualiser();

/*  défilement*/
include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/defilement.footer.html.php");

?>