<?php

class Form{

    public function __construct(){
        echo "<h1>Exo 2</h1>";
    }
    
    public function setTexte(){echo "<textarea  rows='5' cols='33'></textarea>";}

    public function setSubmit(){echo "<input type='submit' value='Envoyer'>";}

    public function getForm(){
        echo "<form ><fieldset>";
        $this->setTexte();
        $this->setTexte();
        $this->setSubmit();
        echo "</form ></fieldset>";
    }
    
}

?>