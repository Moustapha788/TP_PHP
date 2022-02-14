<?php
/* démarre la session*/
session_start();
/* inclusion des fonctions */
include_once("fonctions.php");
/* includsion de fonctions  */
include_once("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fonctionsCommunsExercicesAccueil/fonctionsCommuns.php");
?>
<!-- fichiers css -->
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
    validNombreTenThousand($N,"Number",$tableError);
    
    if(count($tableError)==0): /*  Menu*/ include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/menu.html.php"); ?>
        <div class="form-groups specialEleven">
            <?php 
                $premier=premier($N);
                $inferieur=inferieur($premier);
                $superieur=superieur($premier);

                $T = ['premier' =>  $premier,
                        'inferieur' => $inferieur,
                        'superieur' => $superieur,];

                // echo AfficherTableauNombres($premier);
                echo '<h3 class="champ_de_saisie specialEleven">La moyenne du tableau des nombres premiers compris entre 2 et '.$N.' est: '.moyenne($premier).'</h3>';
                echo '<h3 class="champ_de_saisie specialEleven">Le tableau ci-dessous affiche les nombres premiers qui sont  inférieurs à la moyenne du tableau des nombres premiers compris entre 2 et '.$N.':</h3>';
                echo AfficherTableauNombres($T['inferieur']);
                echo '<h3 class="champ_de_saisie specialEleven">Le tableau ci-dessous affiche les nombres premiers qui sont supérieurs à la moyenne du tableau des nombres premiers compris entre 2 et '.$N.':</h3>';
                echo AfficherTableauNombres($T['superieur']);
            

               
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
