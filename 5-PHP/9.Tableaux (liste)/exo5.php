<?php
    $nbval=readline("Entrez le nombre de valeurs : ");
    $max=0;
    $min=10000000000000000000000000;
    $index=0;

    for ($i=0;$i<$nbval;$i++){
        
        $saisir=readline("Saisir un nombre entier : ");

        if (filter_var($saisir,FILTER_VALIDATE_INT)!=true){
            $saisir=readline("Recommencer ! \n Saisir nombre entier : ");
        }
        
        if($saisir>0 and $saisir>$max) {
            $max=$saisir;
            $index=$i;
        }


        else if ($saisir<0 and abs($saisir)<$min) {
            $min=abs($saisir);
            $index=$i;
        }
    }
    
    if ($max !=0){
        echo "La plus grande valeur est : ".$max." , à l'indice : ".$index ;
    }
    
    else{
        $min=0-$min;
        echo "La plus grande valeur est : ".$min." , à l'indice : ".$index ;
    }

?>