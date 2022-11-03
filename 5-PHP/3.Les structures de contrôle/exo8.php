<?php
$nombre=readline("Donnez un nombre de photocopie : ");
if ($nombre >=30){
    echo("La facture est de : ".(0.10*10+0.09*20+0.08*($nombre-30)));
}
elseif ($nombre >10){
    echo("La facture est de : ".(0.10*10+0.09*($nombre-10)));
}
else
    echo("La facture est de : ". (0.10*$nombre))
?>