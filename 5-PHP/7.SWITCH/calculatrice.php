<?php
    echo("1.addition\n2.soustraction\n3.divison\n4.multiplication\n");
    
    $choix=readline("Choix : ");
    
    $nb1=readline("Entrez le 1er nombre :");
    $nb2=readline("Entrez le 2ème nombre :");
    switch ($choix){
        case 1:
            echo($resultat=$nb1+$nb2);
            break;
        case 2 :
            echo($resultat=$nb1-$nb2);
            break;
        case 3 :
            echo($resultat=$nb1/$nb2);
            break;
        case 4:
            echo($resultat=$nb1*$nb2);
            break;

    }
?>