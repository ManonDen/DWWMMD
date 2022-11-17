<?php
require "fonctions.php";
// en-tête
echo("\t******* Table de Multiplication *******\n");

$choix="O";
// Tant que l'utilisateur entre autrechose que O à la variable choix, l'algorithme recommence a demandé la table et de la calculer
while($choix=="O"){
    echo"\n";
    // Demande à l'utilisateur un nombre
    $nombre=readline("Entrer le nombre pour lequel vous voulez la table de multiplication : ");
    // Vérification de si $nombre est bien un nombre entier. Si ce n'est pas le cas on demande à l'utilisateur de resaisir.
    while($nombre!=(int)$nombre){
        echo"\n";
        echo("Saisie incorrecte ! Recommencer ! Entrez un nombre entier.\n\n");
        $nombre=readline("Entrer le nombre pour lequel vous voulez la table de multiplication : ");
    }
    echo"\n";
    // Calcul de la table de multiplication pour le nombre saisie par l'utilisateur
    table($nombre);

    // Demande à l'utilisateur s'il souhaite calculer une autre table de multiplication
    echo"\n";
    $choix=strtoupper(readline("Voulez-vous continuer ? "));
    // Vérification de si $choix est O ou N. Si ce n'est pas le cas on demande à l'utilisateur de resaisir.
    while($choix!="O"and $choix!="N"){
        echo"\n";
        echo("Saisie incorrecte ! Recommencer ! Entrez O pour OUI ou N pour NON.\n\n");
        $choix=strtoupper(readline("Voulez-vous continuer ? "));
    }
}

?>