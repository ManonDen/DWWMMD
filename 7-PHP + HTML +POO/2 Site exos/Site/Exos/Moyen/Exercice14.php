<?php ob_start(); 
require "../../Exos/Moyen/classes/classeCadre.php";?>
<?php
$jean=new Employe("Jean","Neymar","1850389546458",1500.56,"soudeur");
$simon=new Employe("Simon","Jeremy","179028955812",1700.47,"assistant mecanicien");
$odile=new Employe("Odile","Deray","285097154678",1900.14,"magasinier");
$alain=new Cadre("Alain","Deloin","1840259453666",2100.23,"chef maintenance",[$jean->getnom(),$odile->getnom()]);

$employes=[$jean,$simon,$odile,$alain];
$cadres=[$alain];
$x=0;
?>

<h3>Exo héritage</h3>

<div class="row"> <?php foreach($employes as $employe ){
    ?> <p><?= $employe?></p>
        <p><?= $employe->effectueSonJob()."<br><br>"?></p>
        <!-- Si le prenom de l'employé est bien dans la liste des cadres faire -->
        <p><?php if ($employe->getPrenom()==$cadres[$x]->getPrenom()){
            // affiche qui il manage
            echo $cadres[$x]->manage();
            
            // affiche l'augmentation de ses employé
            $tab=[10,20];
            $i=0;
            // recherche si l'employé fait partie des employé du cadre
            foreach($employes as $employe ){
                foreach($cadres[$x]->getList() as $soustraitant){
                    // Si c'est le cas, on augmente les employés
                    if($employe->getNom()==$soustraitant){
                     echo $cadres[$x]->augmenteUnSalarie($employe,$tab[$i]);
                     $i++;
                    }
                }
            }
            $x++;
        } ?></p>
    <?php

} ?> </div>

<?php $titre="Exercice Moyen";
$content=ob_get_clean();
require "../../Global/general/template.php" ?>