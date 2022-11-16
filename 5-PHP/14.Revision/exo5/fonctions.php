<?php
function comparaison($nb1,$nb2){
if ($nb1>$nb2){
    echo("Le premier nombre $nb1 est plus grand que le second $nb2.");
}
elseif ($nb1<$nb2){
    echo("Le premier nombre $nb1 est plus petit que le second $nb2.");
}
else{
    echo("Le premier nombre $nb1 et le second $nb2 sont égaux.");
}
}
?>