<?php
    $nb=(int)readline("Entre un nombre entier : ");
    $max=$nb;
    $min=$nb;
    for ($i=1;$i<=5;$i++){
        switch(true){
            case $nb>$max;
                $max=$nb;
                break;
            case$nb<$min;
                $min=$nb;
                break;     
        }

        $nb=(int)readline("Entre un nombre entier : ");
    }
    echo($max."\n".$min)
?>