<?php
function forme($nb){

if ($nb%2==0){

    $garde="";
    $tab=[];
    $z=($nb/2)-2;
    for ($i=0;$i<$nb;$i++){
        if ($i<=($nb/2)-1){
            $garde=$garde."*";
            $tab[$i]=$garde;
        }
        else{
            $tab[$i]=$tab[$z];
            $z--;
        }
    }
    for($i=0;$i<$nb;$i++){
        echo($tab[$i]."\n");
    }
}

else{
    $garde="";
    $tab=[];
    $z=(($nb/2)-1.5);
    for ($i=0;$i<$nb;$i++){
        if ($i<=(($nb/2)-0.5)){
            $garde=$garde."*";
            $tab[$i]=$garde;
        }
        else{
            $tab[$i]=$tab[$z];
            $z--;
        }
    }
    for($i=0;$i<$nb;$i++){
        echo($tab[$i]."\n");
    }
}
}
?>