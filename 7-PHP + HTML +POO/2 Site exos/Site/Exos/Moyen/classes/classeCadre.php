<?php
require_once "classeEmploye.php";

class Cadre extends Employe {
    private $listeEmploye;

    public function __construct(string $prenom,string $nom, string $num,float $salaire,string $job, array $liste)
    {
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->numSecu=$num;
        $this->salaire=$salaire;
        $this->job=$job;
        $this->listeEmploye=$liste;
    }

    public function getList(){return $this->listeEmploye;}
    public function setList($liste){return $this->listeEmploye=$liste;}

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

   public function manage(){
        $phrase=$this->prenom." ".$this->nom." manage : ";
        foreach($this->listeEmploye as $employe){
            $phrase.=$employe." - ";
        }
        return substr($phrase,0,-2) ;
    }

   public function augmenteUnSalarie($emp,int $pourcentage){
        return "<br>Il augmentera ".$emp->getNom()." de $pourcentage% passant de ".$emp->getSalaire()." à ".round($emp->getSalaire()+
        ($emp->getSalaire()*($pourcentage/100)),2);
   }

    
}


?>