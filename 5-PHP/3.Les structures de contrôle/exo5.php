<?php
$age = readline("Quel de l'enfant : ");
if ($age >=12){
    echo("Catégorie cadet");
} 
elseif ($age >=10) {
    echo("Catégorie Minime");
}
elseif ($age >=8) {
    echo("Catégorie Pupille");
}
else
    echo("Catégorie Poussin")
?>