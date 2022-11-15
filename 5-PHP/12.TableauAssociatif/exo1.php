<?php
$chomage = array('Autriche'=>4.9, 'Allemagne'=>9.3, 'Danemark'=>4.8 , 'Espagne'=>9.4, 'France'=>9.7);

foreach ($chomage as $pays=>$value) {
    echo "Le taux de chômage en " . $pays . " est de : " . $value . " %." . "\n";
}

$min=100;
$minP="";
echo("\nTaux de chômage inférieur à 5% :\n");
foreach ($chomage as $pays=>$value) {
    if ($value <=5){
        echo "Le taux de chômage en " . $pays . " est de : " . $value . " %." . "\n";
    }
    if($value < $min){
        $min=$value;
        $minP=$pays;
    }
}

echo("\nLe nom du pays ayant le taux de chômage le plus faible est ".$minP." avec une valeur de ".$min." %.");
?>