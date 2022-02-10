<?php 
/* includsion de fonctions  */
include_once("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fonctionsCommunsExercicesAccueil/fonctionsCommuns.php");
?>
<link rel="stylesheet" href="/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/css_accueil/style.css">



<footer>
    <nav class="navbar">
        <ul>
            <!-- arrière -->
            <li class="">
                <a href="<?php echo arriere(); ?>">
                    <div class="arriere">Previous</div>
                </a>
            </li>
            <!-- avance -->
            <li class="">
                <a href="<?php   echo suivant(); ?>">
                    <div class="avance" >Next</div>
                </a>
            </li>
        </ul>
    </nav>
</footer>


