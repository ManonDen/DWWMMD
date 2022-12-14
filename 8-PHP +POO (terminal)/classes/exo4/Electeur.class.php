<?php
require_once "../classes/exo4/Personne.class.php";

class Electeur extends Personne{
    private $bureauDeVote;
    private $vote;

    public function __construct($nom,$prenom,$bureauDeVote,$vote){
        parent::__construct($nom,$prenom);
        $this->bureauDeVote=$bureauDeVote;
        $this->vote=$vote;
    }

    public function getBureauDeVote(){return $this->bureauDeVote; }
    public function getVote(){return $this->vote; }

    public function setBureauDeVote($bureauDeVote){$this->bureauDeVote=$bureauDeVote; }
    public function setVote($vote){$this->vote=$vote; }

    public function avoter(){
        $this->vote=true;
    }
}

?>