<?php
class Produit{
    private $libelle;
    private $description;
    private $reference;
    private $prixUnitaire;

    public function __construct(string $libelle,string $description,string $reference,float $prixUnitaire){
        $this->libelle=$libelle;
        $this->description=$description;
        $this->reference=$reference;
        $this->prixUnitaire=$prixUnitaire;
    }
    
    public function getLibelle(){return $this->libelle;}
    public function setLibelle($libelle){$this->libelle=$libelle;}

    public function getDescription(){return $this->description;}
    public function setDescription($description){$this->description=$description;}

    public function getReference(){return $this->reference;}
    public function setReference($reference){$this->reference=$reference;}

    public function getPrixUnitaire(){return $this->prixUnitaire;}
    public function setPrixUnitaire($prixUnitaire){$this->prixUnitaire=$prixUnitaire;}

    public function afficherSesinfos(){
        echo "Libelle : ".$this->libelle."\nDescription : ".$this->description."\nReference : ".$this->reference."\nPrix Unitaire : ". $this->prixUnitaire."\n";
    }
}
?>