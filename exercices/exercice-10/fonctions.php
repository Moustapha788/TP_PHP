<?php

function genereUneListeInput(int $N):void {
    $genere='<form action="action2.php" method="POST" class="form-groups" >';
    for ($i=1; $i <=$N ; $i++) { 
        $genere.='<div class="champ_de_saisie">';
            $genere.='<label for="champ'.$i.'" class="labels"> Champ N° '.$i.'</label>';
            $genere.='<input name="champ'.$i.'" class="champ_item" style="height:80px" placeholder="écrivez tout ce que vous voulez mais je ne le traite pas" id="champ'.$i.'">';
        $genere.='</div>';
    }
    $genere.='<button type="submit" class="valider ">envoyer</button> </form>';
    echo $genere;
}

?>
