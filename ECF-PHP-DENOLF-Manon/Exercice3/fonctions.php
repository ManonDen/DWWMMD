<?php
// Calcul de delta et des racines de l'équation du deuxième degré
function delta($valeurs){
    // calcul de delta
    $delta=($valeurs["b"]*$valeurs["b"])-4*$valeurs["a"]*$valeurs["c"];
    // Le(s) racine(s) de si delta est négatif
    if($delta<0){
        echo"L'équation ne possède pas de racine réelle\nDelta = $delta";
    }
    // Le(s) racine(s) de si delta est positif
    elseif($delta>0){
        echo"L'équation possède 2 racines distinctes :\nDelta = $delta\n";
        echo("L'équation s'annule pour :\nX1 = ". (-$valeurs["b"]+sqrt($delta))/(2*$valeurs["a"]).
        "\nX2 = ".(-$valeurs["b"]-sqrt($delta))/(2*$valeurs["a"]));
    }
    // Le(s) racine(s) de si delta est 0
    else{
        echo"L'équation possède une racine double :\nDelta = $delta\n";
        echo("X1 = X2 = ".(-$valeurs["b"]/(2*$valeurs["a"])));
    }
}
?>