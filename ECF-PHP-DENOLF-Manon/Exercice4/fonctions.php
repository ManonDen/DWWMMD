<?php
// Fonction permettant d'afficher un tableau associatif
function affichage($dict){
    foreach($dict as $key =>$value){
        echo("$key : $value\n");
    }
}
?>