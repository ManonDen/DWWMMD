<?php
class Cercle{
    protected $diametre;

    public function __construct($diametre){
        $this->diametre=$diametre;
    }

    public function getDiametre(){return $this->diametre;}
    public function setDiametre($diametre){$this->diametre=$diametre;}

    public function Perimetre(){
        return 2*($this->diametre/2)*pi();}

    public function Aire(){
        return pi()*(($this->diametre/2)*($this->diametre/2));}

    public function AfficherCercle($infocercle){
        echo "\n- Diamètre : ".$this->diametre."\n- Périmètre : ".round($infocercle->Perimetre(),2)."\n- Aire : ".round($infocercle->Aire(),2);
    }
}
?>