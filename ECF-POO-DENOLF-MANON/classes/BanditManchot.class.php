<?php

class BanditManchot{
    public function __construct(){}

    // Fonction permettant de déterminer si le joueur gagnera ou perdera des pv
    public function winOrLose(){
        $chance=rand(1,2);
        return $chance==1 ? true : false;
    }

    // Fonction permettant de déterminer le nb de pv dont le joueur perdra ou gagnera
     public function howManyWeWinOrLose(){
        return rand(1,10);
    }
}

?>