<?php
$compteur = readline("Entrez un nombre entre 1 et 3 : ");
while($compteur<1 or $compteur>3) {
    $compteur = readline("Entrez un nombre entre 1 et 3 : ");
}
echo("Le nombre est correcte.")
?>