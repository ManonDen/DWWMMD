<?php
    $notes=[];
    $sum=0;
    for ($i=0;$i<9;$i++){
        $saisir=readline("Saisir une note :");
        $sum=$sum+$saisir;
    }
    echo("La moyenne est de : ".$sum/9);
?>