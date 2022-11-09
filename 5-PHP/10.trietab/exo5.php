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
$ajout=1;
$double=false;

for ($i=0;$i<count($tab)-1;$i++){
    for ($x=$i;$x<count($tab)-1;$x++){
        if ($tab[$i] == $tab[$x+$ajout]){
            echo "Il y a un ou plusieurs doublons";
            $double=true;
            break;
            }
        }
    }

if ($double==false){
    echo("Il n'y a pas de doublons.");
}

?>