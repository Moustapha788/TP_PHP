
<style>
    .colorRed{
        background-color:red;
    }
    .colorBlue{
        background-color:blue;
    }
</style>

<?php
global $haut;
global $bas;


$tabcolor=["bleu"=>"colorBlue",
            "rouge"=>"colorRed"];
    $position=["haut"=>$haut,"bas"=>$bas];
$tabcolor=["bleu"=>"colorBlue",
            "rouge"=>"colorRed"];
$position=["haut"=>$haut,
            "bas"=>$bas];
// fonction qui
function matriceCarre(int $number,array $tabcolor,string $choixPos):string{
    $affiche='<table>';
    for($i=1;$i<=$number;$i++){
        $affiche.='<tr>';
        for($j=1;$j<=$number;$j++):
            $haut=$i<$j;/* eléments au dessus de la diagonale */
            $bas=$i>$j;/* eléments au dessous de la diagonale */
            $position=["haut"=>$haut,"bas"=>$bas];
            if($choixPos=="haut"){
                $color=$position[$choixPos]?$tabcolor['bleu']:$tabcolor['rouge'];
            }/* else{
                // $choixPos="bas";
                $color=$position['bas']?$tabcolor['rouge']:$tabcolor['bleu'];
            } */

                // $color:
                $affiche.='<td class="'. $color.' ">'.rand(0,$number).'<td>';
            endfor;
            $affiche.='</tr>';
        }
    $affiche.='</table>';
    return $affiche;
}
echo matriceCarre(5,$tabcolor,'haut');
?>
