<?php

class Maisonss
{
    private static $identifiant = 1;
    private $id;
    private $date;
    private $nbCH;
    private $surface;


    public function __construct($date, $nbCH, $surface)
    {
        $stock=Maisonss::$identifiant++;
        $this->id=$stock;

        $this->date = $date;
        $this->nbCH = $nbCH;
        $this->surface = $surface;

    }

    public function getid()
    {
        return $this->id;
    }

    public function getdate()
    {
        return $this->date;
    }
    public function getchambre()
    {
        return $this->nbCH;
    }
    public function getsurface()
    {
        return $this->surface;
    }
}
$maison1 = new Maisonss(1940, 3, 20);
$maison2 = new Maisonss(1941, 2, 150);
$maison3 = new Maisonss(1942, 1, 300);
$maisons = [$maison1,$maison2,$maison3];
?>
