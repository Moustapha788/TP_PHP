<?php
/* démarre la session*/
session_start();
?>



<link rel="stylesheet" href="/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/css_accueil/style.css">
<link rel="stylesheet" href="/MES_PROJETS/TP_PHP/exercices/css_exercices/style.css">
<?php 
/*  Menu*/ 
include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/menu.html.php");
?>












<form action="controller.php" method="POST">
    <fieldset>
        <legend>Généreration  de N champs avec html </legend>
        <div class="form-groups">
            <!-- champ de saisie -->
            <div class="champ_de_saisie">
                <label for="value_of_N" class="labels">Entrez les N phrases puis nous la corrigeons.Une phrase compte au minimum 25 caractères.</label>
                <textarea  name="value_of_N" id="value_of_N"  class="champ_texte"  placeholder="J'apprends le codage."></textarea>
            </div>
            <!-- bontou d'envoie -->
            <div class="form-validation">
                <button type="submit" name="validated" class="valider">Correction</button>
            </div>
        </div>
    </fieldset>
</form>
























<?php 
/*  défilement*/
include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/defilement.footer.html.php");
?>