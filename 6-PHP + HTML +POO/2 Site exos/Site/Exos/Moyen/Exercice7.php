<?php ob_start();
require "Fonctions.php";
class Employe{
    public $nom;
    public $prenom;
    public $adress;
    public $ville;
    public $numero;

    public function __construct($n,$p,$a,$v,$num)
    {
        $this->nom=$n;
        $this->prenom=$p;
        $this->adress=$a;
        $this->ville=$v;
        $this->numero=$num;
    }

}
    $em1= new Employe("Denolf","Manon","6 rue bonduelle,59153","gfp","06-95-75...");
    $em2= new Employe("Narix","Theodore","15 rue bonduelle,59153","gfp","06-94-58...");
    $em3= new Employe("Dewolf","Steph","8 rue bonduelle,59153","gfp","06-95-79...");
    $employes = [$em1,$em2,$em3];
    $employes = json_decode(json_encode($employes), true);
    $employes=tri($employes);
?>


<?php
$titre = "Exercices Moyen";
$content = ob_get_clean();
require "../../Global/general/template.php";
?>