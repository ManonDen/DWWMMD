<?php
require_once "../classes/exo4/Form.class.php";

class Form2 extends Form {
    public function __construct(){
        echo"<h1>Exo3</h1>";
    }

    public function btnRadio(){
        echo'<label>Huey</label>
        <input type="radio">' ;
    }

    public function checkBox(){
        echo'<input type="checkbox">';
    }

    public function getForm(){
        echo "<form ><fieldset>";
        $this->btnRadio();
        $this->btnRadio();
        $this->btnRadio();
        $this->checkBox();
        $this->checkBox();
        $this->checkBox();
        echo "</form ></fieldset>";
    }
}
?>