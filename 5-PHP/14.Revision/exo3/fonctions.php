<?php
function tirages($valeur){
$i=0;
$nbalea=100;
while ($nbalea!=$valeur){
    $nbalea=rand(100,1000);
    $i++;
}
echo("Il a fallut ".$i." itérations pour obtenir la valeur $nbalea !");
}
?>