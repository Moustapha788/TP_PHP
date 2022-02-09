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

$data=$_POST;
$N=(int)(isset($data['value_of_N']) && !empty($data['value_of_N'] && is_numeric($data['value_of_N']))?$data['value_of_N']:'');

// inclusion du fichier "fonctions.php"
include('fonctions.php');



?>



<div class="champ_de_saisie">
    
    <?php /* génère-moi la table de multiplication */; if($N) genereUneListeInput($N);?>
    
</div>







<?php 
    Recommencer();

/*  défilement*/
include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/defilement.footer.html.php");
?>