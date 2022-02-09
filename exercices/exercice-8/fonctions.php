<?php

function genereUneListeUL(int $N):void {
    $genere='<ul class="champ_de_saisie form-groups labels >';
    for ($i=1; $i <=$N ; $i++) { 
        $genere.='<li class="">'.$i.'</li>';
    }
    $genere.='</ul>';
    echo $genere;
}
?>
