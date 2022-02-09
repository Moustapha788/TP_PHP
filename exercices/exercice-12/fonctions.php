<?php
// tableau des 12 mois de l'année en français
global $moisFr;
$moisFr=array(
    1=>'Janvier',
    2=>'Février',
    3=>'Mars',
    4=>'Avril',
    5=>'Mai',
    6=>'Juin',
    7=>'Juillet',
    8=>'Août',
    9=>'Septembre',
    10=>'Octobre',
    11=>'Novembre',
    12=>'Décembre',
);
// tableau des 12 mois de l'année en anglais
global $moisEn;
$moisEn=array(
    1=>'January',
    2=>'February',
    3=>'March',
    4=>'April',
    5=>'May',
    6=>'June',
    7=>'July',
    8=>'August',
    9=>'September',
    10=>'October',
    11=>'November',
    12=>'Décember',
);
// fonction 
function tableMois( array $mois):string{
    if(count($mois)==12){
        // my month's table
        $tableauMois='<table>';
            // fisrt line
            $tableauMois.='<tr>';
                $tableauMois.='<td>'.$mois[1].'</td>';
                $tableauMois.='<td>'.$mois[2].'</td>';
                $tableauMois.='<td>'.$mois[3].'</td>';
                $tableauMois.='<td>'.$mois[4].'</td>';
            $tableauMois.='</tr>';
            // second line
            $tableauMois.='<tr>';
                $tableauMois.='<td>'.$mois[5].'</td>';
                $tableauMois.='<td>'.$mois[6].'</td>';
                $tableauMois.='<td>'.$mois[7].'</td>';
                $tableauMois.='<td>'.$mois[8].'</td>';
            $tableauMois.='</tr>';
            // third line
            $tableauMois.='<tr>';
                $tableauMois.='<td>'.$mois[9].'</td>';
                $tableauMois.='<td>'.$mois[10].'</td>';
                $tableauMois.='<td>'.$mois[11].'</td>';
                $tableauMois.='<td>'.$mois[12].'</td>';
            $tableauMois.='</tr>';
        $tableauMois.='</table>';
    }else{
        $tableauMois='';
    }
    return $tableauMois;
}



function AfficheMoisWithContext(string $lang,array $mois,string $flag,string $ref):void{
    

$affiche='<div class="champ_de_saisie">';
    $affiche.=tableMois($mois);
    $affiche.='<form action="'.$ref.'" method="post">';
        $affiche.='<div class="mois_exo_12">';
            $affiche.='<label for="lang" class="labels calendar">'.$lang.'</label>';
            $affiche.='<input type="hidden" name="langue" value=="fr">';
            $affiche.='<input type="submit" id="lang" class="'.$flag.'" name="langue" value="'.$lang.'">';
        $affiche.='</div>';
    $affiche.='</form> ';
$affiche.='</div>';
// affichez moi le résultat
echo $affiche;
}












 /* 
<div class="champ_de_saisie">

    <?php echo  tableMois($moisFr); ?>

    <!-- ! Mon formulaire pour traiter l'exo -->
    <form action="index.php" method="post">
            <!-- La langue anglaise -->
            <div class="mois_exo_12">
                <label for="en" class="labels calendar" style="color:navy">en</label>
                <input type="submit" id="en" class=" radioExo12" name="langue" value="en">
            </div>
        <!-- </fieldset> -->
    </form>
</div> */
?>




 