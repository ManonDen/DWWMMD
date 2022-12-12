<?php
require_once "../classes/exo3/Ideplacement.php";

abstract class Humain implements Deplacement{
    private $nom;

    protected function __construct(string $nom){
        $this->nom=$nom;
    }

    public function getNom(){return $this->nom;}
    public function setNom($nom){$this->nom=$nom;}

}
?>