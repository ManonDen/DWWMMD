<?php
require "fonctions.php";
$nba=readline("Entre un nombre entier : ");

while ($nba!=(int)$nba){
    $nba=readline("Entrez un nombre entier : ");
}
factorielle($nba);
?>