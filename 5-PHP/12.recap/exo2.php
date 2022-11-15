<?php
$tabvoy = ["a","e","i","o","u","y"];
$saisie=readline("Entrez une phrase : ");
$saisie=str_split($saisie);
$nb=0;

for($i=0;$i<count($saisie);$i++){
    for ($x=0;$x<count($tabvoy);$x++){
        if($saisie[$i]==$tabvoy[$x]){
            $nb++;
            break;
        }
    }
}
echo("Il y a ".$nb." voyelle(s) dans la phrase saisie.");
?>