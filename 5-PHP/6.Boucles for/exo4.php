<?php
    $nb=(int)readline("Entre un nombre entier : ");
    $max=$nb;
    $min=$nb;
    for ($i=1;$i<=5;$i++){
        if ($nb>$max){
            $max=$nb;
        }
        elseif($nb<$min){
            $min=$nb;
        }
        $nb=(int)readline("Entre un nombre entier : ");
    }
    echo($max."\n".$min)
?>