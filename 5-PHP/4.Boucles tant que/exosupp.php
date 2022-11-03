<?php
$nb=readline("Donner nombre à multipler : ");

$compteur=1;
echo("tab de ".$nb." : ");
while ($compteur<11){
    echo($nb*$compteur."-");
    $compteur=$compteur+1;
}
?>