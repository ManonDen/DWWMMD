<?php
$tabNotes = array();
$tabNotes['boucher']=16;
$tabNotes['bourdette']=13;

$stop="oui";
while ($stop=="oui"){
    $nom=readline("Entrez le nom : ");
    $note=readline("Entrez la note : ");
    $tabNotes[$nom]=$note;
    $stop=readline("Voulez-vous entrez la note d'une personne : ");
}
echo("\nLa moyenne des notes est de ".array_sum($tabNotes)/count($tabNotes))

?>