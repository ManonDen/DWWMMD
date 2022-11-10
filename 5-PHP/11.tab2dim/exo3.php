<?php
$garde="";
$tab=[];
for ($i=0;$i<7;$i++){
    for($j=0;$j<$i+1;$j++){
        if($j==0 or $j==$i){
            $garde=$garde."X";
            $tab[$i][$j]=$garde;
        }
        else{
            $garde=$garde."O";
            $tab[$i][$j]=$garde;
        }
    }
    echo $garde."\n";
    $garde="";
}
echo("XXXXXXXX")
?>