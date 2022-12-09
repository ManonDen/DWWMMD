<?php
require_once "../classes/classeRectangle.php";

class Pyramide extends Rectangle{
    private $hauteur;

    public function __construct(int $hauteur, int $longueur,int $largeur){
        $this->hauteur=$hauteur;
        $this->longueur=$longueur;
        $this->largeur=$largeur;
    }
    public function getHauteur(){return $this->hauteur;}
    public function setHauteur($hauteur){$this->hauteur=$hauteur;}

    public function getLongueur(){return $this->longueur;}
    public function setLongueur($longueur){$this->longueur=$longueur;}

    public function getLargeur(){return $this->largeur;}
    public function setLargeur($largeur){$this->largeur=$largeur;}

    public function volume(){
        return ($this->largeur * $this->longueur * $this->hauteur);
    }

    public function afficher($infospyramide){
        echo "\n-Volume : ".$infospyramide->Volume();
    }
}

?>