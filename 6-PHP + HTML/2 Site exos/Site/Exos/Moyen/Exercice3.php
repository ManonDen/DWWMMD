<?php ob_start();
require "Fonctions.php"?>

<h2>Exercice 2 : Fonction et tableaux</h2>
<div action="Exercice3.php" style="width:440px" class="bg-light border border-dark m-auto my-5 ps-4 py-2">
    <div>Voici le tableau : 
        <?php $nbsimp=[12,15,18,19,2,6,8,3,6,8];
        $nbspair=[12,14,18,12,2,6,8,4,6,8];
        afficherTableau($nbsimp);?>
    </div>
    <div>Moyenne :<?= calculerMoyenne($nbsimp)?></div>
    <div>Le tableau contient-t-il que des nombres paires : <?= estTableauPair($nbsimp) ? "vrai":"faux";?></div>
</div>


<?php
    $titre= "Exercices Moyen";
    $content= ob_get_clean();
    require "../../Global/general/template.php";
?>