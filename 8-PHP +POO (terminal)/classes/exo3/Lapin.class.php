<?php
require_once "../classes/exo3/Animal.class.php";

class Lapin extends Animal{
    private $enVie;

    public function __construct(string $couleur,int $nbpate){
        Animal::__construct($couleur,$nbpate);
        $this->enVie=true;
        echo "Le lapin ".$this->couleur." à ".$this->nbpate." pattes a été créer\n";
    }

    public function getEnvie(){return $this->enVie;}
    public function setEnvie($enVie){$this->enVie=$enVie;}

    public function seNourrir(){echo "Le lapin se nourrit\n";}

    public function Fuir(){echo "Le lapin ".$this->couleur." s'enfuie sur ses ".$this->nbpate." pattes d'un seul bond !\n";}

    public function deplacement(){$this->Fuir();}

    public function crier(){echo "Le lapin glapie de peur\n";}
   
}
?>