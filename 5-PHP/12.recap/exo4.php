<?php
$tab=[];
for($i=0;$i<10;$i++){
    $tab[$i]=rand(0,100);
    echo($tab[$i]."-");
}
$key="";
$key = array_search(42, $tab);
if($key!=""){
    echo("\nLe nombre 42 est bien dans le tableau !");
}
else{
    echo("\nLe nombre 42 n'est pas dans le tableau !");
}
?>