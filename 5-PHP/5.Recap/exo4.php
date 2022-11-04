<?php
$nb=readline("Entrez un nombre pair et divisible par 3 : ");
$compteur=1;

while ($nb%2!=0 or $nb%3!=0){

    if($nb%2!=0){
        echo("Le nombre n'est pas pair !\n\n");
    }
    if($nb%3!=0){
        echo("Le nombre n'est pas divisible par 3 !\n\n");
    }

    $compteur=$compteur+1;
    echo("**********Essai numéro " . $compteur . " ************\n\n");
    $nb=readline("Entrez un nombre pair et divisible par 3 : ");
}

echo("*************************************\n\n");

$compteur=1;
$garde="";
while($compteur<=10){
   if($nb%$compteur==0){
        $garde=$garde." par ". (string)$compteur;
   }
   $compteur=$compteur+1;
}
echo("Le nombre est ".$nb." est divisible".$garde);
?>