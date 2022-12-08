<?php ob_start()?>

<h2>Calculatrice</h2>



<form action="Exercice1.php" method="post" style="width:700px"class="m-auto bg-light border border-primary  px-5 mt-5">
    <div class="fw-bolder fs-4 text-center py-3">Calculatrice</div>
    
    <div class="row">
        <label class="col"> Nombre 1 : </label>
        <input class="col" type="number" name="nb1">
     
        <label class="col"> Nombre 2 : </label>
        <input class="col" type="number" name="nb2">
    </div>
    <div style="height:50px" class="row m-auto my-4">
        <input  type="submit" name="add" value="Addition" class="col"/>
        <input  type="submit" name="sous" value="Soustraction" class="col ms-4 "/>
        <input  type="submit" name="mul" value="Multiplication" class="col ms-4"/>
        <input  type="submit" name="div" value="Division" class="col ms-4"/>
    </div>

    <?php
    $resultat=0;
    if (isset($_POST['add'])){
        $resultat=$_POST['nb1'] +$_POST['nb2'];}
    elseif (isset($_POST['sous'])){
        $resultat=$_POST['nb1'] -$_POST['nb2'];}
    elseif (isset($_POST['mul'])){
        $resultat=$_POST['nb1'] *$_POST['nb2'];}
    elseif (isset($_POST['div'])){
        $resultat=$_POST['nb1'] /$_POST['nb2'];}
    ?>    

    <div class="row py-3">Résultat : <?= $resultat?> </div>
</form>



<?php
$titre= "Exercices difficiles";
$content= ob_get_clean();
require "../../Global/general/template.php";
?>