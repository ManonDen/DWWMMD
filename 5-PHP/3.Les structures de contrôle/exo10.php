<?php
$j=readline("Quel est le jour :");
$m=readline("Quel est le mois :");
$a=readline("Quel est l'année :");

if(($a%4==0) and($a%100!=0 or $a%400==0)){
        echo("Année bissextile");
}
else
        echo("Année non bissextile");
?>