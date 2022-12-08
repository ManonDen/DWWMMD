<?php
require "./classes/classeProduit.php";
require "./classes/classeLigneCommande.php";
require "./classes/classeClient.php";
require "./classes/classeCommande.php";

$client1 = new Client("Neymar", "Jean", 1);
$client2= new Client("Pavaday","kesary",2);
$client3= new Client("Nezgard","Renne",3);
$clients=[$client1,$client2,$client3];

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

$p=readline("Quel est votre prénom : ");
$n=readline("Quel est votre nom : ");
$bool=false;
foreach($clients as $client){
    // Si le client est déjà dans la base de données
    if($p==$client->getPrenom() and $n==$client->getNom()){
        $bool=true;
    }
}
// Si le client n'est pas encore dans la base de données
$x=count($clients);
if ($bool==false){
    $clients[$x]=new client($n,$p,$x);
}

echo"\n";
$Lignescommandes=[];
$ListCommandes=[];
for($i=0;$i<count($produits);$i++){
    // Affiche infos produits
    $produits[$i]->afficherSesinfos();
    // Demande ste utilisateur
    $qte=readline("Quantite : ");
    // si qte est differente de 0
    // jajoute des lignes de la commande du client
    $Lignescommandes[$i]=new LigneCommande($produits[$i]->getLibelle(),$qte);
    // Calcul TTC par produit
    $produitttc=$Lignescommandes[$i]->calculTotalLigneTTC($produits[$i]);
    // J'ajoute les lignes de commandes à la liste de commande
    $ListCommandes[$i]=$produitttc;
    echo"\n-----------------------------------------------------\n\n";
}

$commandes=[];
$x=count($commandes);
if (count($ListCommandes)!=0){
    $commandes[$x]= new Commande($x,$n,$ListCommandes);
}
// Affichage toutes les lignes de commandes
echo "\t\tDevis\n";
for($i=0;$i<count($produits);$i++){
    $Lignescommandes[$i]->affichage($ListCommandes[$i],$produits[$i]);
}

// Affichage total
// $commandes->calculTotalTTC();

?>