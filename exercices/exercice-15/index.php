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
        <legend>Coloriage d'une matrice carré avec 2 choix de couleur (bleu et rouge) </legend>
        <div class="form-groups ">
            <div class="champ_de_saisie">
                <!-- champ de saisie -->
                <div class="champ_visuel_numero">
                    <label for="value_of_N" class="labels">Entrez la taille de la matrice</label>
                    <input type="text" name="value_of_N" id="value_of_N" class="champ_item"  placeholder="au moins 5">
                </div>
                <!-- champ de sélection de couleur -->
                <div class="champ_visuel_numero">
                    <label for="selecColor" class="labels">Choisir la couleur</label>
                    <select name="couleur" id="selecColor" required>
                        <option value="bleu" selected class="champ_item_radio" >bleu</option>
                        <option value="rouge">rouge</option>
                    </select>
                </div>
                <!-- champ de selection de la position  de la couleur -->
                <div class="champ_visuel_numero">
                    <label for="haut" class="labels">Choisir la position</label>
                    <div class="champ_de_saisie">
                        <label for="haut" class="labels">haut</label>
                        <input type="radio" name="position" id="haut" value="haut"  class="champ_item">
                    </div>
                    <div class="champ_de_saisie">
                        <label for="bas" class="labels">bas</label>
                        <input type="radio" name="position" id="bas" value="bas"  class="champ_item">
                    </div>
                </div>
                

            </div>
            <!-- dessiner -->
            <div class="form-validation">
                <button type="submit" name="validated" class="valider">Dessiner</button>
            </div>
        </div>
    </fieldset>
</form>







<?php 
/*  défilement*/
include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/defilement.footer.html.php");
?>