<?php ob_start();
require "Fonctions.php";
class Voiture
{
    private $marque;
    private $model;
    private $couleur;
    private $nbporte;
    private $electrique;

    public function __construct($mark, $model, $color, $nbporte, $elect)
    {
        $this->marque = $mark;
        $this->model = $model;
        $this->couleur = $color;
        $this->nbporte = $nbporte;
        $this->electrique = $elect;
    }

    public function getMarque()
    {
        return $this->marque;
    }
    public function setMarque($mark)
    {
        $this->marque = $mark;
    }

    public function getModel()
    {
        return $this->model;
    }
    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }
    public function setCouleur($color)
    {
        $this->couleur = $color;
    }

    public function getnbporte()
    {
        return $this->nbporte;
    }
    public function setnbporte($nbporte)
    {
        $this->couleur = $nbporte;
    }

    public function getElectrique()
    {
        return $this->electrique;
    }
    public function setElectrique($elect)
    {
        $this->electrique = $elect;
    }
}
$voiture1 = new Voiture("Renault", "Clio", "bleu", 3, false);
$voiture2 = new Voiture("Peugeot", "206", "blanche", 5, false);
$voiture3 = new Voiture("Citroën", "C1", "grise", 5, false);
$voiture4 = new Voiture("Peugeot", "2008", "rouge", 5, true);
$voitures = [$voiture1, $voiture2, $voiture3, $voiture4]; ?>
<h2>Tableaux associatifs avec POO : voiture</h2>


<form action="Exercice8.php" method="post" class="row bg-light border border-dark p-3 text-center m-auto my-5 ">
    <div  class="col">
        <p class="fw-bolder fs-4">Voitures : </p>
        <?php foreach ($voitures as $voiture) {
            afficheVoiture($voiture);
        } ?>
    </div>

    <div  class="col">
        <div class="row">
            <p class="fw-bolder fs-4 col">Marques : </p>
            <!-- menu deroulant -->
            <div class="btn-group my-2 col">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Choisir</button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <!-- retire doublon des marques-->
                    <?php $marques = VoitureMarque($voitures);
                    // Parcours toutes les marques de voiture sans doublons
                    foreach ($marques as $marque) : ?>
                        <li><button class="dropdown-item" type="submit" name="<?= $marque ?>"><?= $marque ?></button></li>

                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <!-- Affichage de ce que l'utilisateur à selectionner dans le menu déroulant -->
        <p class="my-5"><?php
            foreach ($voitures as $voiture) {
                if (isset($_POST[$voiture->getMarque()])) {
                    afficheVoiture($voiture);
                }
            } ?>
        </p>
    </div>

   
</form>

<?php
$titre = "Exercice Moyen";
$content = ob_get_clean();
require "../../Global/general/template.php";
?>