<?php
    $nb=(int)readline("Entre un nombre entier : ");

    $nbChang=(integer)$nb;
    while ($nbChang!=$nb){
        $nb=readline("Entrez un nombre entier : ");
        $nbChang=(integer)$nb;
    }

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

        $nb=readline("Entre un nombre entier : ");
        $nbChang=(integer)$nb;
        while ($nbChang!=$nb){
            $nb=readline("Entrez un nombre entier : ");
            $nbChang=(integer)$nb;
        }
    }
    echo($max."\n".$min)
?>