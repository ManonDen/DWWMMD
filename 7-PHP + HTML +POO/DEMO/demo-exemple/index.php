<?php ob_start()?>

ici c'est ma page d'accueil


<?php
$content=ob_get_clean();
$titre= "Bibliothèque";
require "template.php";
?>