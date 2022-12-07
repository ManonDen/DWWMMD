<?php ob_start();
require "../../Classe/classequipe.php";
require "../../Classe/classJoueur.php";
?>

    <?php
$x=1;
$i=0;
foreach($equipes as $equipe){
    foreach($joueurs as $joueur) {
        if ($i < $equipe->getnb()*$x) {
            $joueur->setid($equipe->getid());
        } 
        $i++;
    }
    $x++;
}
    ?>
<div>

<div class="d-flex justify-content-center">
    <img src="../../Image/Joueurs/Canada/Junior Hoilett.png" alt="" style="height:250px">
    <img src="../../Image/Joueurs/Canada/Jonathan David.png" alt="" style="height:250px">
    <img src="../../Image/Joueurs/Canada/Walid.png" alt="" style="height:250px">
</div>
<div class="d-flex justify-content-center">
    <img src="../../Image/Joueurs/Canada/Ismael Kone.png" alt="" style="height:250px">
    <img src="../../Image/Joueurs/Canada/Stephen Eustaquio.png" alt="" style="height:250px">
    <img src="../../Image/Joueurs/Canada/Tajon Buchanan.png" alt="" style="height:250px">
</div>
<div class="d-flex justify-content-center">
    <img src="../../Image/Joueurs/Canada/Derek Cornelius.png" alt="" style="height:250px">
    <img src="../../Image/Joueurs/Canada/Richie Laryea.png" alt="" style="height:250px">
    <img src="../../Image/Joueurs/Canada/Sam Adekugbe.png" alt="" style="height:250px">
    <img src="../../Image/Joueurs/Canada/Alphonso Davies.png" alt="" style="height:250px">
</div>
<div class="d-flex justify-content-center">
    <img src="../../Image/Joueurs/Canada/Borjan Milan.png" alt="" style="height:250px">

<?php

?>
</div>

<?php $contentPelouse = ob_get_clean();
$titre = "Canada : ";
ob_start(); ?>


<div class="position-absolute top-50 start-50 translate-middle" style="width:1000px">
<img src="../../Image/Joueurs/Canada/Liam Fraser.png" alt="" style="height:250px">
<img src="../../Image/Joueurs/Canada/Cyril Larin.png" alt="" style="height:250px">
<img src="../../Image/Joueurs/Canada/James Pantemis.png" alt="" style="height:250px">
<img src="../../Image/Joueurs/Canada/Atiba Hutchinson.png" alt="" style="height:250px">
<img src="../../Image/Joueurs/Canada/Lucas Cavallini.png" alt="" style="height:250px">

</div>

<?php
$contentBanc=ob_get_clean();
require "../Global/Template.php";
?>