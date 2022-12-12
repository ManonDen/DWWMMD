<?php

class Employe{
    protected $prenom;
    protected $nom;
    protected $numSecu;
    protected $salaire;
    protected $job;

    public function __construct(string $prenom,string $nom,string $num,float $salaire,string $job)
    {
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->numSecu=$num;
        $this->salaire=$salaire;
        $this->job=$job;
    }

    public function getPrenom(){return $this->prenom;}
    public function setPrenom($prenom){return $this->prenom=$prenom;}

    public function getNom(){return $this->nom;}
    public function setNom($nom){return $this->nom=$nom;}

    public function getNum(){return $this->numSecu;}
    public function setNum($num){return $this->numSecu=$num;}

    public function getSalaire(){return $this->salaire;}
    public function setSalaire($salaire){return $this->salaire=$salaire;}

    public function __toString()
    {
      $phrase="Prénom : ". $this->prenom ." Nom : ". $this->nom. " Numero secu : ". $this->numSecu." Salaire : ".$this->salaire." job : ".$this->job;
        return $phrase;
    }
   

    public function effectueSonJob(){
      switch($this->job){
          case "soudeur":
              return "Le métier de soudeur consiste à souder des éléments métalliques.";
          case "assistant mecanicien":
              return "Le métier d'assitant mécanicien assister le mécanicien.";
          case "magasinier":
              return "Le métier de magasinier consiste a rangé des produits dans les rayons au sein d'un supermarché.";
          case "chef maintenance":
              return "Le métier de chef maintenance consiste a gérer des équipes.";
      }
   }
}

?>