<?php
require_once "../classes/Character.class.php";

class Monstre extends Character{
    public function __construct(int $lifePoint,int $strenghtPoint)
    {
        parent::__construct($lifePoint,$strenghtPoint);
    }

    // Méthode

    // Le joueur attaque le monstre
    public function attack($character){
        echo "\nLe monstre :\nPoint de vie actuel : ".$this->lifePoint."\n".$character->getPseudo()." attaque le monstre de "
        .$character->getStrenghtPoint();
        // calcul perte point de vie du monstre
        $this->lifePoint-=$character->getStrenghtPoint();
        // affichage de ce qu'il reste
        echo "\nPoint de vie actuel : ".$this->lifePoint ."\n";
    }
}
?>