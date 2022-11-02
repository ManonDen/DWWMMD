<?php
$prixHT = readline("Prix Hors Taxe : ");
$nba = readline("Nombre d'article : ");
define("TVA",20/100);
$prixTTC = $prixHT * $nba * (1 + TVA);

echo("Voici le Prix TTC : ". $prixTTC);
?>