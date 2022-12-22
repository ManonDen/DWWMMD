<?php

function protect_montexte($param) {

// nettoie les données
$param = trim($param);
// supprime les antislashs d'une chaîne
$param = stripslashes($param);
// convertit les caractère spéciaux en entités html (sert a nettoyer)
$param = htmlspecialchars($param);
return $param;

}


?>