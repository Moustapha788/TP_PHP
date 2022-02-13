<?php


/* 
781800000 781880000 772265487 751235467 705672334 
7056723342  702030304 78180000ffjfgkjefofbvkfkjfffnfvnddyurfkkd  
ffhfcfnjrfj 78180000000 781800000,edkd,fk 781800000 781800000 781800000 781800000 
  */

/* NUMÉROS SÉNÉGAL (EXPRESSIONS RÉGULIÈRES) */
global $numExpresso;
global $numProMobile;
global $numFree;
global $numOrange1;
global $numOrange2;
$numExpresso="/\b((70)\d{7})\b/";
$numProMobile="/\b((75)\d{7})\b/";
$numFree="/\b((76)\d{7})\b/";
$numOrange1="/\b((77)\d{7})\b/";
$numOrange2="/\b((78)\d{7})\b/"; 

// $patterOfAllNumbers="/(\b((70)\d{7})\b)|(\b((75)\d{7})\b)|(\b((76)\d{7})\b)|(\b((77)\d{7})\b)|(\b((78)\d{7})\b)/";

$patterOfAllNumbers="/\b((7(0|[5-8]))(\d{7}))\b/";
/* MES FONCTIONS */
// fonction qui permet d'enlever tous ce qui n'est pas un chiffre
function nettoieLaSaisie(string $saisie):string{
    $saisie=preg_replace("/\D/"," ",$saisie);
    return $saisie;
}
// fonction qui permet de scinder la saisie sous forme de tableaux de numéros 
function scinderLesNumeros(string $saisieNettoyee):array{
    $tabNumero=preg_split("/\s{1,}/",$saisieNettoyee);
    return $tabNumero;
}
// fonction qui permet d'enlever les numéros qui ne sont pas valides globalement
function invalidNumbers(string $pattern,array $tabNumero):array{
    $tabNumeroValid=preg_grep($pattern,$tabNumero,PREG_GREP_INVERT);
    return $tabNumeroValid;
}
// fonction qui permet de retourner les numéros valides d'un numéro d'opérateur donné
function validNumbersOfOperator(string $pattern,array $tabNumero):array{
    $tabNumeroValid=preg_grep($pattern,$tabNumero);
    return $tabNumeroValid;
}
// fonction qui permet de retourner les numéros invalides d'un numéro d'opérateur donné
function invalidNumbersOfOperator(string $pattern,array $tabNumero):array{
    $tabNumeroValid=preg_grep($pattern,$tabNumero,PREG_GREP_INVERT);
    return $tabNumeroValid;
}
// fonction qui permet d'enlenver dans un tableau de numéros ceux qui sont déjà validés par un opérateur
function unsetValidNumberFromTheList(string $pattern,array $tabNumero){
    $tabNumero=preg_replace($pattern," ",$tabNumero);
    return $tabNumero;
}
// fonction qui permet d'afficher les numéros dans un contexte beaucoup plus nice
function afficherNumerosDansUnautreContexte(array $tableauNumero,string $caractNumero):string{
    $affiche='<div class="form-groups">';
        $affiche.='<small class="">'.$caractNumero.' </small>';
        foreach($tableauNumero as $numero){
            $affiche.='<li>'.$numero.'</li>';
        }
    $affiche.='</div>';
    return $affiche;
}
// fonction qui permet d'afficher les numéros le contexte d'un texterra
function afficherNumerosValid(array $tableauNumero,string $op):string{
    $affiche='&#10;les numéros valides '.$op.' sont au nombre de '.count($tableauNumero).' :&#10;';
    foreach($tableauNumero as $numero){
        $affiche.=$numero.'&#10;';
    }
    return $affiche;
}
function afficherNumerosInvalid(array $tableauNumero):string{
    $affiche='&#10;les numéros invalides sont :&#10;';
    foreach($tableauNumero as $numero){
        $affiche.=$numero.'&#10;';
    }
    return $affiche;
}
// la fonction qui renvoie le méga tableau remplie d'informations sur la validité de chaque numéro de téléphone saisie par l"utilisateur
function theGreatFunctionForNumbers($saisie):array{
    $numExpresso="/\b((70)\d{7})\b/";
    $numProMobile="/\b((75)\d{7})\b/";
    $numFree="/\b((76)\d{7})\b/";
    $numOrange1="/\b((77)\d{7})\b/";
    $numOrange2="/\b((78)\d{7})\b/"; 
    $patterOfAllNumbers="/\b((7(0|[5-8]))(\d{7}))\b/";

    // Nettoie la saisie en enlevant tous ce qui n'est pas nombre
    $saisieNettoyee=nettoieLaSaisie($saisie);
    // Scinde la saisie en tableau de nombres
    $tabNumero=scinderLesNumeros($saisieNettoyee);
    /* VALIDATION DE NUMÉROS*/
    // Récupèration des numéros invalides
    $tabNumeroInvalid=invalidNumbers($patterOfAllNumbers,$tabNumero);
    // Récupèration des numéros valides

    // orange 70
    $tabNumeroValid70=validNumbersOfOperator($numExpresso,$tabNumero);
    // orange 75
    $tabNumeroValid75=validNumbersOfOperator($numProMobile,$tabNumero);
    // orange 76
    $tabNumeroValid76=validNumbersOfOperator($numFree,$tabNumero);
    // orange 77
    $tabNumeroValid77=validNumbersOfOperator($numOrange1,$tabNumero);
    // orange 78
    $tabNumeroValid78=validNumbersOfOperator($numOrange2,$tabNumero);

    // tableau 2D (Les tableaux de nombres valides)
    $tabValidNum=['num70'=>$tabNumeroValid70,
                  'num75'=>$tabNumeroValid75,
                  'num76'=>$tabNumeroValid76,
                  'num77'=>$tabNumeroValid77,
                  'num78'=>$tabNumeroValid78,];
    // tableau 3D
    $traitementNum=['validNum'=>$tabValidNum,
                    'invalidNum'=>$tabNumeroInvalid,];

    return $traitementNum;
}





?>