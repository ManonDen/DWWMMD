<?php

class LigneCommande{
    private $produit;
    private $qte;

    public function __construct(string $produit,int $qte){
        $this->produit=$produit;
        $this->qte=$qte;
    }
    public function getProduit(){return $this->produit;}
    public function setProduit($produit){$this->produit=$produit;}

    public function getQte(){return $this->qte;}
    public function setQte($qte){$this->qte=$qte;}

    public function calculTotalLigneTTC($produit){
        $TVA=20/100;
        return round(($produit->getprixUnitaire()*$this->getQte()*(1+$TVA)),2);
    }

    public function affichage($prixttc,$produit){
        echo "| Libellé : ". $this->produit." Référence : ".$produit->getreference()." Prix TTC : ".$prixttc."\n";
    }
}
?>