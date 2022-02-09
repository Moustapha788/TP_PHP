<?php
// procédure  qui premet d'afficher la table de multiplication d'un nombre saisi par un user
function tableDeMultiplication(int $N):void{


    $table='<div class="champ_de_saisie form-groups "><p class="labels">Table de Multiplication de '.$N.':</p>';
    for($j=1;$j<=12;$j++){
        $table.='<strong>';
        $table.=$N.' x '.$j.' = '.$N*$j.'<br>';
        $table.='</strong>';
    }
    $table.='</div>';
    echo $table;
}

?>
