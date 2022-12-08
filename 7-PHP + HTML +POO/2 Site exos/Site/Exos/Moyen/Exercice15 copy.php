<?php ob_start();
require "./classes/classeProduit.php";
require "./classes/classeLigneCommande.php";
require "./classes/classeClient.php";
require "./classes/classeCommande.php"; ?>

<h3>Exo Commande</h3>
<?php $client1 = new Client("Neymar", "Jean", 1);

$chocolat = new Produit("chocolat", "Le chocolat se mange pour le plaisir sans fin.", "ch", 3.99);
$lait = new Produit("lait", "Le lait provient des vaches. Nous sommes donc des veaux.", "la", 1.5);
$eau = new Produit("eau", "L'eau permet de s'hydrater et n'a pas pour but de faire plaisir.", "ea", 0.25);
$telephone = new Produit("telephone", "Le téléphone sert à tout (sauf aux besoins vitaux).", "te", 255.99);
$pc = new Produit("pc", "Le pc sert à tout. (sauf aux besoins vitaux)", "pc", 800.55);
$livre = new Produit("livre", "Le livre sert à se cultiver l'esprit.(si on sait le lire dans le bon sens)", "li", 5.55);
$steak = new Produit("steak", "Le steak sert à nourrir notre force.", "st", 8.55);
$pate = new Produit("pate", "Les pâtes sert à se nourrir avec des plâts trop bon.", "pa", 0.20);
$riz = new Produit("riz", "Le riz sert à nourir les asiatiques.", "ri", 0.5);
$banane = new Produit("banane", "La banane sert à nourrir les singes et les grands singes.", "ba", 0.74);
$produits = [$chocolat, $lait, $eau, $telephone, $pc, $livre, $steak, $pate, $riz, $banane];

$commande1=new LigneCommande(6);


// $commande->setProduit($banane->getLibelle());
// $commande2->setProduit($livre->getLibelle());

?>
<form action="" method="$_POST">
    <h4 class="text-center">Produits :</h4>
    <?php foreach ($produits as $produit) : ?>

        <div class="row">
            <p class="col-7"><?= $produit->afficherSesinfos() ?></p>
            <div class="col" >
                <input style="height:30px" class="col m-5" type="number" name=<?= $produit->getLibelle() ?> value=0  >
                <button type="submit" name=<?= $produit->getLibelle() ?>> Selectionner </button>
            </div>    
        </div>

    <?php endforeach; ?>

    <p>
    <?php
        var_dump($_POST[$produit->getLibelle() ]);
        foreach($produits as $produit):
            if (isset($_POST[$produit->getLibelle() ])){
                echo("545");
                echo $_POST[$produit->getLibelle()];
            } 
        endforeach;?>
    </p>

    <button name="paye">Payer</button>
</form>

<?php $titre = "Exercice Moyen";
$content = ob_get_clean();
require "../../Global/general/template.php" ?>