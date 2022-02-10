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


<?php 


    // fonction qui affiche  un message donné message sur dans le champ
    function error_message(string $errorMsg):void{
        echo $errorMsg;
    }
    // fonction qui peremet de styliser l'erreur afficher par error_message()
    function ifClassError(string $nomSessionError, string $key):void{
        if($_SESSION[$nomSessionError][$key]) echo ' classError';
    }

    function displayValue(string $nameSessionValue,string $nomSessionError,string $value,):void{
        if(!isset($_SESSION[$nameSessionValue])):
            if(isset($_SESSION[$nomSessionError][$value])):
                error_message($_SESSION[$nomSessionError][$value]);
            else:  
                echo  $_SESSION[$nameSessionValue][$value]; 
            endif;
        endif;
    }
  
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
                <input type="text" id="a" name="a" class="champ_item <?php ifClassError('error','a')?>" value="<?php displayValue('post','error','a');?>">
            </div>


            <!-- Saisie de la valeur de b -->
            <div class="champ_de_saisie">
                <label for="b" class="labels">b</label>
                <input type="text" id="b" name="b" class="champ_item <?php ifClassError('error','b')?>" value="<?php displayValue('post','error','b');?>">
            </div>

            <!-- Saisie de la valeur de c -->
            <div class="champ_de_saisie">
                <label for="c" class="labels">c</label>
                <input type="text" id="c" name="c" class="champ_item <?php ifClassError('error','c')?>" value="<?php displayValue('post','error','c');?>">
            </div>
           
            <!-- Validation -->
            <div class="form-validation">
                <button type="submit" name="validated" class="valider">valider</button>
            </div>

        </div>
    </fieldset>
</form>





<?php 
if(isset($_SESSION['error'])){
    $_SESSION[$nomSessionError];
    unset($_SESSION['error']);
}
/*  défilement*/
include("/opt/lampp/htdocs/MES_PROJETS/TP_PHP/fichiers-accueil-html-css-php/defilement.footer.html.php");
?>