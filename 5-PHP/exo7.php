<?php
    $prix=[5,50,23,11];
    $qte=[10,1,4,3];
    $resultat=0;
    for($i=0;$i<count($prix);$i++){
        $resultat=$resultat+($prix[$i]*$qte[$i]);
    }
    echo("Le prix total est de : ".$resultat);
?>