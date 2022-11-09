<?php
$tab=[5,5,5,10];
$sum=0;
for ($i=0;$i<=count($tab)-1;$i++){
    $sum=$sum+$tab[$i];
}
echo("Voici la somme du tableau : ".$sum);
?>