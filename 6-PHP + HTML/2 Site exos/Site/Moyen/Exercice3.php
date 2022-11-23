<?php ob_start();
require "Fonctions.php"?>



<?php
    $titre= "Exercices Moyen";
    $content= ob_get_clean();
    require "../general/template.php";
?>