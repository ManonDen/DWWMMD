<?php ob_start();
require "Fonctions.php"?>


<h2>Tableau de tableaux associatifs</h2>
<!-- 1 tableau contenant 4 dictionnaire -->
<?php $users=[array('Nom'=>"Marie",'Age'=>32,"Sexe"=>false),
array('Nom'=>"Pierre",'Age'=>32,'Sexe'=>true),
array("Nom"=>"Riri","Age"=>28,"Sexe"=>true),
array("Nom"=>"Fifi","Age"=>28,"Sexe"=>false)]?>


<?php foreach($users as $index){
    affiche($index);}?>


<?php
    $titre= "Exercices Moyen";
    $content= ob_get_clean();
    require "../../Global/general/template.php";
?>