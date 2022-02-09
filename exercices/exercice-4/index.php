
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
        Générer deux nombres puis faire leur permutation.On
        affichera les deux nombres avant et après permutations. */



    // inclusion du fichier "fonctions.php"
    require_once("fonctions.php");

    $a=generator_of_number();/* donne-moi la valeurs de a */
    $b=generator_of_number();/* donne-moi la valeurs de b */

    // Avant échange
    echo 'Avant échange on a :<br>  
            Premier nombre vaut: '.$a.
            '<br> Deuxième nombre vaut:'.$b.
            '<br><br>';

    change_two_numbers_value($a,$b);/* PROCÉDURE D'ÉCHANGE DES DEUX VARIABLES  */

    // Après échange
    printf("Après échange on a :<br> Premier nombre vaut: %d <br> Deuxième nombre vaut: %d <br><br>",$a,$b);

    ?>


</div>



<?php

reActualiser();

/*  défilement*/
include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/defilement.footer.html.php");

?>