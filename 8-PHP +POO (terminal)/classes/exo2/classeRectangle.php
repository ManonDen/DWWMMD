<?php 

class Rectangle{
    protected $longueur;
    protected $largeur;

    public function __construct(int $longueur,int $largeur){
        $this->longueur=$longueur;
        $this->largeur=$largeur;
    }

    public function getLongueur(){return $this->longueur;}
    public function setLongueur($longueur){$this->longueur=$longueur;}

    public function getLargeur(){return $this->largeur;}
    public function setLargeur($largeur){$this->largeur=$largeur;}

    public function Perimetre(){
        return ($this->largeur+$this->longueur)*2;}
    
    public function Aire(){
        return $this->largeur*$this->longueur;}
    
    public function EstCarre(){
        return $this->largeur==$this->longueur ? true: false;
    }

    public function AfficherRectangle($infosRectangle){
        echo $infosRectangle->EstCarre() ? "- Longueur : ".$infosRectangle->getLongueur()."\n- Largeur : ".$infosRectangle->getLargeur().
        "\n- Périmètre : ".$infosRectangle->Perimetre() . "\n- Aire : ". $infosRectangle->Aire()."\n- Il s'agit d'un carré." :
        "- Longueur : ".$infosRectangle->getLongueur()."\n- Largeur : ".$infosRectangle->getLargeur()."\n- Périmètre : ".$infosRectangle->Perimetre() .
         "\n- Aire : ". $infosRectangle->Aire()."\n- Il ne s'agit pas d'un carré." ;
    }
}
?>