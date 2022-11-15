<?php
$prixHT = readline("Prix Hors Taxe : ");
$nba = readline("Nombre d'article : ");

require "fonctions.php";
TTC($prixHT,$nba);
?>