<?php


// procédure qui permet de déterminer et d'afficher le périmètre,la surface et la diagonale d'un carré
function carre_figure( $cote){
    $perimetre=4*$cote;
    $surface=pow($cote,2);
    $diagonale=$cote*sqrt(2);
    echo 'le carré de côté '.$cote.' a pour:<br>';
    echo 'Périmètre : '.$perimetre.'<br>';
    echo 'Surface : '.$surface.'<br>';
    echo 'Longueur de la diagonale : '.$diagonale.'<br>';
}

?>
