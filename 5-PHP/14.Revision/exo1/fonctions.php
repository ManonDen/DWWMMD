<?php
function convertir($moeuro){
$monnaies=array("anglettere"=>[0.87430143,"Livre britannique"], "usa"=>[1.0423948,"Dollar des États-Unis"],
"canada"=>[1.3800676,"Dollar canadien"],"japon"=>[145.24266,"Yen japonais"],"mexique"=>[20.153923,"Mexican Pesos"],
"maroc"=>[11.122638,"Moroccan Dirhams"],"inde"=>[84.690273,"Roupies indiennes"]);


foreach($moeuro as $val){
    foreach ($monnaies as $key => $values){
        echo($val." € équivaut en/au $key à ".round($values[0]*$val,2)." $values[1].\n");
    }
    echo("\n");
}
}

?>
