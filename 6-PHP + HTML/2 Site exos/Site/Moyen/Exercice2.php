<?php ob_start();
require "Fonctions.php"?>


<h2>Exercice 2 : Tableau de tableaux associatifs</h2>

<?php $users=[array('Nom'=>"Marie",'Age'=>32,"Sexe"=>"Femme"),array('Nom'=>"Pierre",'Age'=>32,'Sexe'=>"Homme"),array("Nom"=>"Riri","Age"=>28,"Sexe"=>"Homme"),
array("Nom"=>"Fifi","Age"=>28,"Sexe"=>"Femme")]?>

<?php foreach($users as $value){
    affiche($value);}?>




<?php
    $titre= "Exercices Moyen";
    $content= ob_get_clean();
    require "../general/template.php";
?>