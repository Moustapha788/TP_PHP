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
    /* [SUMMARY] 
        Point: Générer deux points puis calculer et afficher la distance entre les deux points.
        Un point est caractérisé par son abscisse et son ordonnée.*/


        // inclusion du fichier "fonctions.php"
        require_once("fonctions.php");
        
        // instanciation de deux points avec notre classe Point .
        $A=new Point;
        $B=new Point;

        // Calcul de la distance AB .
        distance_des_2_points($A,$B);

        // Affiche la distance AB .
        affiche_distance_des_2_points($A,$B);


    ?>

</div>





<?php

reActualiser();

/*  défilement*/
include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/defilement.footer.html.php");

?>