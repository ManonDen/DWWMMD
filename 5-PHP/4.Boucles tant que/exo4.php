<?php
    $nb1=readline("Donnez le premier nombre : ");
    $nb2=readline("Donnez le second nombre : ");

    while(($nb1*$nb2)!=0){
        if ($nb1>$nb2){
            $nb1=$nb1-$nb2;
        } 
        else 
            $nb2=$nb2-$nb1; 
    }

    if ($nb1==0){
        echo("PGCD est : ").$nb2;
    }
    else
      echo("PGCD est : ").$nb1;
?>