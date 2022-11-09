<?php
$tab=[5,9,8,4,6,4,2];
$x=1;
if (count($tab)%2==0){
    for ($i=0;$i<(count($tab)/2);$i++){
        $garde=$tab[$i];
        $tab[$i]=$tab[count($tab)-$x];
        $tab[count($tab)-$x]=$garde;
        $x++;
    }
}
else{
    for ($i=0;$i<(count($tab)/2)-0.5;$i++){
        $garde=$tab[$i];
        $tab[$i]=$tab[count($tab)-$x];
        $tab[count($tab)-$x]=$garde;
        $x++;
    }
}
foreach ($tab as $valeur) {
     echo $valeur ."\n";
}
?>