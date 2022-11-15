<?php
$tabNotes = array();
$tabNotes['prenot'] = array(2,10,14);
$tabNotes['perthuis'] = array(10,18,12);

$stop="oui";
$notes=array();
while ($stop=="oui"){
    $nom=readline("Entrez le nom : ");
    for ($i=0;$i<3;$i++){
        $note=readline("Entrez la note : ");
        $notes[$i]=$note;
        $note=[];
    }
    $tabNotes[$nom]=$notes;
    $stop=readline("Voulez-vous entrez les notes d'une autre personne : ");
}

$choix="";
while ($choix!=0){
    echo("\n\n0. Quitter le menu.\n1. Afficher le nom et les notes de chaque élève.\n2. Afficher le nom et la moyenne de chaque élève
3. Afficher les notes et la moyenne d'un élève dont le nom sera saisi au clavier\n\n");
    $choix=readline("Choix : ");
    switch($choix){
        case 0:
            echo("Quitte le programme.");
            break;

        case 1: 
            foreach ($tabNotes as $nom => $notes){
                echo("\nLes notes de ".$nom." sont : ");
                for ($i=0;$i<3;$i++){
                    echo($notes[$i]." ");
                }
            }
            break;
        
        case 2:
            foreach ($tabNotes as $nom => $notes){
                echo("\nLa moyenne de ".$nom." est ". round(array_sum($notes)/count($notes),2));
            }
            break;

        case 3:
            $saisie=readline("Entrez le nom de l'élève dont vous souhaitez voir les notes et la moyenne : ");
            $trouve=false;
            foreach ($tabNotes as $nom => $notes){
                if ($saisie==$nom){
                echo("\nLes notes de ".$nom." sont : ");
                for ($i=0;$i<3;$i++){
                echo($notes[$i]." ");
                }
                echo("avec une moyenne de : ".round(array_sum($notes)/count($notes)));
                $trouve=true;
                }
            }
            if ($trouve==false){
                echo"Le nom saisie ne figure pas parmi les noms de tabnotes!";
            }
            break;
    }
}
?>