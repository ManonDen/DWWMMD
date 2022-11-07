<?php
    $nb=(int)readline("Entre un nombre entier : ");
    $resultat=1;
    for($i=2;$i<=$nb;$i++){
        $resultat=$resultat*$i;
    }
    echo("La factorielle de ".$nb." vaut : ". $resultat)
?>