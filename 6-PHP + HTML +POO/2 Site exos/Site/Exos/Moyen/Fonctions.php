<?php

function affiche($dicinfo){
    $dicinfo["Sexe"]=$dicinfo["Sexe"]?"Homme":"Femme";

    foreach($dicinfo as $key => $value){
        echo $key ." : ".$value."<br>";
    }
    echo "-----------------------<br>";
}

function afficherTableau($tab){
    foreach($tab as $value){
        echo($value." ");
    }
}

function calculerMoyenne($tab){
    $moyenne=array_sum($tab)/count($tab);
    return $moyenne;
}

function estTableauPair($tab){
    foreach($tab as $nb){
        while($nb%2!=0){
            return false;
        }
    }
    
    return true;
}

function afficheAn($dicoanimal,$typeR){
    foreach($dicoanimal as $key => $value){
        echo $typeR== $dicoanimal["type"] ? $key ." : ".$value."<br>" : "";        
    }
    echo $typeR==$dicoanimal["type"] ? "-----------------------<br>":"";
}

function type($race){
    $race=$race?"chien":"chat";
    return $race;
}

function affichebis($tab){
    echo $tab["nom"] ." ".$tab["prenom"] ." habite au " .$tab["adress"]." à ". $tab["ville"]. "(".$tab["numero"].") <br>";
}

function tri($employe){
    for($i=0;$i<2;$i++){
        echo($employe[$i]["nom"]<$employe[$i+1]["nom"]);
        if ($employe[$i]["nom"]<$employe[$i+1]["nom"]){
            $garde=$employe[$i]["nom"];
            $employe[$i]["nom"]=$employe[$i+1]["nom"];
            $employe[$i]["nom"]=$garde;
        }
    }
}
?>