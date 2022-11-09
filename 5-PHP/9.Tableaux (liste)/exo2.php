<?php
    $nbval=readline("Entrez le nombre de valeurs : ");
    $pos=0;
    $neg=0;
    for ($i=0;$i<$nbval;$i++){
        $saisir=readline("Saisir un nombre entier :");

        if ($saisir>0){
            $pos=$pos+1;
        }
        elseif($saisir<0){
            $neg=$neg+1;
        }
    }
    echo("Nombre de valeur positif: ".$pos."\nNombre de valeur négatif: ".$neg);
?>