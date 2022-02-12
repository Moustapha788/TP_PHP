<?php
/* démarre la session*/
session_start();
?>


<link rel="stylesheet" href="/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/css_accueil/style.css">
<link rel="stylesheet" href="/MES_PROJETS/TP_PHP/exercices/css_exercices/style.css">
<?php 

include_once("fonctions.php");

/*  Menu*/ 
include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/menu.html.php");

?>




















<!-- ! Mon formulaire pour traiter l'exo -->
<form action="controller.php" method="post7">
    <fieldset>
        <legend> Date suivante et Date précédente </legend>
        <!-- qu'est ce qu'on attend de vous -->
        <h3>Donner une date valide c'est à dire jour - mois - annee </h3>
        <!-- Champ de saisie -->
        <div class="form-groups">
            <!-- Saisie  du jour -->
            <div class="champ_de_saisie">
                <label for="jour" class="labels">jour</label>
                <input type="text" id="jour" name="jour" class="champ_item " value="<?php if(!isset($_SESSION['error']['jour']) && isset($_SESSION['post7']) ) echo  $_SESSION['post7']['jour']; else '' ?>" >  
            </div>
            <?php /* if we do a mistake in jour */
                if(isset($_SESSION['error']['jour'])):?>
                <span style="color:red"><?php echo $_SESSION['error']['jour'] ?></span>
            <?php endif?>




            <!-- Saisie  du mois -->
            <div class="champ_de_saisie">
                <label for="mois" class="labels">mois</label>
                <input type="text" id="mois" name="mois" class="champ_item " value="<?php if(!isset($_SESSION['error']['mois']) && isset($_SESSION['post7']) ) echo  $_SESSION['post7']['mois']; else '' ?>" >  
            </div>
            <?php /* if we do a mistake in mois */
                if(isset($_SESSION['error']['mois'])):?>
                <span style="color:red"><?php echo $_SESSION['error']['mois'] ?></span>
            <?php endif?>




            <!-- Saisie  du année -->
            <div class="champ_de_saisie">
                <label for="annee" class="labels">année</label>
                <input type="text" id="annee" name="annee" class="champ_item " value="<?php if(!isset($_SESSION['error']['annee']) && isset($_SESSION['post7']) ) echo  $_SESSION['post7']['annee']; else '' ?>" >  
            </div>
            <?php /* if we do a mistake in annee */
                if(isset($_SESSION['error']['annee'])):?>
                <span style="color:red"><?php echo $_SESSION['error']['annee'] ?></span>
            <?php endif?>

           
           
            <!-- Validation -->
            <div class="form-validation">
                <button type="submit" name="validator" class="valider">valider</button>
            </div>

        </div>
    </fieldset>
</form>





















<?php
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}


/*  défilement*/
include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/defilement.footer.html.php");


?>