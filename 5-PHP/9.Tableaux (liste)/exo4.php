<?php
    $tab1=[4,8,7,9,1,5,4,6];
    $tab2=[7,6,5,2,1,3,7,4];
    $tab=[];
    for($i=0;$i<=count($tab1)-1;$i++){
        $tab[$i]=$tab1[$i]+$tab2[$i];
        echo $tab[$i]."\n";
    }
   
?>