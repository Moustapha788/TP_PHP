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
<form action="controller.php" method="post">
    <fieldset>
        <legend> Équation du 2<sup>nd</sup> degré</legend>
        <!-- qu'est ce qu'on attend de vous -->
        <h3>Donner les valeurs de a, b et c puis appuyer sur le bouton valider</h3>
        <!-- Champ de saisie -->
        <div class="form-groups">
            <!-- Saisie de la valeur de a -->
            <div class="champ_de_saisie">
                <label for="a" class="labels">a</label>
                <input type="text" id="a" name="a" class="champ_item " value="<?php if(!isset($_SESSION['error']['a']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['a']; else '' ?>">
                    
            </div>
            <?php /* if we do a mistake in a */
                if(isset($_SESSION['error']['a'])):?>
                <span style="color:red"><?php echo $_SESSION['error']['a'] ?></span>
            <?php endif?>


            <!-- Saisie de la valeur de b -->
            <div class="champ_de_saisie">
                <label for="b" class="labels">a</label>
                <input type="text" id="b" name="b" class="champ_item " value="<?php if(!isset($_SESSION['error']['b']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['b']; else '' ?>" >
                    
            </div>
            <?php /* if we do a mistake in b */
                if(isset($_SESSION['error']['b'])):?>
                <span style="color:red"><?php echo $_SESSION['error']['b'] ?></span>
            <?php endif?>



            <!-- Saisie de la valeur de c -->
            <div class="champ_de_saisie">
                <label for="c" class="labels">a</label>
                <input type="text" id="c" name="c" class="champ_item " value="<?php if(!isset($_SESSION['error']['c']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['c']; else '' ?>" >
                    
            </div>
            <?php /* if we do a mistake in c */
                if(isset($_SESSION['error']['c'])):?>
                <span style="color:red"><?php echo $_SESSION['error']['c'] ?></span>
            <?php endif?>

           

            
           
           
            <!-- Validation -->
            <div class="form-validation">
                <button type="submit" name="validated" class="valider">valider</button>
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