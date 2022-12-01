<?php ob_start();
require "classes/classeperso.php";
require "classes/classearme.php";
?>
<?php

// Données armes
$arme1 = new Armes();
$arme1->setdegat(100);
$arme1->setnom("Kung-Fu");

$arme2 = new Armes();
$arme2->setdegat(40);
$arme2->setnom("Banane");

$arme3 = new Armes();
$arme3->setdegat(10);
$arme3->setnom("Doudou");

$armes = [$arme1, $arme2, $arme3];


// Données persos
$perso1 = new Personnages();
$perso1->setnom("Nadou");
$perso1->setforce(10);
$perso1->setpv(100);
$perso1->setidarme($arme3->getidentifiant());

$perso2 = new Personnages();
$perso2->setnom("Stuart");
$perso2->setforce(50);
$perso2->setpv("6k");
$perso2->setidarme($arme2->getidentifiant());

$perso3 = new Personnages();
$perso3->setnom("Bob");
$perso3->setforce(20);
$perso3->setpv("1k");
$perso3->setidarme($arme3->getidentifiant());

$perso4 = new Personnages();
$perso4->setnom("Kevin");
$perso4->setforce(80);
$perso4->setpv("8k");
$perso4->setidarme($arme1->getidentifiant());

$persos = [$perso1, $perso2, $perso3, $perso4];
?>

<!-- Affichage -->
<h2>Voici les personnages et armes</h2>
<div class="d-flex flex-wrap justify-content-evenly my-5">
    <!-- Parcours personnages -->
    <?php foreach ($persos as $per) { ?>
        <!-- Cards -->
        <div class="card" style="width: 18rem;">
            <img src="Images/<?= $per->getnom() ?>.jpg" style="height:300px">
            <div class="row mx-1 mb-3">
                <!-- Affiche les données de chaque perso -->
                <div class=" col">
                    <h4 class="card-title"><?= $per->getNom() ?></h4>
                    <p class="card-text">Force : <?= $per->getforce() ?>/100</p>
                    <p class="card-text">Pv : <?= $per->getpv() ?>/1M</p>
                </div>
                <?php
                // Si l'identifiant de l'arme du perso est = à celle de l'arme. Alors, on affiche l'arme trouvée.
                foreach ($armes as $value) :
                    if ($per->getidarme() == $value->getidentifiant()) : ?>
                        <div class=" col">
                            <h4 class="card-title">Arme N° <?= $value->getidentifiant() ?></h4>
                            <p class="card-text">Arme : <?= $value->getnom() ?></p>
                            <p class="card-text">Dégât : <?= $value->getdegat() ?>/100</p>
                        </div>
                <?php endif;
                endforeach; ?>
            </div>
        </div>
    <?php } ?>
</div>


<?php $content = ob_get_clean();
$titre = "Exercice Moyen";
require "../../Global/general/template.php";
?>