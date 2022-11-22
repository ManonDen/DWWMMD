<?php ob_start()?>

<h2>Exercice 2</h2>

<form action="Exercice2.php" method="post" style="width:400px;heigth:300px"class="m-auto bg-light border border-primary  px-5 mt-5">
    <div class="row pt-4">
        <label class="col pt-1">Donner un nombre: </label>
        <input class="form-control col rounded-0 border border-secondary" name="input" value= "<?= $_POST["input"]?>">
    </div>

    <div style="height:50px" class="position-relative my-2">
        <input class="position-absolute top-50 start-50 translate-middle " type="submit" name="bouton" value="Calcul"/>
    </div>

    <?php 
    $resultat=" ";
    if (isset($_POST['bouton'])){
        $resultat = $_POST["input"] * $_POST["input"];
    }
    ?>

    <p>Le nombre au carré : <?= $resultat ?> </p>
</form>


<?php
$titre= "Exercices faciles";
$content= ob_get_clean();
require "template.php";
?>