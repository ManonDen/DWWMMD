<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    class ChainePlus{
        private $chaine;

        public function __construct($chaine){
            $this->chaine=$chaine;
        }


        public function getChaine(){return $this->chaine;}
        public function setChaine($chaine){$this->chaine=$chaine;}

        public function gras(){return "<strong>"."Gras : ". $this->chaine ."</strong> <br> " ;}

        public function italique(){return "<i>"."Italique : ". $this->chaine ."</i> <br>"  ; }

        public function souligne(){return "<u>"."Souligné : ". $this->chaine ."</u> <br>" ;}

        public function majuscules(){return strtoupper("Majuscules : ". $this->chaine ."<br>") ;}
    }
    ?>

</body>
</html>