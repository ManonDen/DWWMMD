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
    // Exo1
    $phrase= new ChainePlus("Programmation orientée objet en PHP");
    ?>

    <div>
        <p><?= $phrase->gras() ?> </p>
        <p><?= $phrase->italique() ?></p>
        <p><?= $phrase->souligne() ?></p>
        <p><?= $phrase->majuscules() ?></p>
    </div>
    <!-- exo2 -->
    <div>
        <?php $form= new Form();
        $form->getForm();
    // exo3
        $form2= new Form2();
        $form2->getForm(); ?>
    </div>

    <!-- exo4 -->
    <?php $client1= new Client("Denolf",'Manon',"666 rue Satanique,66666,Enfer");
    $client1->setCoord();

    echo "<br>Election : ";
    $electeur1=new Electeur("Benyamina","Nadia",3,false);
    $electeur1->avoter();
    print_r($electeur1);
    ?>

</body>
</html>