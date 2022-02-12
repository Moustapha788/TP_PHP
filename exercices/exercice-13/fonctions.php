<?php






/* SUMMARY

mes fonctions créées
    estChainenumeric (mots):bool
    scinderParagrah (paragraphe):array
    scinderPhrase (phrases):array
    corrigeLaPhrase (phrase(tab)):phrase(str)
    supprimerSpecialChar (mot):mot
    auMoins25Caracteres (phrase):bool
*/
$lesFlottants="/(((\d{1,})\.(\d{1,})))/";







$theParagraph="il    n'existe aucun <a>ddd</a>     moyen de supprimer directement un caractère d'une chaîne…
autrement    qu'en procédant par collage. il faut donc concaténer 1.2 ce qui se trouve à
gauche du car   actère à supprimer, 2 avec ce qui 2,3 se trouve à sa droite. Attention 


aux paramètres des fonctions Mid   , ils n'ont rien 2.,3 d'évident !
Si les paramètres search et replace    sont des tableaux, alors la fonction str_replace() prendra une valeur de chaque tablea   u et les utilisera pour la recherche et le r


            remplacement sur subject. Si les paramètr  es replace a moins de valeurs que le param  ètre search, alors une chaîne de carac  tères vide sera utilisée comme valeur pour le reste des valeurs de remplacement. Si le p  aramètre search est un tableau et que le   paramètre replace est une chaîne de caractères,   alors cette chaîne de caractères de remplacement sera utilisée pour chaque valeur de   search. L'inverse n'a pas de sens.";
 







// fonction qui reconnait si une chaine est un nombre ou non
function estChainenumeric($chaine):bool{
    if(is_numeric($chaine)){
        return true;
    }
    return false;
}
// function qui qui partage le paragraphe en phrases
function scinderParagrah(string $paragraph):array{
    $tabPhrases=[];
    // $tabPhrases=preg_split("/((\.+)|((\d{1,})\.(\d{1,})))/", $paragraph,-1, PREG_SPLIT_OFFSET_CAPTURE);
    // $tabPhrases=preg_split("/((\.+)|((\d{1,})\.(\d{1,})))/",$paragraph);
    $tabPhrases=preg_split("/((\.)|((\d{1,})\.(\d{1,})))/",$paragraph);
    return $tabPhrases;
}
/*fonction qui corrige la phrase (elle partage la phrase en mots 
, enlève les espaces entre les mots,les plus de 2 points collées,et gére la casse de début 
et celle à l'intérieur des mots.*/
function corrigeLaPhrase(string &$phrase):string{
    $phraseAvecEspace=$phrase;
    $phrase='';
    $cleanMots=strip_tags($phraseAvecEspace);
    $cleanMots=preg_replace("/((\s{1,}))|(\n)|(\.{1,})/"," ",$cleanMots);
    $cleanMots=trim($cleanMots);
    $phrase.=$cleanMots;
    trim($phrase);
    $phrase.='.';
    $phrase=ucfirst(strtolower($phrase));
    return $phrase;
}

// Fonction qui supprime les caractères spéciaux
function supprimerSpecialChar(&$str) {
    $specialChar=array( '%', '@', '\'', ';', '<', '>' ,'#','$','%','&','!','§','!','\n');
    // remplacer tous les caractères spéciaux par une chaîne 
    return str_replace( $specialChar, ' ', $str);
}
// fonction qui dit si une phrase contient 25 caractères ou non
function auMoins25Caracteres($phrase):bool{
    $espaceVide=substr_count($phrase," ");
    $nbrCar=strlen($phrase)-$espaceVide;
    return $nbrCar>=25;
} 
/* fonction qui corrige chaque phrase qui lui donnée en paramètre en enlevant 
toutes les majuscules qui  et en mettant le premier caractère en majuscules */  
function corrigeLaCasse(string &$phrase):string{
    $phrase=ucfirst(strtolower($phrase));
    return $phrase;
}







function correctionParagraphe(string &$theParagraph):void{
echo '<pre>';
    echo $theParagraph;
    $tabPhrases=scinderParagrah($theParagraph);
    $nbrPhrases=count($tabPhrases);
    $newParagraph="";
    for ($i=0;$i<$nbrPhrases;$i++){
        $newPhrase=corrigeLaPhrase($tabPhrases[$i]);
        $newParagraph.=$newPhrase;
    }
    
    echo '<br><br><br>';
    print_r($tabPhrases);
    echo '<br><br><br>';
    echo $newParagraph;
echo '</pre>'; 
}

correctionParagraphe($theParagraph);


?>
