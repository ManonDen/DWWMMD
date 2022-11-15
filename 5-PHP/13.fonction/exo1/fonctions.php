<?php
function TTC($ht,$nb){
define("TVA",20/100);
$prixTTC = $ht * $nb * (1 + TVA);

echo("Voici le Prix TTC : ". $prixTTC);
}
?>