<?php
    $nbval=readline("Entrez le nombre de valeurs : ");
    $max=-10000;
    $index=0;

    for ($i=0;$i<$nbval;$i++){
        $saisir=readline("Saisir un nombre entier : ");
        if ($saisir>$max) {
            $max=$saisir;
            $index=$i;
        }
        
    }
    echo "La plus grande valeur est : ".$max." , à l'index : ".$index ;

?>