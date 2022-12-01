<?php

class Armes{
    private static $id=1;
    private $identifiant;
    private $degat;
    private $nom;

    public function __construct(){
        $stock=Armes::$id++;
        $this->identifiant=$stock;

        $this->degat;
        $this->nom;
    }

    public function getidentifiant(){
        return $this->identifiant;
    }

    public function getdegat(){
        return $this->degat;
    }

    public function getnom(){
        return $this->nom;
    }

    
    public function setid($identifiant){
        $this->$identifiant=$identifiant;
    }
    public function setdegat($degat){
        $this->degat=$degat;
    }
    public function setnom($nom){
        $this->nom=$nom;
    }
}
?>