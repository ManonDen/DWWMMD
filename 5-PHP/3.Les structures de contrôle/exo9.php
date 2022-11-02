<?php
$sexe=readline("Quel est votre sexe : ");
$age=readline("Quel est votre âge : ");
if (($sexe == "H" && $age>20)||($sexe=="F" && $age>=18)){
    echo("Imposable");
}
else{
    echo("Non imposable");
}
?>