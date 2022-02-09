<?php



// structure  qui permet de définir un objet Point(Soit un point  qui a un abscisse (x) et une ordonnée (y))
class Point {
   public float $x;
   public float $y;
    //    L'abscisse du point
   public function abscisse(){
       $this->x = rand(-getrandmax(),getrandmax());
       return $this->x;
   } 
   //    L'ordonnée du point
   public function ordonnee(){
        $this->y = rand(-getrandmax(),getrandmax());
        return $this->y;
   }
}


// fonction qui permet de calculer la distance des 2 points A(xA,yA) et B(xB,yB)
function distance_des_2_points(Point $A,Point $B):float{
    $xA=$A->abscisse();
    $xB=$B->abscisse();
    $yA=$A->ordonnee();
    $yB=$B->ordonnee();
    // formule de la distance de 2 points
    return sqrt(($xA - $xB)**2 + ($yA - $yB)**2);
}


// procédure qui permet d'afficher la distance de deux points
function affiche_distance_des_2_points(Point $A,Point $B){

    $xA=$A->abscisse();
    $xB=$B->abscisse();
    $yA=$A->ordonnee();
    $yB=$B->ordonnee();
    
    echo 'La distance des points A('.$xA.','.$yA.')'.' et B('.$xB.','.$yB.') est : AB= '.distance_des_2_points($A,$B);
}




?>
