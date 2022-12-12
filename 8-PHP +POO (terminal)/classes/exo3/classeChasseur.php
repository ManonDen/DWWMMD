<?php
require_once "../classes/exo3/classeHumain.php";

class Chasseur extends Humain{
    private $arme;

    public function __construct(string $nom,string $arme){
        Humain::__construct($nom);
        $this->arme=$arme;
    }

    public function getArme(){return $this->arme;}
    public function setArme($arme){$this->arme=$arme;}

    public function deplacement($chasseur){echo $chasseur->getnom()." avance avec son ".$this->arme."\n";}

    public function Chasser($chasseur,$lapin){
        $nb=rand(1,6);
        if($nb==1 or $nb==6){

            echo $chasseur->getnom()." tire sur le lapin avec son ".$this->arme." est... le touche\nLe pauvre petit lapin "
            .$lapin->getcouleur()." est mort ";
            $lapin->setenVie(false);
        }
    }

}

?>