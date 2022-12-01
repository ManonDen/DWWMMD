<?php ob_start();
require "classeperso.php";
require "classearme.php";
?>
<?php 
$arme1=new Armes(100,"Kung-Fu");
$arme2=new Armes(40,"Banane");
$arme3=new Armes(10,"Doudou");
$armes=[$arme1,$arme2,$arme3];


$perso1=new Armes();
$arme1->setnom("kevin");
$arme1->setforce(100);
$arme1->setpv(8000);


$perso1=new Personnages();
$perso1->setnom("kevin");
$perso1->setforce(80);
$perso1->setpv(8000);
$perso1->setidarme($arme1->getidentifiant());

$perso2=new Personnages();
$perso2->setnom("Stuart");
$perso2->setforce(50);
$perso2->setpv(6000);
$perso2->setidarme($arme2->getidentifiant());


$perso3=new Personnages();
$perso3->setnom("Bob");
$perso3->setforce(20);
$perso3->setpv(1000);
$perso3->setidarme($arme3->getidentifiant());

$perso4=new Personnages();
$perso4->setnom("Fifille");
$perso4->setforce(10);
$perso4->setpv(100);
$perso4->setidarme($arme3->getidentifiant());

$persos=[$perso1,$perso2,$perso3,$perso4];

?>


<?php $tab=["kevin.jpg","Stuart.jpg","Bob.png","Fille.jpg"] ?>

<h2>Voici les personnage et arme</h2>
<div class="d-flex flex-wrap justify-content-evenly my-5">
    <?php for($i=0;$i<count($tab);$i++) { ?>
        <div class="card" style="width: 18rem;">
            <img src="Images/<?= $tab[$i]?>" style="height:300px">
            <div class="row mx-1">
                <div  class=" col">
                    <h4 class="card-title"><?= $persos[$i]->getNom() ?></h4>
                    <p class="card-text">PV : <?= $persos[$i]->getforce() ?>/100</p>
                    <p class="card-text"> <?= $persos[$i]->getpv() ?>/10 000</p>
                </div>
                <?php 
                foreach($armes as $value):
                if($persos[$i]->getidarme()== $value->getidentifiant() ): ?>
                    <div  class=" col">
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