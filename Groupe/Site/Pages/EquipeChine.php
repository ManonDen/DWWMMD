<?php ob_start();
require "../../Classe/classequipe.php";
require "../../Classe/classJoueur.php";
?>
    <?php
$i=0;
foreach($joueurs as $joueur){
        if ($i < 15) {
            $joueur->setid($equipe1->getid());
            
        } 
        elseif ($i < 30) {
            $joueur->setid($equipe2->getid());
          
        } 
        elseif ($i < 45) {
            $joueur->setid($equipe3->getid());
        } 
        else {
            $joueur->setid($equipe4->getid());
        } 
    $i++;
    
}
$tab=[15,17,21,25,26];
for($x=0;$x<count($tab)-1;$x++){
    ?>
    
<div class="d-flex justify-content-evenly ">
    <?php
    for($i=0;$i<count($joueurs);$i++) {
        if($joueurs[$i]->getid()===2){
            if($i>=$tab[$x] and $i<$tab[$x+1]){
            ?>
                <img style="height:250px "class="" src="../../Image/Joueurs/Chine/<?= $joueurs[$i]->getNomJoueur()?>.png" ><?php
            }
        }
    }
    ?>
</div>
<?php } ?>

<?php $contentPelouse = ob_get_clean();
ob_start();
$titre = "Chine : ";


$tab=[26,30];
for($x=0;$x<count($tab)-1;$x++){
    ?>
<div class="position-absolute top-50 start-50 translate-middle">
    <?php
    for($i=0;$i<count($joueurs);$i++) {
        if($joueurs[$i]->getid()===2){
            if($i>=$tab[$x] and $i<$tab[$x+1]){
            ?>
                <img style="height:250px "class="" src="../../Image/Joueurs/Chine/<?= $joueurs[$i]->getNomJoueur()?>.png" ><?php
            }
        }
    }
    }
    ?>
</div>
<?php 
$contentBanc=ob_get_clean();
require "../Global/Template.php"; ?>