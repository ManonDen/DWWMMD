<?php
class TriangleRectangle{
    protected $base;
    protected $hauteur;

    public function __construct($base,$hauteur){
        $this->base=$base;
        $this->hauteur=$hauteur;
    }

    public function getBase(){return $this->base;}
    public function setBase($base){$this->base=$base;}

    public function getHauteur(){return $this->hauteur;}
    public function setHauteur($hauteur){$this->hauteur=$hauteur;}

    public function Perimetre(){
        $x=($this->base*$this->base)+($this->hauteur*$this->hauteur);
        return round($this->base+$this->hauteur+sqrt($x),2);
    }

    public function Aire(){
        return ($this->base * $this->hauteur)/2;
    }

    public function AfficherTriangle($infosTriangleRec){
        echo "- Base : ".$this->base."\n- Hauteur : ".$this->hauteur."\n- Périmètre : ".$infosTriangleRec->Perimetre()."\n- Aire : "
        .$infosTriangleRec->Aire();
    }
}

?>