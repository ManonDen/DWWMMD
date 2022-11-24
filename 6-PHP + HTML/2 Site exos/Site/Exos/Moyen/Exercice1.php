<?php ob_start();
require "Fonctions.php"?>


<h2>Exercice 2 : Tableaux associatifs</h2>

<!-- 2 tableaux associatifs -->
<?php $info1=array('Nom'=>"Marie",'Age'=>32,"Sexe"=>false);
$info2=array('Nom'=>"Fifi",'Age'=>32,'Sexe'=>true);?>

<p><?php affiche($info1).affiche($info2)?></p>

<?php
    $titre= "Exercices Moyen";
    $content= ob_get_clean();
    require "../../Global/general/template.php";
?>