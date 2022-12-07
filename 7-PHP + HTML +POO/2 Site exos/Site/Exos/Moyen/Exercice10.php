<?php ob_start();
require "Fonctions.php";

class Personnage{
    private $nom;
    private $age;
    private $sexe;
    const HOMME=true;
    const FEMME=false;

    public function __construct($nom,$age,$sexe){
        $this->nom=$nom;
        $this->age=$age;
        $this->sexe=$sexe;
    }

    public function getnom(){return $this->nom;}
    public function setnom($nom){$this->nom=$nom;}

    public function getage(){return $this->nom;}
    public function setage($age){$this->age=$age;}

    public function getsexe(){return $this->sexe;}
    public function setsexe($sexe){$this->sexe=$sexe;}
}


$info1=new Personnage("Marie",32,Personnage::FEMME);
$info2=new Personnage("Fifi",32,Personnage::HOMME);
$infos=[$info1,$info2];
?>


<h2>Tableaux associatifs</h2>



<p><?php
foreach($infos as $info){
    echo genre($info);
    }?></p>

<?php
    $titre= "Exercices Moyen";
    $content= ob_get_clean();
    require "../../Global/general/template.php";
?>