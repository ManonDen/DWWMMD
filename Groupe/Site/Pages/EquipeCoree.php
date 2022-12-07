<?php ob_start();
require "../../Classe/classequipe.php";
require "../../Classe/classJoueur.php";
?>

    <?php
$i=0;
foreach($joueurs as $joueur){
        if ($i <= 15) {
            $joueur->setid($equipe1->getid());

        } 
        elseif ($i <= 30) {
            $joueur->setid($equipe2->getid());

        } 
        elseif ($i <= 45) {
            $joueur->setid($equipe3->getid());
        } 
        else {
            $joueur->setid($equipe4->getid());
        } 
    $i++;
}
    ?>

    

    <div class="d-flex justify-content-center">
        <img src="../../Image/Joueurs/Coree/Do Kyungsoo.png" alt="" style="height:250px">
        <img src="../../Image/Joueurs/Coree/Jeon Jungkook.png" alt="" style="height:250px">
        <img src="../../Image/Joueurs/Coree/Jeon Soyeon.png" alt="" style="height:250px">
    </div>

    <div class="d-flex justify-content-center">
        <img src="../../Image/Joueurs/Coree/Lee Yubin.png" alt="" style="height:250px">
        <img src="../../Image/Joueurs/Coree/Kim Namjoon.png" alt="" style="height:250px">
        <img src="../../Image/Joueurs/Coree/Bang Christopher.png" alt="" style="height:250px">
    </div>

    <div class="d-flex justify-content-center">
        <img src="../../Image/Joueurs/Coree/Lee Jooheon.png" alt="" style="height:250px">
        <img src="../../Image/Joueurs/Coree/Dong Youngbae.png" alt="" style="height:250px">
        <img src="../../Image/Joueurs/Coree/Yo Jungyeon.png" alt="" style="height:250px">
        <img src="../../Image/Joueurs/Coree/Oh Sehun.png" alt="" style="height:250px">
    </div>

    <div class="d-flex justify-content-center"><img src="../../Image/Joueurs/Coree/Park Jimin.png" alt="" style="height:250px"></div>



<?php $contentPelouse = ob_get_clean();
$titre = "Corée : ";
ob_start();
?>

    <div class="position-absolute top-50 start-50 translate-middle " style="width:1000px">
        <img src="../../Image/Joueurs/Coree/Kim Jiwoo.png" alt="" style="height:250px">
        <img src="../../Image/Joueurs/Coree/Seo Changbin.png" alt="" style="height:250px">
        <img src="../../Image/Joueurs/Coree/Jung Wooyoung.png" alt="" style="height:250px">
        <img src="../../Image/Joueurs/Coree/Moon Byul.png" alt="" style="height:250px">
    </div>

<?php
$contentBanc=ob_get_clean();
require "../Global/Template.php";
?>