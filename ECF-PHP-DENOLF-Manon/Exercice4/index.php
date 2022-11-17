<?php
require "fonctions.php";

// En-tête
echo("\t******Tableau périodique des éléments chimiques******\n\n");

// Tableau associatif
$elements=array("H"=>"Hydrogène","He"=>"Hélium","P"=>"Phosphore","V"=>"Vanadium","Pb"=>"Plomb","I"=>"Iode","Kr"=>"Krypton",
"X"=>"Xénon","Rn"=>"Radon","Zr"=>"Zirconium");

// Affichage tableau des éléments
affichage($elements);

echo"\n*************************************\nTableau trié :\n";
// Range dans l'ordre le tableau des éléments
asort($elements);
// Affichage tableau des éléments triés
affichage($elements);
?>
