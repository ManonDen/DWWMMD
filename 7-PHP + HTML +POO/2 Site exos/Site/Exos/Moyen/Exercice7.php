<?php ob_start();
require "Fonctions.php";
class Employe
{
    public $nom;
    public $prenom;
    public $adresse;
    public $ville;
    public $numero;

    public function __construct($nom, $prenom, $adress, $ville, $num)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adress;
        $this->ville = $ville;
        $this->numero = $num;
    }
}
// données
$em1 = new Employe("Paro", "Scas", "48 rue assiette,59153", "gfp", "06-95-75-20-55");
$em2 = new Employe("Narix", "Theodore", "15 rue duel,59153", "gfp", "07-88-77-88-88");
$em3 = new Employe("Dewolf", "Steph", "8 rue alpinisme,59153", "gfp", "06-95-79-88-88");
$em4 = new Employe("Denolf", "Manon", "6 rue bonduelle,59153", "gfp", "06-95-75-00-00");
$employes = [$em1, $em2, $em3, $em4];


// Passe d'un objet à un dictionnaire
$employes = json_decode(json_encode($employes), true);
// trie de $employes
$columns = array_column($employes, 'nom');
array_multisort($columns, SORT_ASC, $employes);
?>
<h2>Tableaux associatifs avec POO : employé</h2>

<table class="table">
    <!-- en-tête -->
    <thead>
        <tr>
            <th scope="col">id</th>
            <?php
            foreach ($employes as $index) :
                foreach ($index as $key => $value) : ?>
                    <td class="fw-bolder"><?= $key ?></td>
            <?php endforeach;
                break;
            endforeach; ?>
        </tr>
    </thead>
    <!-- données -->
    <tbody>
        <?php
        for($i=0;$i<count($employes);$i++): ?>
            <tr>
                <th scope="row"><?= $i+1; ?></th>
                <?php foreach ($employes[$i] as $key => $value) : ?>
                    <td><?= $value ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>

<?php
$titre = "Exercices Moyen";
$content = ob_get_clean();
require "../../Global/general/template.php";
?>