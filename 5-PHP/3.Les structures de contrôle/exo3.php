<?php
$nombre = readline("Donner un nombre : ");

if ($nombre == 0){
    echo("Le nombre est null.");
}
elseif($nombre <0){
    echo("Le nombre est négatif.");
}
else
    echo("Le nombre est positif.")
?>