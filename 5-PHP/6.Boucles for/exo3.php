<?php
    $nb=readline("Entre un nombre entier : ");

    while ($nb!=(int)$nb){
        $nb=readline("Entrez un nombre entier : ");
}
    
    $resultat=1;
    for($i=2;$i<=$nb;$i++){
        $resultat=$resultat*$i;
    }
    echo("La factorielle de ".$nb." vaut : ". $resultat)
?>