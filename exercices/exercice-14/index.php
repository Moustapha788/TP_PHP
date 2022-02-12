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












<div class="champ_de_saisie ">
    <div class="form-groups">
        
        <form action="controller.php" method="POST">
            <div class="form-groups">
                <label for="numeros" class="labels">Entrez des numéros de téléphones.Ce qui sont valides sont ceux commençants par 70/75/76/77/78 et  qui font exactement 9 chifrres collés .</label>
                <!-- champ de saisie -->
                <div class="champ_de_saisie">
                    <textarea  name="numeros"  id="numeros"  class="champ_numero"  placeholder="770000000"><?php if (isset( $_SESSION["saisie"])){echo $_SESSION["saisie"];}?></textarea>
                </div>
                <!-- bontou d'envoie -->
                <div class="form-validation">
                    <button type="submit" for="#correction" name="validated" class="valider">Correction</button>
                </div>
            </div>
        </form>
        


        <!-- correction de numéros -->
        <div class=" form-groups ">
            <!-- numéros valides -->
            <div class="champ_visuel_numero">
                <small id="correction" class="labels numeroLabel"><a href="" style="text-decoration:none; color:white;">Numéros valides</a></small>
                <textarea  name=""   class="champ_numero" readonly ><?php if (isset( $_SESSION["valid"])){echo $_SESSION["valid"];}?></textarea>
            </div>
            <!-- numéros invalides -->
            <div class="champ_visuel_numero">
                <small  class="labels numeroLabel">Numéros invalides</small>
                <textarea  name=""   class="champ_numero" readonly ><?php if (isset( $_SESSION["invalid"])){echo $_SESSION["invalid"];}?></textarea>
            </div>
        </div>

    </div>
    
</div>















<?php 
/*  défilement*/
include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/defilement.footer.html.php");
?>