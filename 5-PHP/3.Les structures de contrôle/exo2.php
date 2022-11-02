<?php
$nb1 = readline("Donner un nombre : ");
$nb2 = readline("Donner un nombre : ");

if (($nb1> 0 and $nb2>0) OR ($nb1<0 and $nb2<0)) {
    echo("Le nombre est positif");
}
else
    echo("Le nombre est négatif");
?>