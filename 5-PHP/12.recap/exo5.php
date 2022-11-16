<?php
$tab=[];
for ($i=1;$i<=5;$i++){
    for ($j=1;$j<=5;$j++){
        $tab[$i][$j]=$i*$j; 
    }
    // echo implode("\t", $tab[$i]) ou faire juste echo en dessous;
    echo(str_pad( implode("\t", $tab[$i]),10));
    echo("\n");
}
?>