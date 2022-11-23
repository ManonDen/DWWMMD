<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site exercice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/sandstone/bootstrap.min.css">
</head>
<body>
    <!-- Navebar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../accueil/index.php">Accueil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav me-auto">

        <!-- Les menus déroulant -->
        <?php 
        // Dictionnaire des menus déroulant
        $tab=array("Facile"=>[1,2,3,4,5],"Moyen"=>[1,2,3,4,5,6],"Difficile"=>[1,2,3,4,5],"Arme"=>[1,2,3]);

        // Je parcous mes menus (facile, moyen...)
        foreach($tab as $key => $value):?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="facile.php" role="button" aria-haspopup="true" aria-expanded="false"><?= $key?></a>
                <div class="dropdown-menu">
                <!-- Je parcours les exercice 1,2... -->
                <?php for($i=0;$i<count($value);$i++):?>
                    <a class="dropdown-item" href="../<?=$key?>/Exercice<?=$value[$i]?>.php"> Exercice <?=$value[$i] ?></a>
                <?php endfor?>
            
                </div>
            </li>
        <?php endforeach?>

        </ul>
        </div>
    </div>
    </nav>

    <div class="container">
        <!-- Affichage titre -->
        <h1 class=" rounded border border-dark p-2 m-2 text-center text-white bg-info"><?= $titre?></h1>
        <!-- Affichage du contenu -->
        <?= $content?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>