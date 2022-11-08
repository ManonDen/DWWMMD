<!-- <?php

// $valeur= [1,2,3,4,5];

// foreach ($valeur as $key => $value) {
//     echo $key .": ". $value .  "\n";

// }
// echo "la somme des valeurs du tableau est " . array_sum($valeur);


// ?> -->

<?php
$tab1=[4,8,7,9,1,5,4,6];
$tab2=[7,6,5,2,1,3,7,4];
$tab3=[];
for($i=0;$i<count($tab3);$i++){
    $tab3[$i]=$tab1[$i]+$tab2[$i];
    echo $tab3[$i];
}


?>