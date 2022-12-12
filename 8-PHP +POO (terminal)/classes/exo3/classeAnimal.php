<?php
require_once "../classes/exo3/Ideplacement.php";

abstract class Animal implements Deplacement{
    private $couleur;
    private $nbpate;

    protected function __construct(string $couleur,int $nbpate){
        $this->couleur=$couleur;
        $this->nbpate=$nbpate;
    }

    public function getCouleur(){return $this->couleur;}
    public function setCouleur($couleur){$this->couleur=$couleur;}

    public function getnbpate(){return $this->nbpate;}
    public function setnbpate($nbpate){$this->nbpate=$nbpate;}

    public function deplacement($lapin){}

    public function crier(){echo "Le lapin glapie de peur\n";}

}
?>