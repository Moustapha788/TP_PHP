<?php

// fonction qui génère le coté d'un carré
function genere_longueur():int{
    $cote=rand();
    return $cote;
}
// procédure qui permet de déterminer et d'afficher le périmètre,la surface et la diagonale d'un rectangle
function rectangle($L,$l):void{
    if($L>=$l){
        $perimetre=($L+$l)*2;
        $surface=$L*$l;
        $diagonale=sqrt(($L**2)+($l**2));
        echo 'le rectangle de longueur '.$L.' et de largeur '.$l.' a pour:<br>';
        echo 'Périmètre : '.$perimetre.'<br>';
        echo 'Surface : '.$surface.'<br>';
        echo 'Longueur de la diagonale : '.$diagonale.'<br>';
    }
    else {
        echo 'la longueur ne peut être inférieure à la largeur ';

    }
}

?>
