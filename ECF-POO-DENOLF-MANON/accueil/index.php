<?php
require "../service/fonction.php";
spl_autoload_register('chargerClasse');

// instanciation du joueur
$pseudo = readline("Entrer votre pseudo : ");
$joueur = new Player(100, 20, 0, $pseudo);

// Boucle qui tourne tant que le joueur est en vie (point de vie supérieur à 0)
while ($joueur->getLifePoint() > 0) {
    // Si la fonction move a calculée que le joueur tombe sur un monstre
    $qui = $joueur->move();
    if ($qui == "Monstre") {
        $monstre = new Monstre(rand(20, 100), rand(5, 10));
        // On garde le nombre de point de vie du monstre afin de calculer le score du joueur
        $gardePvMonstre = $monstre->getLifePoint();

        // Tant que le monstre et le joueur sont en vie, ils s'attaquent
        while ($joueur->getLifePoint() > 0 and $monstre->getLifePoint() > 0) {
            // Si le joueur et le monstre sont en vie, le joueur attaque le monstre
            $joueur->getLifePoint() > 0 and $monstre->getLifePoint() > 0 ? $monstre->attack($joueur) : "";
            // Si le joueur et le monstre sont en vie, le monstre attaque le joueur
            $joueur->getLifePoint() > 0 and $monstre->getLifePoint() > 0 ? $joueur->attack($monstre) : "";
        }
        // Si le joueur n'est pas mort et qu'il a tué le monstre, on incrémente son score
        if ($joueur->getLifePoint() > 0) {
            // Si monstre pv=<60, alors score augmente de 1. Sinon monstre (pv>60), score augmente de 2
            $gardePvMonstre < 61 ? $joueur->setScore($joueur->getScore() + 1) : $joueur->setScore($joueur->getScore() + 2);
        }
    }
    // Si la fonction move a calculée que le joueur tombe sur un manchot
    elseif ($qui == "Manchot") {
        $bandit = new BanditManchot();
        echo "\n";
        $joue = strtoupper(readline("Souhaitez-vous jouer avec le manchot contre des points de vie ? (O/N) : "));

        // Force l'utilisateur à saisir correctement la variable joue
        while ($joue != "O" and $joue != "N") {
            echo "\n\nLa saisie est incorrecte !\nSaisir O ou N\n";
            $joue = strtoupper(readline("Souhaitez-vous jouer avec le manchot contre des points de vie ? (O/N) : "));
        }
        // Si l'utilisateur décide de jouer
        $joue == "O" ? $joueur->play($bandit) : "";
    }
    // Si le joueur a choisit de quitter le programme
    else {
        // On tue le joueur pour quitter le programme
        $joueur->setLifePoint(0);
    }
}
// Affichage du score du joueur, s'il est mort ou que l'utilisateur a quitté le programme
echo "\nScore de " . $joueur->getPseudo() . " : " . $joueur->getScore();
