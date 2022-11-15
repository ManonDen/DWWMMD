<?php
function factorielle($nb){    
    $resultat = 1;
    for($i=2;$i<=$nb;$i++){
        $resultat=$resultat*$i;
    }
    echo("La factorielle de ".$nb." vaut : ". $resultat);
}
?>