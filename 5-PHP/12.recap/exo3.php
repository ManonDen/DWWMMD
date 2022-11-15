<?php
$saisie=readline("Entrez le nombre de ligne : ");
$garde="";

for($i=0;$i<$saisie;$i++){
    for($j=1;$j<=$i;$j++){
        $garde=$garde.$i;
        
    }
    echo($garde."\n");
    $garde="";
}
?>
