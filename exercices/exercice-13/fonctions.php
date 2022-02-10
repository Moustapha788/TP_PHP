<?php

/* Écrire un programme qui permet de remplir N phrases à partir d’un
champ TextArea.Le programme enlève tous les espaces inutiles de chaque
phrase puis ré-affiche les phrases corrigées dans un autre TextArea.
Les TextArea des phrases corrigées sont à lecture seule.

Règles de Gestion
● Le champ TextArea de saisie des phrases est Obligatoire
● Les phrases ne doivent pas contenir des caractères spéciaux
● Une phrase commence par lettre majuscules et se termine par un point
● Chaque phrase contiendra au moins 25 caractères */





// $phrase='';

/* une fonction sui remarque une fin de phrase en l'occurence un point valide (et non un decimal (1.3)) */

// function lePremierPointRencontré(s)


// fonction qui dit si une phrase contient 25 caractères ou non
function auMoins25Caracteres($phrase):bool{
    $espaceVide=substr_count($phrase," ");
    $nbrCar=strlen($phrase)-$espaceVide;
    return $nbrCar>=25;
} 
/* fonction qui corrige chaque phrase qui lui donnée en paramètre en enlevant 
toutes les majuscules qui  et en mettant le premier caractère en majuscules */  
function corrigeLaPhrase(string &$phrase):string{
    $phrase=ucfirst(strtolower($phrase));
    return $phrase;
}
// fonction qui compte le nombre qui enlève les espaces
function enlèveLesEspacesEntreLesMots(string &$paragraphe):string{
    $lesMotsDuParagragphe=str_word_count($paragraphe,1,null);
    $nbrMots=count($lesMotsDuParagragphe);
    for($i=0;$i<$nbrMots;$i++){
        htmlspecialchars($lesMotsDuParagragphe[$i]);
        trim($lesMotsDuParagragphe[$i]);
    }
    $paragraphe=implode(" ",$lesMotsDuParagragphe);
    // supprime l'espace au début du paragraphe
    ltrim($paragraphe);
    // retouren moi le pagraphe
    return $paragraphe;
} 
// fonction qui en 





?>
