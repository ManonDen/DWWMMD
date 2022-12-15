<?php 
require_once "../classes/exo3/Chasseur.class.php";
require_once "../classes/exo3/Lapin.class.php";

$lapin=new Lapin("gris",4);
$chasseur=new chasseur("Vladimir","fusil");

echo $lapin->seNourrir();

while ($lapin->getEnvie()){
    $chasseur->Deplacement($chasseur);
    $lapin->crier();
    $chasseur->Chasser($chasseur,$lapin);
    if($lapin->getEnvie()){
        $lapin->Deplacement();
    }
}


?>