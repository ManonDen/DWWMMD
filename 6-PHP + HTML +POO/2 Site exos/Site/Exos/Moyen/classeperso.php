<?php

class Personnages{
    private $nom;
    private $force;
    private $pv;
    private $idarme;

    public function __construct(){
        $this->nom;
        $this->force;
        $this->pv;
        $this->idarme;    }

    public function getNom(){return $this->nom;}
    public function getforce(){return $this->force;}
    public function getpv(){return $this->pv;}
    public function getidarme(){return $this->idarme;}

    public function setNom($nom){$this->nom=$nom;}
    public function setforce($force){ $this->force=$force;}
    public function setpv($pv){$this->pv=$pv;}
    public function setidarme($idarme){$this->idarme=$idarme;}
}

?>