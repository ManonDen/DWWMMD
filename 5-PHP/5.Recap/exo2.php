<?php
    $nb=rand(0,20);
    echo("Nombre : ".$nb."\n");

    if($nb<7){
        echo("Bonjour");
    }
    elseif ($nb<14){
        echo("Salut");
    }
    else
        echo("Hello");
?>