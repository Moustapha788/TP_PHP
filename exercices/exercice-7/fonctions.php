<?php
// Fonction qui permet de savoir si une année donnée en paramètre est bissextile ou non
function bissextile(int $year):bool{
    if ((($year%4==0 && ($year%100)!=0) || $year%400==0)){
        return true;
    }
    return false;
}
// Fonction qui renvoie le nombre de jours d'un date d'une année donnée
function numberDays(int $month,int $year):int{
    // Initialisation à 31 jours
    $nombreJours=31;
    if($month<1 || $month>12 || $year<0){
        $nombreJours=-1;
    }else{
        if($month==4  ||  $month==6  ||  $month==9  ||  $month==11){
            $nombreJours=30;
        }else{
            if($month==2){
                if(bissextile($month,$year))
                    $nombreJours=28;
                else
                    $nombreJours=29;
            } 
        }
    }
    return $nombreJours;
}
// Fonction qui permet de savoir si une date est valide ou pas
function isValidDate($day,$month,$year):bool{
    if($day>=1 && $day<=numberDays($month,$year)){
        return true;
    }
    return false;
}
// fonction qui renvoie la date suivante
function dateSuivante($day,$month,$year):array{
    $dateOfTomorrow=[];
    if(isValidDate($day,$month,$year)){
        if($day<numberDays($month,$year)){
            $day++;
        }else{
            if($month != 12 ){
                $day=1;
                $month++;
            }else{
                if($month == 12){
                    $day=1;
                    $month=1;
                    $year++;
                }
            }
        }
        $dateOfTomorrow[1]=$day;
        $dateOfTomorrow[2]=$month;
        $dateOfTomorrow[3]=$year;
    }
    return $dateOfTomorrow;
}
// fonction qui renvoie la date précédente
function datePrecedente($day,$month,$year):array{
    $dateOfYesterday=[];
    if(isValidDate($day,$month,$year)){
        if ($day>=2 && $day<=28){
            $day--;
        }else{
            if(numberDays($month,$year)==31){
                if($day!=1){
                    $day--;
                }else{
                    if($month==5 || $month==7 || $month==10 || $month==12){
                        $day--;
                    }else{
                        if($month==3){
                            if(bissextile($year)){
                                $day=29;
                            }else{
                                $day=28;
                            }   
                        }else{
                            $day=31;
                            if($month==1){
                                $month=12;
                                $year--;
                            }else{
                                $month--;
                            }
                        }
                    }
                }
            }else{
                if($day!=1){
                    $day--;
                }else{
                    $day=31;
                    $month--;
                }
            }
        }
        $dateOfYesterday[1]=$day;
        $dateOfYesterday[2]=$month;
        $dateOfYesterday[3]=$year;
    }
    return $dateOfYesterday;
}
// fonction qui affiche la date sous forme de table 
function afficheDate(array $date):void{
    $taille=count($date);
    if($taille==3){
        $displayDate='<table>';
            $displayDate.='<tr>';
                $displayDate.='<td> Le ';
                for($i=1;$i<=$taille;$i++){
                    $displayDate.=$date[$i];
                    if($i%3!=0){
                        $displayDate.='/';
                    }
                }
                $displayDate.='</td>';
            $displayDate.='</tr>';
        $displayDate.='</table>';
    }else{
        $displayDate="";
    }
    echo $displayDate;
}




?>
