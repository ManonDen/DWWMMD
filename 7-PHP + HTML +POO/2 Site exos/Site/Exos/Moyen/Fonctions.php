<?php 
// exo1 et 2
function affiche($dicinfo){
    $dicinfo["Sexe"]=$dicinfo["Sexe"]?"Homme":"Femme";

    foreach($dicinfo as $key => $value){
        echo $key ." : ".$value."<br>";
    }
    echo "-----------------------<br>";
}
// exo3
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
// exo4
function afficheAn($dicoanimal,$typeR){
    foreach($dicoanimal as $key => $value){
        echo $typeR== $dicoanimal["type"] ? $key ." : ".$value."<br>" : "";        
    }
    echo $typeR==$dicoanimal["type"] ? "-----------------------<br>":"";
}
// exo5
function type($race){
    $race=$race?"chien":"chat";
    return $race;
}

function affichebis($tab){
    echo $tab["nom"] ." ".$tab["prenom"] ." habite au " .$tab["adress"]." à ". $tab["ville"]. "(".$tab["numero"].") <br>";
}

function vraiFaux($bool){
    $bool = $bool? "Vrai" : "Faux";
    return $bool;
}

function afficheVoiture($voiture){
    echo "Marque : ". $voiture->getMarque() ." <br>". "Model : ". $voiture->getModel()." <br>". "Couleur : ". $voiture->getCouleur()." <br>". 
    "Nombre de porte : ". $voiture->getnbporte()." <br>". "Electrique : ". vraiFaux($voiture->getElectrique()).
    " <br>". "----------------------------- <br> ";
}

function VoitureMarque($voitures){
    $tab=[];
    for($i=0;$i<count($voitures);$i++){
        $tab[$i]=$voitures[$i]->getMarque();
    }
    $tab=array_unique($tab);
    return $tab ;
}
// exo10
function genre($objet){
$garde=$objet->getsexe()? "Homme":"Femme" ;
return $garde;
}

// exo11

function sdoublonse($objet){
    $tab=[];
    for($i=0;$i<count($objet);$i++){
        $tab[$i]=$objet[$i]->getedition();
    }
    $tab=array_unique($tab);
    return $tab ;
}

function sdoublonsd($objet){
    $tab=[];
    for($i=0;$i<count($objet);$i++){
        $tab[$i]=$objet[$i]->getdate();
    }
    $tab=array_unique($tab);
    return $tab ;
}
?>