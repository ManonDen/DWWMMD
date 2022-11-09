<?php
    $nb=readline("Entre un nombre entier : ");

    while ($nb!=(int)$nb){
        $nb=readline("Entrez un nombre entier : ");
    }


    $max=-100000000000;
    $min=1000000000000;
    for ($i=1;$i<=5;$i++){
        if ($nb>$max){
            $max=$nb;
        }
        elseif($nb<$min){
            $min=$nb;
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