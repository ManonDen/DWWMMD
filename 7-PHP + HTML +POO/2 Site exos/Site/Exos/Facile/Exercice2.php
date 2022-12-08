<?php ob_start();
require "Fonctions.php";?>
<!-- Exercice1 -->
<h3>Affichage : saisies</h3>
<!-- Tableau des infos d'utilisateurs avec 2 dictionnaires -->
<?php $info=[array('Nom'=>"Marie",'Age'=>30,'Homme'=>false)
,array('Nom'=>"Pierre",'Age'=>32,'Homme'=>true)]; 
?>

<div style="width:350px" class="m-auto bg-light my-5 border border-dark">
   <p class="pt-1 ps-2 fw-bolder">Résultat affichage : </p>
    <?php for($i=0;$i<count($info);$i++) :?>

        <p class="ps-5"> <?= $info[$i]["Homme"]==false ? $info[$i]["Nom"]." a ".$info[$i]["Age"]." ans et c'est une femme " :
        $info[$i]["Nom"]." a ".$info[$i]["Age"]." ans et c'est un homme " ?> </p>

    <?php endfor; ?>
</div>

<!-- Exercice2 -->
<h3>Fonction : vérification nombre pair </h3>
<div style="width:350px" class="m-auto bg-light my-5 border border-dark">
    <p class="pt-1 ps-2 fw-bolder">Résultat affichage : </p>
    <p class="ps-5">Nombre1 vaut 5</p>
    <p class="ps-5"><?= pair(122)?></p>
    <p class="ps-5">Nombre2 vaut 122</p>
    <p class="ps-5"><?= pair(5)?></p>
</div>

<!-- Exercice3 -->
<h3>Formulaire avec méthode get : affichage saisies</h3>
<form action="Exercice2.php" method="get" style="width:350px" class="m-auto bg-light my-5 border border-dark">
    <p class="pt-1 ps-2 fw-bolder">Résultat affichage : </p>
    <div class="form-group ps-5">
        <label> Entrez votre nom d'utilisateur : </label>
        <input type="text" name="pseudo">
    </div>

    <div class="form-group ps-5 pt-2">
        <label> Entrez votre âge : </label>
        <input type="number" name="age">
    </div>
        
    <div class="position-relative mt-2 pt-5">
      <input type="submit" class="position-absolute top-50 start-50 translate-middle" name="bouton" value="Envoyer">
    </div>

    <p class="ps-5 pt-2"><?= isset($_GET['bouton']) ? $_GET["pseudo"]  ." a ". $_GET["age"]." ans ":"" ?></p>
</form>

<!-- Exercice4 -->
<h3>Formulaire avec post : vérification nombre pair</h3>
<form action="Exercice2.php" method="post" style="width:350px" class="m-auto bg-light my-5 border border-dark">
    <p class="pt-1 ps-2 fw-bolder">Résultat affichage : </p>
    <div class="form-group ps-5 pt-2">
        <label>Entrez un nombre</label>
        <input type="number" name="nb">
    </div>

    <div class="position-relative mt-2 pt-5">
      <input type="submit" class="position-absolute top-50 start-50 translate-middle" name="bouton" value="Vérification">
    </div>

    <p class="ps-5"><?= isset($_POST['bouton']) ? pair($_POST["nb"]) :""?></p>

</form>

<?php
$titre= "Exercices faciles";
$content= ob_get_clean();
require "../../Global/general/template.php";
?>