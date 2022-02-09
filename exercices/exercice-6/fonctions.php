<?php

// équation du premier degré
function equation1er_degre(float $a,float $b):string{
    $formEquationSol='L\'équation '.$a.'X + '.$b.' = 0 ';
    if($a==0){
        if($b==0){
            $formEquationSol.='admet une infinité de solutions';
        }
        else{
            $formEquationSol.='n\'admet pas de solutions';
        }
    }
    else{
        $x=-$b/$a;
        $formEquationSol.='admet une unique solution x= '.$x;
    }
    return $formEquationSol;
}
// équation du second degré
function equation2nd_degre(float $a,float $b,float $c):string{
    $formEquationSol='L\'équation '.$a.'X<sup>2</sup> + '.$b.'X + '.$c.' = 0 ';
    if($a==0 && $b==0 && $c==0){
        $formEquationSol.='admet une infinité de solutions';
    }
    else {
        if($a==0 ){
            $formEquationSol.='est en effet une équation du premier degré. '.equation1er_degre($b,$c);
        }
        else{
            $delta=$b**2 -4*$a*$c;
            if($delta<0){
                $formEquationSol.='n\'admet pas de solutions dans R';
            }
            else {
                $x1=(-$b + sqrt($delta))/(2*$a);
                $x2=(-$b - sqrt($delta))/(2*$a);
                if($delta==0){
                    $formEquationSol.='admet une solution double : x<sub>0</sub> = '. $x1;

                }
                else {
                    $formEquationSol.='admet 2 solutions distinctes : x<sub>1</sub> = '. $x1.' et x<sub>2</sub> ='.$x2;
                }
            }
        }
    }
    return $formEquationSol;
}
?>
