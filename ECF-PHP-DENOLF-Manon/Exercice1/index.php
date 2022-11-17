<?php
require "fonctions.php";
// entête
echo"\t\t\t********************\n";
echo"\t\t\tCALCUL SUR LE CERCLE\n";
echo"\t\t\t********************\n";

// Tant que l'utilisateur entre autrechose que O à la variable choix, l'algorithme recommence a demandé un rayon et a calculé.
$choix="O";
while($choix=="O"){
    // Demande à lutilisateur le rayon du cercle
    echo"\n";
    $rayon=readline("Quel est le rayon du cercle : ");
    // Vérification de si $rayon est bien un nombre. Si ce n'est pas le cas on demande à l'utilisateur de resaisir.
    while($rayon!=(float)$rayon){
        echo("\nSaisie incorrecte ! Recommencer ! Entrez un entier ou un réel.\n\n");
        $rayon=readline("Quel est le rayon du cercle : ");
    }

    // Calcul circonférence et surface d'un cercle en fonction du rayon de ce cercle
    calcul($rayon);

    // Demande à l'utilisateur s'il souhaite faire un autre calcul.
    $choix=strtoupper(readline("Voulez-vous faire un autre calcul (O/N) : "));
    // Vérification de si $choix est O ou N. Si ce n'est pas le cas on demande à l'utilisateur de resaisir.
    while($choix!="O"and $choix!="N"){
        echo("\nSaisie incorrecte ! Recommencer ! Entrez O pour OUI ou N pour NON.\n\n");
        $choix=strtoupper(readline("Voulez-vous faire un autre calcul (O/N) : "));
    }
}
echo("\nAu revoir et à bientôt")

?>