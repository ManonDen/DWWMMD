<?php
$tab=[5,9,8,4,6,4,2,8];

if (count($tab)%2==0){
    for ($i=0;$i<(count($tab)/2);$i++){
        $garde=$tab[$i];
        $tab[$i]=$tab[count($tab)-($i+1)];
        $tab[count($tab)-($i+1)]=$garde;
    }
}



else{
    for ($i=0;$i<(count($tab)/2)-0.5;$i++){
        $garde=$tab[$i];
        $tab[$i]=$tab[count($tab)-($i+1)];
        $tab[count($tab)-($i+1)]=$garde;
    }
}
foreach ($tab as $valeur) {
     echo $valeur ."\n";
}
?>