<?php ob_start();
require "Fonctions.php"?>

<h2>Tableaux associatifs : Chien et Chat</h2>

<form action="Exercice4.php" method="get" style="width:1000px" class="m-auto my-5 position-relative border border-dark bg-light">
    <?php $animaux=[array("nom"=>"Fifi","age"=>5,"type"=>"chat"),array("nom"=>"Lizou","age"=>7,"type"=>"chien"),
      array("nom"=>"Blue","age"=>3,"type"=>"chat"),array("nom"=>"Riri","age"=>12,"type"=>"chat"),
      array("nom"=>"Toby","age"=>15,"type"=>"chien")];
    ?>

    <div class="mt-2 py-2 justify-content-evenly d-flex flex-row form-group ">
      <input type="submit" name="animaux" value="Tous les animaux">
      <input type="submit" name="chien" value="Seulement les chiens">
      <input type="submit" name="chat" value="Seulement les chats">
    </div>

   
      

      
      <div class="col-3 ms-4 ps-5 text-center">

      <?php
      if(isset($_GET["animaux"])){
          foreach($animaux as $index)
            afficheAn($index,"chat"or"chien");
      }
      ?>
      </div>

      <div class="col-4 ms-5 text-center">
      <?php
      if(isset($_GET["chien"])){
          foreach($animaux as $index)
            afficheAn($index,"chien");
      }
      ?>
      </div>

      <div class="col-3 text-center">
      <?php
      if(isset($_GET["chat"])){
          foreach($animaux as $index)
            afficheAn($index,"chat");
      }
      ?>
      </div>
    </div>
      
</form>

<?php
    $titre= "Exercices Moyen";
    $content= ob_get_clean();
    require "../../Global/general/template.php";
?>