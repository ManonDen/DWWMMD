<?php
// Calcul et affichage de la ciconférence et de la surface du rayon
function calcul($r){
echo("Sa cironférence est de : ". round(2*$r*pi(),2) ."\n");
echo("Sa surface est         : ". round(pi()*($r*$r),2) . "\n\n");
}
?>