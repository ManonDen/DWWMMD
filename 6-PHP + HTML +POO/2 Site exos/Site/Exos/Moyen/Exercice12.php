<?php ob_start();
require "classmaison.php";
?>
<h2>Exercice avec static id</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Date</th>
      <th scope="col">Nombre chambre</th>
      <th scope="col">Surface (en m²)</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($maisons as $maison) : ?>
      <tr>
        <th scope="row"><?= $maison->getid() ?></th>
        <td><?= $maison->getdate() ?></td>
        <td><?= $maison->getchambre() ?></td>
        <td><?= $maison->getsurface() ?></td>
      </tr>
    <?php endforeach ?>

  </tbody>
</table>

<?php $titre = "Exercice Moyen";
$content = ob_get_clean();
require "../../Global/general/template.php";

?>