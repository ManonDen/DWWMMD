<?php ob_start();
require "Fonctions.php";
class Ville{
   public $nom;
   public $departement;

   public function __construct($nom,$dep)
   {
    $this->nom=$nom;
    $this->departement=$dep;
   }

   public function affiche(){
    echo "La ville $this->nom est département $this->departement <br>";
   }
}
    $ville1= new Ville("Dunkerque", 59);
    $ville2 = new Ville("Calais",62);
    $ville3 = new Ville("Paris", 75);
    $villes = [$ville1, $ville2, $ville3];
?>
<h2>Tableaux associatifs avec POO : ville et département</h2>
<p><?php foreach($villes as $value){
    $value->affiche();
} ?></p>

<?php
$titre = "Exercices Moyen";
$content = ob_get_clean();
require "../../Global/general/template.php";
?>