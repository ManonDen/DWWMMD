<?php

class Joueurs {
    private static $tousjoueurs =[];
    private string $nomjoueur;
    private $id;
    private int $note;
    private string $poste;
    private $stat1;
    private $stat2;
    private $stat3;
    private $stat4;
    private $stat5;
    private $stat6;

    public function __construct($nomJoueur,$note,$poste,$stat1,$stat2,$stat3,$stat4,$stat5,$stat6)
    {
        $this->nomjoueur = $nomJoueur;
        $this->note = $note;
        $this->poste = $poste;
        $this->stat1 = $stat1;
        $this->stat2 = $stat2;
        $this->stat3 = $stat3;
        $this->stat4 = $stat4;
        $this->stat5 = $stat5;
        $this->stat6 = $stat6;
        $this->id;
        self::$tousjoueurs[] = $this;
    }
    public function getNomJoueur(){return $this->nomjoueur;}
    public function setNomJoueur($nomJoueur){ $this->nomjoueur=$nomJoueur;}

    public function getnote(){return $this->note;}
    public function setnote($note){ $this->note=$note;}

    public function getPoste(){return $this->poste;}
    public function setPoste($poste){$this->poste=$poste;}

    public function getStat1(){return $this->stat1;}
    public function setStat1($stat1){ $this->stat1=$stat1;}

    public function getStat2(){return $this->stat2;}
    public function setStat2($stat2){ $this->stat2=$stat2;}

    public function getStat3(){return $this->stat3;}
    public function setStat3($stat3){ $this->stat3=$stat3;}

    public function getStat4(){return $this->stat4;}
    public function setStat4($stat4){ $this->stat4=$stat4;}

    public function getStat5(){return $this->stat5;}
    public function setStat5($stat5){ $this->stat5=$stat5;}

    public function getStat6(){return $this->stat6;}
    public function setStat6($stat6){ $this->stat6=$stat6;}

    public function getid(){return $this->id;}
    public function setid($id){ $this->id=$id;}

    public static function getEquipe(){return self::$tousjoueurs;}
}

$joueur1 = new Joueurs("James Pantemis" , 99 ,"G" ,"99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur2 = new Joueurs("Borjan Milan " , 99 ,"G" ,"99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur3 = new Joueurs("Jonathan David" , 99 ,"BU" ,"99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur4 = new Joueurs("Sam Adekugbe" , 99 ,"DC" ,"99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur5 = new Joueurs("Derek Cornelius" , 99 ,"DC" ,"99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur6 = new Joueurs("Alphonso Davies" , 99 ,"DC" ,"99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur7 = new Joueurs("Richie Laryea" , 99 ,"DC" ,"99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur8 = new Joueurs("Tajon Buchanan" , 99 ,"MC" ,"99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur9 = new Joueurs("Stephen Eustaquio" , 99 ,"MC" ,"99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur10 = new Joueurs("Liam Fraser" , 99 ,"MC" ,"99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur11 = new Joueurs("Atiba Hutchinson" , 99 ,"MC" ,"99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur12 = new Joueurs("Lucas Cavallini" , 99 ,"BU" ,"99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur13 = new Joueurs("Junior Hoilett" , 99 ,"BU" ,"99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur14 = new Joueurs("Larin Cyle " , 99 ,"BU" ,"99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur15 = new Joueurs("Ismael Kone" , 99 ,"MC" ,"99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");

$joueur16 = new Joueurs("Bruce Lee",99,"DICT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur17 = new Joueurs("Jackie Chan",99,"DICT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur18 = new Joueurs("Jet Lee",99,"DICT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur19 = new Joueurs("Kagawa",99,"DICT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur20 = new Joueurs("Xi Jinping",99,"DICT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur21 = new Joueurs("Li Na",99,"DICT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur22 = new Joueurs("Donnie Yen",99,"DICT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur23 = new Joueurs("Huang Xiaoming",99,"DICT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur24 = new Joueurs("Jiang Wen",99,"DICT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur25 = new Joueurs("Kris Wu",99,"DICT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur26 = new Joueurs("Zhang Yimou",99,"DICT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur27 = new Joueurs("Liu Shishi",99,"DICT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur28 = new Joueurs("Yao Ming",99,"DICT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur29 = new Joueurs("Li Na",99,"DICT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur30 = new Joueurs("Lu Han",99,"DICT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");

$joueur31 = new Joueurs("Park Jimin", 99, "K-POP","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur32 = new Joueurs("Yo Jungyeon", 99, "K-POP","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur33 = new Joueurs("Jeon Soyeon", 99, "K-POP","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur34 = new Joueurs("Lee Jooheon", 99, "K-POP","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur35 = new Joueurs("Oh Sehun", 99, "K-POP","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur36 = new Joueurs("Lee Yubin", 99, "K-POP","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur37 = new Joueurs("Kim Namjoon", 99, "K-POP","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur38 = new Joueurs("Jeon Jiwoo", 99, "K-POP","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur39 = new Joueurs("Do Kyungsoo", 99, "K-POP","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur40 = new Joueurs("Moon Byul", 99, "K-POP","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur41 = new Joueurs("Seo Changbin", 99, "K-POP","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur42 = new Joueurs("Bang Christopher", 99, "K-POP","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur43 = new Joueurs("Dong Youngbae", 99, "K-POP","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur44 = new Joueurs("Jung Wooyoung", 99, "K-POP","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur45 = new Joueurs("Jeon Jungkook", 99, "K-POP","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");

$joueur46 = new Joueurs("Kitano Ken",99,"GOAT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur47 = new Joueurs("Livai Ackerman",99,"GOAT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur48 = new Joueurs("Guts",99,"GOAT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur49 = new Joueurs("Shinichi Izumi",99,"GOAT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur50 = new Joueurs("Monkey D. Luffy",99,"GOAT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur51 = new Joueurs("Naruto Uzumaki",99,"GOAT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur52 = new Joueurs("Son Goku",99,"GOAT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur53 = new Joueurs("Roronoa Zoro",99,"GOAT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur54 = new Joueurs("Gon Freecss",99,"GOAT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur55 = new Joueurs("Natsu Dragnir",99,"GOAT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur56 = new Joueurs("Ichigo Kurosaki",99,"GOAT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur57 = new Joueurs("Sasuke Uchiwa",99,"GOAT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur58 = new Joueurs("Oozora Tsubasa",99,"GOAT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur59 = new Joueurs("Izuku Midoriya",99,"GOAT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");
$joueur60 = new Joueurs("Hisoka Morow",99,"GOAT","99 PAC","99 DRI","99 SHO","99 DEF","99 PAS","99 PHY");


$joueurs=Joueurs::getEquipe();



 

?>

