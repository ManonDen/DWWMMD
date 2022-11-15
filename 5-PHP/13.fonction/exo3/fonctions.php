<?php
function ppcm($nb1,$nb2){
    $nba=$nb1;
    $nbb=$nb2;
    while(($nb1*$nb2)!=0){
        if ($nb1>$nb2){
            $nb1=$nb1-$nb2;
        } 
        else 
            $nb2=$nb2-$nb1; 
    }

    if ($nb1==0){
        echo("PPCM est : ").(($nba*$nbb)/$nb2);
    }
    else
        echo("PPCM est : ").(($nba*$nbb)/$nb1);
}
?>