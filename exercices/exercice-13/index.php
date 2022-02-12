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










<div class="champ_de_saisie">
    <form action="controller.php" method="POST">
        <div class="champ_de_saisie">
            <!-- champ de saisie -->
            <label for="paragraph" class="labels">Entrez des phrases puis nous la corrigeons.Une phrase compte au minimum 25 caractères et commence par une majuscule et se termine par un point() .</label>
            <div class="champ_de_saisie">
                <textarea  name="paragraph" id="paragraph"  class="champ_texte"  placeholder="J'apprends le codage."></textarea>
            </div>
            <!-- bontou d'envoie -->
            <div class="form-validation">
                <button type="submit" name="validated" class="valider">Correction</button>
            </div>
        </div>
    </form>







    
    <!-- correction -->
    <div class="champ_de_saisie">
        <textarea  name="" id=""  class="champ_texte" readonly ><?php if (isset( $_SESSION['resultat'])){echo $_SESSION['resultat'];}?>
        </textarea>
    </div>
</div>



























<?php 
/*  défilement*/
include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/defilement.footer.html.php");
?>