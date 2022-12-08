<?php

class Equipe {
    private static $equipe =[];
    private static $id=1;

    private $identifiant;
    private  $pays;
    private  $nbjoueur;

    public function __construct(string $pays,int $nbjoueur)
    {
        $this->identifiant=self::$id++;
        $this->pays = $pays;
        $this->nbjoueur=$nbjoueur;
        self::$equipe[] = $this;
    }
public function getId(){return $this->identifiant;}
public function setId($identifiant){$this->identifiant=$identifiant;}

public function getPays(){return $this->pays;}
public function setPays($pays){$this->pays=$pays;}

public function getnb(){return $this->nbjoueur;}
public function setnb($nbjoueur){$this->nbjoueur=$nbjoueur;}

public static function getEquipe(){return self::$equipe;}

}
$equipe1=new Equipe("Canada",15);
$equipe2=new Equipe("Chine",15);
$equipe3=new Equipe("Coree",15);
$equipe4=new Equipe("Japon",15);

$equipes=Equipe::getEquipe();


   
?>
