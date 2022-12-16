<?php
require_once "../classes/Character.class.php";

class Player extends Character{
    private $score;
    private $pseudo;

    public function __construct(int $lifePoint,int $strenghtPoint,int $score,string $pseudo)
    {
        parent::__construct($lifePoint,$strenghtPoint);
        $this->score=$score;
        $this->pseudo=$pseudo;
    }

    // Les getter
    public function getScore(){return $this->score;}
    public function getPseudo(){return $this->pseudo;}
    
    // Les setter
    public function setScore($score){$this->score=$score;}
    public function setPseudo($pseudo){$this->pseudo=$pseudo;}

    // Méthodes

    // Méthode servant à faire bouger le joueur
    public function move(){
        // Le joueur choisit sa direction
        echo "\n\nSaisir 0 pour quitter\nSaisir 1 pour aller au Nord\nSaisir 2 pour aller au Sud\nSaisir 3 pour aller à l'Est
Saisir 4 pour aller à l'Ouest\n";
        $choix=readline("Votre choix : ");

        //Force le joueur à saisir correctement la variable choix
        while($choix!=(int)$choix or $choix<0 or $choix>4){
            echo $choix!=(int)$choix ? "\nVotre choix doit être un nombre entier !\n":"\nVotre choix doit être compris entre 0 et 4 !\n";
            $choix=readline("Votre choix : ");
        }

        // Calcul si tombe sur un manchot ou monstre
        switch($choix){
            case 0:
                break;
            case 1 or 2 or 3 or 4:
                $nb=rand(1,6);
                // si le nombre est 1 ou 2, alors le joueur tombe sur le manchot, sinon sur un monstre
                return ($nb==1 or $nb==2) ?"Manchot":"Monstre";
                break;
        }

    }
    // Le monstre attaque le joueur
    public function attack($character){
        echo "\n". $this->pseudo." :\nPoint de vie actuel : ".$this->lifePoint."\nLe monstre attaque ".$this->pseudo." de ".
        $character->getStrenghtPoint();
        // calcul perte point de vie du joueur
        $this->lifePoint-=$character->getStrenghtPoint();
        // affichage de ce qu'il reste
        echo "\nPoint de vie actuel : ".$this->lifePoint ."\n" ;
    }

    public function play($BanditManchot){
        $nb=$BanditManchot->howManyWeWinOrLose();
        if($BanditManchot->winOrLose()){
            $this->lifePoint+=$nb;
            echo "\nVous avez gagnez $nb de point de vie !\nPoint de vie actuel : ".$this->lifePoint;
        }
        else{
            $this->lifePoint-=$nb;
            echo "\nVous avez perdu $nb de point de vie !\nPoint de vie actuel : ".$this->lifePoint;
        }
    }
}
?>