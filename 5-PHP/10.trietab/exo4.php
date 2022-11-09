<?php
    $tab=["Denolf","Manon","Noel","Paris"];

    $saisir=readline("Entrez mot à chercher dans la liste : ");
    $index="";
    
    for ($i=0;$i<count($tab);$i++){
        if( $tab[$i]== $saisir){
            $index=$i;
        }
    }
    foreach ($tab as $key => $value){
        if ($key==$index){
            echo $key." : ".$value;
        }
    }

?>