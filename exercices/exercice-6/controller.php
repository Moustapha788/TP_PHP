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
/* contrôle de la saisie */
if(isset($_POST['validated'])){
    $a=$_POST['value_of_a'];
    $b=$_POST['value_of_b'];
    $c=$_POST['value_of_c'];

    // sauvegarde des données durant la session
    $_SESSION['post']=$_POST;

    // table d'erreur
    $tableError=[];

    // validité de la saisie
    validNombre($a,"value_of_a",$tableError);
    validNombre($b,"value_of_b",$tableError);
    validNombre($c,"value_of_a",$tableError);
    if(count($tableError)==0):
        /*  Menu*/ 
        include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/menu.html.php");
        ?>
        <div class="champ_de_saisie special">
            <p>
            <?php 
            
            echo equation2nd_degre($a,$b,$c); 
            ?>
            </p>
        </div>
    <?php else:
        $_SESSION['error']=$tableError;
        header('location:/MES_PROJETS/TP_PHP/exercices/exercice-6/index.php'); 
        exit();
    endif;
    Recommencer();
    /*  défilement*/
    include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/defilement.footer.html.php");
} 
else{
    // Redirection dans la page index.php
    header('location:index.php',false);
    exit();
}
?>
