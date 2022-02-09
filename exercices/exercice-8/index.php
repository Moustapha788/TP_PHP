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






<!-- ! Mon formulaire pour traiter l'exercice -->
<form action="controller.php" method="post">
    <fieldset>        
        <legend>Généreration d'une liste de N entiers avec html </legend>
        <!-- champ de saisie -->
        <div class="form-groups">
            <div class="champ_de_saisie">
                <label for="value_of_N" class="smallLabel" >Entrez la valeur de N</label>
                <input type="text" name="value_of_N"  class="champ_item" id="value_of_N" placeholder="par exemple N=3">
            </div>
            <?php
                // gestion des erreurs
                ?>
            <!-- générer la liste -->
            <div class="form-validation">
                <button type="submit" name="validated" class="valider">valider</button>
            </div>
        </div>

    </fieldset>
</form>






<?php 
/*  défilement*/
include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/defilement.footer.html.php");
?>