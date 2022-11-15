<?php
$tab=[];
$saisir="";
$x=0;

while ($saisir!="STOP"){
    $saisir=strtoupper(readline("Saisir un nombre ou ecrire STOP pour arrêter la saisie "));
    if ($saisir != "STOP"){
        $tab[$x]= $saisir;
        $x++;
    }
    else{
        break;
    }
}
$con=true;
for($i=0;$i<count($tab)-1;$i++){
    if($tab[$i+1]!=$tab[$i]+1){
        echo"\nLes éléments du tableau sont non consécutifs.\n";
        $con=false;
        break;
    }
}

if ($con==true){
    echo "\nLes éléments du tableau sont consécutifs.\n";
}

foreach($tab as $valeur){
    echo $valeur . "\n";
}
?>
