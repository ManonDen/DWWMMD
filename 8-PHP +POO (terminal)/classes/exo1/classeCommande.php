<?php
class Commande{
    private $numeroCommande;
    private $client;
    private $listeligne;

    public function __construct(string $numeroCommande,string $client,array $listeligne){
        $this->numeroCommande=$numeroCommande;
        $this->client=$client;
        $this->listeligne=$listeligne;
    }
    
    public function getnumeroCommande(){return $this->numeroCommande;}
    public function setnumeroCommande($numeroCommande){$this->numeroCommande=$numeroCommande;}

    public function getClient(){return $this->client;}
    public function setClient($client){$this->client=$client;}

    public function getListeLigne(){return $this->listeligne;}
    public function setListeLigne($listeligne){$this->listeligne=$listeligne;}

    public function calculTotalTTC(){
        return array_sum($this->listeligne) ;
    }

    public function affichageCommande($prixtotal){
        echo "Prix Total : ".$prixtotal;
    }
}
?>