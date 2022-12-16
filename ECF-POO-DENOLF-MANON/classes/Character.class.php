<?
abstract class Character{
    protected $lifePoint;
    protected $strenghtPoint;

    protected function __construct(int $lifePoint,int $strenghtPoint)
    {
        $this->lifePoint=$lifePoint;
        $this->strenghtPoint=$strenghtPoint;
    }

    // Les getter
    public function getLifePoint(){return $this->lifePoint;}
    public function getStrenghtPoint(){return $this->strenghtPoint;}

    // Les setter
    public function setLifePoint($lifePoint){$this->lifePoint=$lifePoint;}
    public function setStrenghtPoint($strenghtPoint){$this->strenghtPoint=$strenghtPoint;}

    // Méthode
    public function attack($character){}
}

?>