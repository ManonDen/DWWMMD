<?php ob_start()?>

ici c'est ma page des livres


<?php
$content=ob_get_clean();
$titre= "Les livres de la bibliothèque";
require "template.php";
?>