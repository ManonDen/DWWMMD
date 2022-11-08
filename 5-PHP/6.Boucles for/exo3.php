<?php
    $nb=readline("Entre un nombre entier : ");

    $nbChang=(integer)$nb;
    while ($nbChang!=$nb){
        $nb=readline("Entrez un nombre entier : ");
        $nbChang=(integer)$nb;
    }

    
    $resultat=1;
    for($i=2;$i<=$nb;$i++){
        $resultat=$resultat*$i;
    }
    echo("La factorielle de ".$nb." vaut : ". $resultat)
?>