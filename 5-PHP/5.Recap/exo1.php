<?php
    $nb=rand(1,20);
    echo("Le nombre généré aléatoirement est : ".$nb."\n");

    if ($nb<=5){
        echo("Il est compris entre 1 et 5");
    }
    elseif ($nb<=10){
        echo("Il est compris entre 6 et 10");
    }
    elseif($nb<=15){
        echo("Il est compris entre 11 et 15");
    }
    else   
        echo("Il est compris entre 16 et 20")
    
?>