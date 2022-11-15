<?php

$nb=readline("Entrez un nombre entier : ");

while ($nb!=(int)$nb){
        $nb=readline("Entrez un nombre entier : ");
}

$neg=$nb;
$pos=$nb;
echo("Les 5 nombres précédents sont :\n");
for($i=1;$i<6;$i++){
        echo($neg=$neg-1 ."\n"); 
}

echo("Les 5 nombres suivants sont :\n");
for($i=1;$i<6;$i++){
        echo($pos=$pos+1 ."\n"); 
}
?>