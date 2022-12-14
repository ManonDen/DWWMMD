<?php
require_once "../classes/exo4/Personne.class.php";

class Client extends Personne{
    private $adresse;

    public function __construct($nom,$prenom,$adresse){
        parent::__construct($nom,$prenom);
        $this->adresse=$adresse;
    }    

    public function getAdresse(){return $this->adresse;}

    public function setAdresse($adresse){$this->adresse=$adresse;}

    public function setCoord(){
        echo "<h1>Coordonnées : </h1>";
        echo "Nom : ".$this->nom."<br>";
        echo "Prénom : ".$this->prenom."<br>";
        echo "Adresse : ".$this->adresse."<br>";
    }
}
?>