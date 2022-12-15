<?php
class VilleIF implements IFormatage{
    private $cp;
    private $ville;

    public function __construct($cp,$ville)
    {
        $this->cp=$this->formatageChaine($cp);
        $this->ville=$this->formatageChaine($ville);
    }

    public function getCp(){return $this->cp;}
    public function getVille(){return $this->ville;}

    public function setCp($cp){$this->cp=$cp;}
    public function setVille($ville){$this->ville=$ville;}

    public function formatageChaine($chaine)
    {
        return strtoupper($chaine);
    }

    public function formatageNombre($nombre)
    {
        return number_format($nombre,2,","," ");
    }

    public function formatageDate($date)
    {
        $conversion = strtotime($date);
        return date('d/M/Y',$conversion);
    }

    public function formatageDate2($date)
    {
        $conversion = strtotime($date);
        return date('d-M-Y',$conversion);
    }
}

?>