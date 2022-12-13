<?php

class Form{

    public function __construct()
    {
        echo "<form action='$_POST'><fieldset>";
    }
    
    public function setTexte(){echo "<textarea  name='story'rows='5' cols='33'></textarea>";}

    public function setSubmit(){echo "<input type='submit'>";}

    public function getForm(){}
    
}

?>