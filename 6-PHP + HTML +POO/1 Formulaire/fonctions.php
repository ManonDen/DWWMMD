<?php
function convertir($dictio,$nb,$mo){

$val=0;
foreach ($dictio as $key => $value){
    if ($key == $mo){
        $val=round($value*$nb,2);
    }
}
return $val;
}

?>
