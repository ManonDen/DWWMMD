<?php 
require_once "../classes/exo3/classeChasseur.php";
require_once "../classes/exo3/classeLapin.php";

$lapin=new Lapin("gris",4,true);
$chasseur=new chasseur("Vladimir","fusil");

echo "Le lapin ".$lapin->getCouleur()." à ".$lapin->getnbpate()." pattes a été créer\n";
echo "Le chasseur ".$chasseur->getNom()." a été créer avec un ".$chasseur->getArme()."\n";
echo $lapin->seNourrir();

while ($lapin->getEnvie()){
    $chasseur->Deplacement($chasseur);
    $lapin->crier();
    $chasseur->Chasser($chasseur,$lapin);
    if($lapin->getEnvie()){
        $lapin->fuir($lapin);
    }
}


?>