<?php
require_once "../classes/exo3/classeAnimal.php";

class Lapin extends Animal{
    private $enVie;

    public function __construct(string $couleur,int $nbpate,bool $enVie){
        Animal::__construct($couleur,$nbpate);
        $this->enVie=$enVie;
    }

    public function getEnvie(){return $this->enVie;}
    public function setEnvie($enVie){$this->enVie=$enVie;}

    public function seNourrir(){echo "Le lapin se nourrit\n";}

    public function Fuir($lapin){echo "Le lapin ".$lapin->getcouleur()." s'enfuie sur ses ".$lapin->getnbpate()." pattes d'un seul bond !\n";}
}
?>