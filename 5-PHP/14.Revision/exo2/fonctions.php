<?php
function tirages($valeur){

$nbalea=100;
$bool=true;

for ($i=0;$bool;$i++){
    $nbalea=rand(100,1000);
    if ($nbalea==$valeur){
        $bool=false;
    }
}
echo("Il a fallut ".($i-1)." itérations pour obtenir la valeur $nbalea !");
}
?>