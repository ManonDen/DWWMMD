<?php
require "fonctions.php";
// en-tête
echo("Racine de l'équation du 2nd degré\n\tY = ax² + bx + c\n");

$vals=array("a"=>"","b"=>"","c"=>"");
$choix="O";
// Tant que l'utilisateur entre autrechose que O à la variable choix, l'algorithme recommence a demandé les valeurs et a calculer delta et le(s) racine(s)
while($choix=="O"){
    echo"\n";

    // Rempli les valeurs associées aux clés
    foreach($vals as $key=>$value){
        // Demande à l'utilisateur la valeur de a, puis b, puis c
        $vals[$key]=readline("Quelle est la valeur de $key : ");
        // Vérification de si la valeur est bien un nombre. Si ce n'est pas le cas on demande à l'utilisateur de resaisir.
        while($vals[$key]!=(float)$vals[$key]){
            echo"\n";
            echo("Saisie incorrecte ! Recommencer ! Entrez un nombre entier ou un réel.\n\n");
            $vals[$key]=readline("Quelle est la valeur de $key : ");
        }
    }
    // Calcul de delta et des racines de l'équation du deuxième degré
    echo"\n";
    delta($vals);
    echo"\n\n";

    // Demande à l'utilisateur s'il souhaite calculer un autre delta et des racines de l'équation du deuxième degré
    $choix=strtoupper(readline("Voulez-vous continuer ? "));
    // Vérification de si $choix est O ou N. Si ce n'est pas le cas on demande à l'utilisateur de resaisir.
    while($choix!="O"and $choix!="N"){
        echo"\n";
        echo("Saisie incorrecte ! Recommencer ! Entrez O pour OUI ou N pour NON.\n\n");
        $choix=strtoupper(readline("Voulez-vous continuer ? "));
    }
}
echo("Au revoir et à bientôt")
?>