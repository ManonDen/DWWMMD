<?php
function affiche($dicinfo){
    foreach($dicinfo as $key => $value){
        echo $key ." : ".$value."<br>";
    }
    echo "-----------------------<br>";
}
?>