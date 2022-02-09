<?php


// fonction qui génère un nombre aléatoire
function generator_of_number():int{
    return rand();
}

// fonction qui retourne la somme de deux nombres
function somme(float | int $a,float | int $b):float | int {
    return $a+$b;
}

// fonction qui retourne l'exponentiel 
function exponentiel(float | int $a):float | int {
    return exp($a);
}

// fonction qui retourne la somme de deux nombres
function difference(float | int $a,float | int $b):float | int {
    return $a-$b;
}

// fonction qui retourne le produit de deux nombres
function produit(float | int $a,float | int $b):float | int {
    return $a*$b;
}

// fonction qui retourne la division de deux nombres
function division(float | int $a,float | int $b):float | int {
    if ($b!=0)
        return $a/$b;
    else
        return null;
}

// fonction qui retourne la carre d'un nombre
function carre_nombre(float | int $a):float | int {
    return $a**2;
}


// procédure qui pour les fonctions mathématiques
function mathsFonctions(float | int $a,float | int $b):void{

    printf('<p>Le premier nombre généré est : %d</p>',$a);
    printf('<p>Le deuxième nombre généré est : %d</p>',$b);

    printf('<p>la somme:: %d + %d   = %d</p>',$a,$b,somme($a,$b));
    printf('<p>l\' exponentiel:: e<sup>%d</sup> = %f</p>',$a,exponentiel($a));
    printf('<p>l\' exponentiel:: e<sup>%d</sup> = %f</p>',$b,exponentiel($b));
    printf('<p>la différence:: %d - %d   = %d</p>',$a,$b,difference($a,$b));
    printf('<p>le produit:: %d x %d   = %d</p>',$a,$b,produit($a,$b));
    printf('<p>la division:: %d &divide; %d   = %f</p>',$a,$b,division($a,$b));
    printf('<p>le carré:: %d<sup>2</sup>  = %d</p>',$a,carre_nombre($a));
    printf('<p>le carré:: %d<sup>2</sup>  = %d</p>',$b,carre_nombre($b));
}

?>
