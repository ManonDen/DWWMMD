<?php
    $tab=["Denolf","Manon","Noel","Paris"];
    $saisir=readline("Entrez mot à chercher dans la liste : ");
    $trouver=false;

    for ($i=0;$i<count($tab);$i++){
        if( $tab[$i]== $saisir){
            echo"Le mot est dans le tableau.";
            $trouver=true;
        }
    }
    if ($trouver==false){
        echo"Le mot n'est pas dans le tableau.";
    }


?>