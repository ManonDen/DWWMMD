<?php ob_start(); 
class Stagiaire{
    private $nom;
    private $notes;

    public function __construct(string $nom,array $notes){
        $this->nom=$nom;
        $this->notes=$notes;
    }

    public function getNom(){return $this->nom;}
    public function setNom($nom){return $this->nom=$nom;}

    public function getNotes(){return $this->notes;}
    public function setNotes($notes){return $this->notes=$notes;}
    
    public function calculerMoyenne(){
        $moyenne=round(array_sum($this->notes)/count($this->notes),2);
        return $moyenne;
    }
    public function trouverMin(){
        return min($this->notes);
    }
    public function trouverMax(){
        return max($this->notes);
    }
}


$stagiaire1=new Stagiaire("Manon",[12,13,15,15,8,5,5]);
$stagiaire2=new Stagiaire("Nadia",[11,18,19,15,9,10,11]);
$stagiaire3=new Stagiaire("Lucie",[16,18,14,11,5,18,12]);
$stagiaires=[$stagiaire1,$stagiaire2,$stagiaire3];
?>

<div class="row">
    <!-- affichage nom + note -->
    <div><?php
    foreach($stagiaires as $eleve){
        echo "Nom : ". $eleve->getNom()."<br>Notes : " ;
        foreach($eleve->getNotes() as $note){
            echo($note)."-";
        }
        //  affichage statistique
        echo "<br>Moyenne : ".$eleve->calculerMoyenne();
        echo "<br>Min : ".$eleve->trouverMin();
        echo "<br>Max : ".$eleve->trouverMax();
        echo"<br><br>";
    }
    ?></div>
</div> 

<?php $titre="Exercice Moyen";
$content=ob_get_clean();
require "../../Global/general/template.php";
?>