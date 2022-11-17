<?php
// Calcul et affichage de la table de multiplication donnée par l'utilisateur
function table($nb){
for($i=1;$i<=10;$i++){
    echo("$nb * $i = ". $nb*$i."\n");
}
}
?>