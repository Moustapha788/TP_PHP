
<link rel="stylesheet" href="/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/css_accueil/style.css">
<link rel="stylesheet" href="/MES_PROJETS/TP_PHP/exercices/css_exercices/style.css">
<?php 
/* démarre la session*/
session_start();
/* inclusion des fonctions */
include_once("fonctions.php");
/* includsion de fonctions  */
include_once("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fonctionsCommunsExercicesAccueil/fonctionsCommuns.php");


?>









<?php
/* contrôle de la saisie */
if(isset($_POST['validator'])){
    $jour=$_POST['jour'];
    $mois=$_POST['mois'];
    $annee=$_POST['annee'];

   
   

    // sauvegarde des données durant la session
    $_SESSION['post7']=$_POST;

    // table d'erreur
    $tableError=[];
    

    // validité de la saisie
    validNombre($jour,"jour",$tableError);//$tableError["jour"]=" Veillez saisir une valeur ";
    validNombre($mois,"mois",$tableError);
    validNombre($annee,"annee",$tableError);

    // Si pas d'erreurs 
    if(count($tableError)==0 && isValidDate($jour,$mois,$annee)):
         // date sasie
        $jDay=[1=>$jour,
                2=>$mois,
                3=>$annee,];
        /*  Menu*/ 
        include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/menu.html.php");
        ?>
        <div class="form-groups special">
            <!-- la date d'aujourd'hui -->
            <p> 
                <?php
                    echo '<h3 class="champ_de_saisie specialEleven">La date saisie est :</h3>';
                    afficheDate($jDay); 
                    ?>
            </p>
            <!-- la date suivante -->
            <p> 
                <?php
                    echo '<h3 class="champ_de_saisie specialEleven">La date suivante est :</h3>';
                    afficheDate(dateSuivante($jour,$mois,$annee)); 
                    ?>
            </p>
            <!-- la date précédente -->
            <p> 
                <?php
                    echo '<h3 class="champ_de_saisie specialEleven">La date précédente est :</h3>';
                    afficheDate(datePrecedente($jour,$mois,$annee)); 
                ?>
            </p>
                   
        </div>
        <?php Recommencer(); ?>
        <?php else:
        $_SESSION['error']=$tableError;
        header('location:/MES_PROJETS/TP_PHP/exercices/exercice-7/index.php'); 
        exit();
    endif;
    /*  défilement*/
    include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/defilement.footer.html.php");
    session_destroy();
}else{
    // Redirection dans la page index.php
    header('location:index.php',false);
    exit();
}

?>