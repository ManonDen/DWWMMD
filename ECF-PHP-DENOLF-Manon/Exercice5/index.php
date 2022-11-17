<?php
require "fonctions.php";
// en-tête 
echo"\t****************Multiple manipulation sur tableaux****************\n";

// Rempli le tableau $tab1 et $tab2 de 10 élements de manière aléatoire entre 20 et 100
$tab1=[];
$tab1=remplir($tab1);
$tab2=[];
$tab2=remplir($tab2);

// affiche $tab1 et $tab2
echo"\nVoici le tableau 1 : \n";
affiche($tab1);
echo"\nVoici le tableau 2 : \n";
affiche($tab2);

$choix=1;
// Tant que l'utilisateur entre autrechose que O à la variable choix, l'algorithme recommence à lancer le menu.
while($choix!=0){
    // Le menu
    echo"\nMENU\n0. Quitter\n1. Trier le tableau en ordre croissant\n2. Trier le tableau en ordre décroissant
3. Remplir un troisième tableau en additionnant chaque élément du tableau 1 et 2\n4. Inverser le tableau 3\n";

    // Utilisateur choisit ce qu'il veut faire
    $choix=readline("Choix (un chiffre) : ");
    // Vérification de si la valeur est bien un nombre entier entre 0 et 4. Si ce n'est pas le cas on demande à l'utilisateur de resaisir.
    $choix=vérification($choix,0,4);

    // Action du menu selon choix utilisateur
    switch($choix){
        // Quitte le menu
        case 0:
            echo"\nAu revoir et à bientôt";
            break;
        // Trie le tableau en ordre croissant
        case 1:
            // Utilisateur choisit quel tableau il veut trier
            echo"\n";
            $choix2=readline("Choisissez quel tableau souhaitez vous trier dans l'ordre croissant (le 1 ou le 2): ");
            // Vérification de si la valeur est bien un nombre entier entre 1 et 2. Si ce n'est pas le cas on demande à l'utilisateur de resaisir.
            $choix2=vérification($choix2,1,2);

            echo"\nVoici le tableau $choix2 trié dans l'odre croissant: \n";
            if($choix2==1){
                sort($tab1);
                affiche($tab1);
            }
            else{
                sort($tab2);
                affiche($tab2);
            }
            break;
        // Trie le tableau en ordre décroissant
        case 2:
            // Utilisateur choisit quel tableau il veut trier
            echo"\n";
            $choix2=readline("Choisissez quel tableau souhaitez vous trier dans l'ordre décroissant (le 1 ou le 2): ");
            // Vérification de si la valeur est bien un nombre entier entre 1 et 2. Si ce n'est pas le cas on demande à l'utilisateur de resaisir.
            $choix2=vérification($choix2,1,2);

            echo"\nVoici le tableau $choix2 trié dans l'odre décroissant: \n";
            if($choix2==1){
                rsort($tab1);
                affiche($tab1);
            }
            else{
                rsort($tab2);
                affiche($tab2);
            }
            break;
        // Remplie un troisième tableau en additionnant chaque élément du tableau 1 et 2
        case 3:
            $tab3=[];
            for($i=0;$i<count($tab1);$i++){
                $tab3[$i]=$tab1[$i]+$tab2[$i];
            }
            echo"\nVoici le tableau 3 : \n";
            affiche($tab3);
            break;
        // Inverse le tableau 3
        case 4:
            // Si le tableau 3 n'existe pas encore
            if(@$tab3==null){
                echo"\nD'abord, remplir le tableau 3 en faisant le choix 3. Enfin, inverser le tableau 3 en faisant le choix 4.\n";
                break;
            }
            // Si le tableau 3 existe
            else{
                $tab3=array_reverse($tab3);
                echo"\nVoici le tableau 3 inversé : \n";
                affiche($tab3);
                break;
            }
    }
}
?>