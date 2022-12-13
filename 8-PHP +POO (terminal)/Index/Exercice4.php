<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>script php</title>
</head>
<body>
    
    <?php
    require "../service/fonctions.php";
    spl_autoload_register('chargerClasse');
    $phrase= new ChainePlus("Programmation orientée objet en PHP");

        ?>

    <div>
        <p><?= $phrase->gras() ?> </p>
        <p><?= $phrase->italique() ?></p>
        <p><?= $phrase->souligne() ?></p>
        <p><?= $phrase->majuscules() ?></p>
    </div>

</body>
</html>