<?php
require_once "../classes/exo2/classeTriangleRectangle.php";

class Pyramide extends TriangleRectangle{


    public function __construct($base,$hauteur){
        $this->base=$base;
        $this->hauteur=$hauteur;
    }
    public function getHauteur(){return $this->hauteur;}
    public function setHauteur($hauteur){$this->hauteur=$hauteur;}

    public function getbase(){return $this->base;}
    public function setbase($base){$this->base=$base;}

    public function volume(){
        $aire=($this->base*$this->hauteur)/2;
        return (1/3*$aire*$this->hauteur);
    }

    public function afficher($infospyramide){
        echo "\n-Volume : ".$infospyramide->Volume();
    }
}

?>