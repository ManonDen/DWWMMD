<?php
ob_start();
require "Fonctions.php";
class Livre{
    private $edition;
    private $auteur;
    private $nom;
    private $date;

    public function __construct($edition, $auteur, $nom, $date)
    {
        $this->edition = $edition;
        $this->auteur = $auteur;
        $this->nom = $nom;
        $this->date = $date;
    }

    public function getedition(){return $this->edition;}
    public function setedition($edition){$this->edition = $edition;}

    public function getnom(){return $this->nom;}
    public function setnom($nom){$this->nom = $nom;}

    public function getauteur(){return $this->auteur;}
    public function setauteur($auteur){$this->auteur = $auteur;}

    public function getdate(){return $this->date;}
    public function setdate($date){$this->date = $date;}
    
    public function __toString(){
        return"<br>Edition : " . $this->edition . "<br>Auteur : " . $this->auteur . "<br>Nom : " . $this->nom . "<br>Date de parution : " . $this->date . "<br>";
    }
}

$livre1 = new Livre("Galmard", "Victor Hugo", "Les misérables", 1850);
$livre2 = new Livre("Galmard", "Victor Hugo", "Pauca mea", 1886);
$livre3 = new Livre("Bayard", "Nadia Benyamina", "Coder facilement", 1850);
$livres = [$livre1, $livre2, $livre3];
// trie sur edition
sort($livres);
?>

<h2>Méthode magique</h2>

<form action="Exercice11.php" method="post">
    <div style="width:350px" class="row">
        <p class="col  mt-2 fs-5">Filtre :</p>
        <!-- menu deroulant edition -->
        <div class="btn-group my-2 col">
            <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Edition</button>
            <ul class="dropdown-menu dropdown-menu-end">
            <li><button class="dropdown-item" type="submit" name="tous">tous</li>
                <!-- retire doublon des editions-->
                <?php $editions = sdoublonse($livres);
                foreach ($editions as $edition) : ?>
                    <li><button class="dropdown-item" type="submit" name="<?= $edition?>"><?= $edition ?></button></li>

                <?php endforeach; ?>
            </ul>
        </div>
        <!-- menu deroulant date -->
        <div class="btn-group my-2 col">
            <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Date de parution</button>
            <ul class="dropdown-menu dropdown-menu-end">
            <li><button class="dropdown-item" type="submit" name="tous">tous</li>
                <!-- retire doublon des dates-->
                <?php $dates = sdoublonsd($livres);
                foreach ($dates as $date) : ?>
               
                    <li><button class="dropdown-item" type="submit" name=" <?= $date?>"><?= $date ?> </button></li>

                <?php endforeach; ?>
            </ul>
        </div>
    </div>
        <!-- Affichage de ce que l'utilisateur à selectionner dans le menu déroulant -->
    <p><?php
        for($i=0;$i<count($livres);$i++) {
            echo (isset($_POST[$livres[$i]->getedition()])?"<br>Livre : ".($i+1). $livres[$i]:
            isset($_POST[$livres[$i]->getdate()]))?"<br>Livre : ".($i+1). $livres[$i]:"";
            
            echo isset($_POST["tous"])?"<br>Livre : ".($i+1). $livres[$i]:"";
        }
    ?></p>

</form>

<?php
$titre = "Exercice Moyen";
$content = ob_get_clean();
require "../../Global/general/template.php";
?>