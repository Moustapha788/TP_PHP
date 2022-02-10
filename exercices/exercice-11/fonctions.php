<?php
/* Écrire un script qui demande une valeur supérieure à 10 000 à partir d’un
champ de texte puis crée un tableau associatif T avec les clés
premier,supérieur et inférieur après validation de l’utilisateur.

● La clé premier est associée à l’ensemble des nombres premiers
compris entre 1 et la valeur entrée.

● La clé inférieur est associée à l’ensemble des valeurs qui sont
inférieures à la moyenne du tableau

● La clé supérieure est associée à l'ensemble des valeurs qui sont
supérieures à la moyenne.

Les nombres premiers , supérieurs à la moyenne et inférieur à la moyenne
seront affichés respectivement des tableaux HTML. */

/* 
**************
**************
**************
**************
**************
**************
*/

// fonction qui dit si un nombre est premier ou non
function estPremier(int $number):bool{
    $count=2;
    for ($i=2;$i<=($number/2);$i++){
        if($number%$i==0){
            $count++;
            break;
        }
    }
    return $count==2 && $number !=1;
}
// fonction qui renvoie la liste des nombres premiers compris entre 1 et le nombre saisi
function premier(int $number):array{
    $premier=array();
    for($i=1;$i<=$number;$i++){
        if(estPremier($i)){
            $premier[]=$i;
        }
    }
    return $premier;
}
// fonction qui renvoie la moyenne d'un tableau d'entiers
function moyenne(array $Table):float{
    $som=0;
    foreach($Table as $number){
        $som+=$number;//$som= $som + $number;
    }
    return $som/count($Table);
}
// fonction qui renvoie la liste des nombres qui sont inférieurs à la moyenne d'un tableau d'entiers
function inferieur(array $Table):array{
    $moy=moyenne($Table);
    $inferieur=array();
    foreach($Table as $number){
        if($number<=$moy){
            $inferieur[]=$number;
        }
    }
    return $inferieur;
}
// fonction qui renvoie la liste des nombres qui sont supérieurs à la moyenne d'un tableau d'entiers
function superieur(array $Table):array{
    $moy=moyenne($Table);
    $superieur=array();
    foreach($Table as $number){
        if($number>=$moy){
            $superieur[]=$number;
        }
    }
    return $superieur;
}
/// fonction qui permet d'afficher un tableau de nombres 
function AfficherTableauNombres(array $Table):string{
    $taille=count($Table);
    $affiche='<table>';
    for($i=1;$i<=$taille;$i++){
        if($i%10==1){$affiche.='<tr>';}
                $affiche.='<td>'.$Table[$i-1].'</td>';
        if($i%10==0){$affiche.='</tr>';}
    }   
    $affiche.='</table>';
    return $affiche;
}




?>













