<?php
    $notes=[];
    $nbval=readline("Entrez le nombre de valeurs : ");
    $sum=0;
    for ($i=0;$i<$nbval;$i++){
        $saisir=readline("Saisir un nombre entier : ");
        $notes[$i]=$saisir;
        $sum=$sum+$saisir;
    }
    $moy=round($sum/9,2);
    $nb=0;
    for($i=0;$i<count($notes);$i++){
        if ($notes[$i]>$moy){
                $nb++;
        }
    }
    echo("Moyenne : ".$moy);
    echo("\nLe nombre de note supérieur à la moyenne : ".$nb);
?>