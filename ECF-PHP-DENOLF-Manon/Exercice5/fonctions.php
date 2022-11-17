<?php
// Fonction servant à remplir un tableau
function remplir($tableau){
    for($i=0;$i<10;$i++){
        $tableau[$i]=rand(20,100);
    }
    return $tableau;
}
// Fonction servant à afficher un tableau
function affiche($tableau){
    foreach($tableau as $valeur){
        echo"$valeur ";
    }
    echo"\n";
}
// Fonction à vérifier la saisie de l'utilisateur en mettant en paramètre : la saisie utilisateur, le nombre min et le nombre max.
function vérification($choix,$debut,$fin){
    while($choix!=(float)$choix or $choix<$debut or $choix>$fin){
        echo"\nSaisie incorrecte ! Recommencer ! Entrer un nombre entier.\n\n";
        $choix=readline("Choix (un chiffre) : ");
    }
    return $choix;
}
?>