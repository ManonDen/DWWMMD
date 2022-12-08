<?php ob_start();
require "Fonctions.php";
class Animaux
{

    private $nom;
    private $age;
    private $type;

    public function __construct($name, $age, $type)
    {   $this->nom = $name;
        $this->age = $age;
        $this->type = $type;}

    public function getnom(){ return $this->nom;}
    public function setnom($name){  $this->nom=$name;}

    public function getage(){  return $this->age;}
    public function setage($age){  $this->age=$age;}

    public function gettype(){  return $this->type;}
    public function settype($type){  $this->type=$type;}
}


$Animal1 = new Animaux("Blue", 3, false);
$Animal2 = new Animaux("Lizou", 5, true);
$Animal3 = new Animaux("Toby", 15, true);
$Animaux = [$Animal1, $Animal2, $Animal3];

?>

<?php
function afficheAnimaux($rechercheType, $key,$animal)
    {   echo ($key == "an" ? "<br>Nom : ".$animal->getnom()."<br> Age : ".$animal->getage()."<br> Type : ".type($animal->gettype())."<br>-------------------<br>"
        : $animal->gettype() == $rechercheType) 
        ? "<br>Nom : ".$animal->getnom()."<br> Age : ".$animal->getage()."<br> Type : ".type($animal->gettype())."<br>-------------------<br>" 
        :" " ;}
?>
<h2>Tableaux associatifs avec POO : Chien et Chat</h2>

<form action="" method="get" style="width:1000px" class="m-auto my-5 position-relative border border-dark bg-light">
    <div class="mt-2 py-2 justify-content-evenly d-flex flex-row form-group ">
        <!-- Tableau avec plusieurs tableaux asso -->
        <?php $tab = array("an" => ["Tous les animaux", true or false], "chi" => ["Seulement les chiens", true], "cha" => ["Seulement les chats", false]) ?>
        
        <!-- Parcours tableau -->
        <?php foreach ($tab as $key => $value) : ?>
            <div class="col-3 text-center">
                <!-- Cree bouton -->
                <input type="submit" name="<?= $key ?>" value="<?= $value[0] ?>">

                <?php
                if (isset($_GET["$key"])) {
                    // Parcours tous les animaux
                    foreach ($Animaux as $animal) {
                        afficheAnimaux($value[1], $key,$animal);
                    }
                }
                ?>
            </div>
        <?php endforeach;

        ?>
    </div>
</form>
<?php
$titre = "Exercices Moyen";
$content = ob_get_clean();
require "../../Global/general/template.php";
?>