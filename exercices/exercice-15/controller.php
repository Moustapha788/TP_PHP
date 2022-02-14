<?php
/* démarre la session*/
session_start();
/* inclusion des fonctions */
include_once("fonctions.php");
/* includsion de fonctions  */
include_once("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fonctionsCommunsExercicesAccueil/fonctionsCommuns.php");

?>


<link rel="stylesheet" href="/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/css_accueil/style.css">
<link rel="stylesheet" href="/MES_PROJETS/TP_PHP/exercices/css_exercices/style.css">









<?php 
if (isset($_POST["validated"])){

    // Récupération de la valeur de N 
    $N=$_POST['value_of_N'];

    // Sauvegarde des données durant la session
    $_SESSION['post']=$_POST;

    // Table d'erreur
    $tableError=[];
    validNombreFive($N,"Number",$tableError);
    
    if(count($tableError)==0 /*&&  isset() */): /*  Menu*/ include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/menu.html.php"); ?>
        <div class="form-groups specialEleven">
            <?php 
                
            ?>
        </div>
        <?php /*  défilement*/  Recommencer(); include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/defilement.footer.html.php"); 
    else:
        header("Location:index.php");
        exit();
    endif;

}else{
    header("Location:index.php");
    exit();
}

?>




















