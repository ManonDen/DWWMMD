<?php ob_start();
require "../../Classe/classequipe.php";
require "../../Classe/classJoueur.php"; ?>

<!-- Pelouse -->

<form action="" method="$_POST" class="container">
  <div style="width:500px;height:1000px" class="pt-5  d-flex  justify-content-between m-auto">
    <?php for ($i = 0; $i < count($equipes); $i++) : ?>
      <a href="../Pages/Equipe<?= $equipes[$i]->getPays() ?>.php">
        <img style="width:100px" src="../../Image/Drapeaux/Logo<?= $equipes[$i]->getPays(); ?>.png">
      </a>
    <?php endfor ?>
  </div>
</form>

<!-- Banc-->
<?php
$titre = "WORLD CUP 2022";
$contentPelouse = ob_get_clean();
ob_start();
$tab = ["Manon", "Clement", "Nadia", "Maxime"];
?>

<div class="position-absolute top-50 start-50 translate-middle" style="width:1000px">

  <?php
  foreach ($tab as $auteur) { ?>
    <img style="height:250px" class="rounded mx-4" src="../../Image/Auteurs/<?= $auteur ?>.jpg">

  <?php } ?>
</div>

<?php
$contentBanc = ob_get_clean();
require "../Global/Template.php";
?>