<?php
define ("DB_SERVEUR","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","testbdd");

// Recupère ma connexion (si ça c'est bien passé alors true sinon false)
$link = mysqli_connect(DB_SERVEUR,DB_USERNAME,DB_PASSWORD,DB_NAME);
// var_dump($link);die();


if(!$link){
    // Stop le processus pour éviter de montrer plein d'erreurs correspondant pas
    // Permet de voir l'erreur qu'on veut voir
    die("erreur : connexion ko".mysqli_connect_error());
}

?>
