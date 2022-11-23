<?php ob_start();
require "Fonctions.php"?>


<h2>Exercice 2 : Tableau de tableaux associatifs</h2>

<?php $info1=array('Nom'=>"Marie",'Age'=>32,"Sexe"=>"Femme");
$info2=array('Nom'=>"Fifi",'Age'=>32,'Sexe'=>"Homme")?>

<p><?php affiche($info1).affiche($info2)?></p>


<?php
    $titre= "Exercices Moyen";
    $content= ob_get_clean();
    require "../general/template.php";
?>