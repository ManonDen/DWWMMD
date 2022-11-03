<?php
$compteur = readline("Entrez un nombre entre 10 et 20 : ");
while($compteur<10 or $compteur>20) {
    if ($compteur<10){
        echo("Plus grand ! \n");
        $compteur = readline("Entrez un nombre entre 10 et 20 : ");
    }
    else{
        echo("Plus petit ! \n");
        $compteur = readline("Entrez un nombre entre 10 et 20 : ");
    }
}
echo("Le nombre est correcte.")
?>