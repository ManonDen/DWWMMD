<?php
ob_start();
?>
<h2>Test:</h2>
<?php
    class Personnage{
        private static $personnages = [];
        private $nom;
        private $taille;
        private $age;
        // public $vitesse;
        private $sexe; 

        const HOMME = true;
        const FEMME = false;

        public function __construct($name, $taille, $age,$sexe){
            $this->nom = $name;
            $this->taille = $taille;
            $this->age = $age;
            $this->sexe = $sexe;
            // Recup tous les objets des attributs
            self::$personnages[] = $this;
        }

        public function presentation(){
            // print_r(Personnage::getListPersonnage());
            echo "<b>Nom : </b>" . $this->nom . "<br/>";
            echo "<b>Taille : </b>" . $this->taille . "<br/>";
            echo "<b>Age : </b>" . $this->age . "<br/>";
            echo "<b>Sexe : </b>  " ;
            if($this->sexe){
                echo "Homme <br/>";
            }else{
                echo "Femme <br/>";
            }
        }
        // Evite de mettre plein de get et set pour chaque attribut
        public static function getListPersonnage(){
            return self::$personnages;
        }
       
    }

    //On va dire que la personnage 1 est une instance de la Personnage

$personnage1 = new Personnage("Mario",165,31,Personnage::HOMME);
$personnage2 = new Personnage("Luigi",165,35,Personnage::HOMME);
$personnage3 = new Personnage("Peach",160,30,Personnage::FEMME);

// Permet d'éviter de faire : $recupPersonnages=[$personnage1,$personnage2,$personnage3] (c'est la même)
$recupPersonnages = Personnage::getListPersonnage();

foreach($recupPersonnages as $value){
    $value->presentation();
    echo "<br/>------------------------------------<br/>";
}


$titre = "Exercice Moyen";
$content = ob_get_clean();
require "../../Global/general/template.php";
