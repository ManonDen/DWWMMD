<?php
    $tab1=[0,5,9,54,8,5];
    $tab2=[5,15,654,356,5,6];
    $tab3=[];

    $x=0;
    for ($z=count($tab2);$z<count($tab2)*2;$z++){
        for ($i=0;$i<count($tab1);$i++){
                    $tab3[$i]=$tab1[$i];
        }
    
    
        $tab3[$z]=$tab2[$x];
        $x++;
    }

    $estvrai=true;
    while($estvrai){
        $estvrai=false;
            for ($i=0;$i<count($tab3)-1;$i++){
                if ($tab3[$i]>$tab3[$i+1]){
                    $garde=$tab3[$i];
                    $tab3[$i]=$tab3[$i+1];
                    $tab3[$i+1]=$garde;
                    $estvrai=true;
                }
            }
    }

    foreach($tab3 as $valeur ){
        echo $valeur. "\n";
    }
    
?>