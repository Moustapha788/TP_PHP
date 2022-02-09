<?php

// fonction qui génère un nombre aléatoire
function generator_of_number():int{
    return rand();
}

// procédure qui permet d'échanger deux nombres
function change_two_numbers_value(int | float &$a,int | float &$b){
    $tmp=$a;
    $a=$b;
    $b=$tmp;
}
?>
