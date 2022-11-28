<?php ob_start();
require "Fonctions.php";
class Animaux
{

    public $nom;
    public $age;
    public $type;

    public function __construct($name, $age, $type)
    {
        $this->nom = $name;
        $this->age = $age;
        $this->type = $type;
    }
    public function affiche($value,$key){   
        if ($key=="an"){
            echo"<br>Nom : $this->nom <br>Age : $this->age <br> Type : " . type($this->type) . " <br>-------------------<br>";
        }
        elseif($this->type==$value){
            echo"<br>Nom : $this->nom <br>Age : $this->age <br> Type : " . type($this->type) . " <br>-------------------<br>";
        }
    }
}

$Animal1 = new Animaux("Blue", 3, false);
$Animal2 = new Animaux("Lizou", 5, true);
$Animal3 = new Animaux("Toby", 15, true);
$Animaux = [$Animal1, $Animal2, $Animal3];

?>
<h2>Tableaux associatifs avec POO : Chien et Chat</h2>

<form action="" method="get" style="width:1000px" class="m-auto my-5 position-relative border border-dark bg-light">
    <div class="mt-2 py-2 justify-content-evenly d-flex flex-row form-group ">

        <?php $tab = array("an" => ["Tous les animaux",true or false], "chi" => ["Seulement les chiens", true], "cha" => ["Seulement les chats", false]) ?>

        <?php foreach ($tab as $key => $value) : ?>
            <div class="col-3 text-center">
                <input type="submit" name="<?= $key ?>" value="<?= $value[0] ?>">
            
            <?php
                if (isset($_GET["$key"])) {
                    
                    foreach ($Animaux as $animal) {
                        $animal->affiche($value[1],$key);
                    }
                }
            
            ?>
            </div>
        <?php endforeach;

        ?>
    </div>

</form>
<div class="text-center">

</div>
<?php
$titre = "Exercices Moyen";
$content = ob_get_clean();
require "../../Global/general/template.php";
?>