<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site exercice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/sandstone/bootstrap.min.css">
    <link rel="stylesheet" href="../../CSS/style.css">
</head>

<body  >
   
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../Accueil/index.php">
                <img src="../../Image/logo/coupe.png" style="width:50px">
            </a>
            <a class="nav-link text-white fs-1" style="font-family: Arabic-Bold; src: url(Font/Qatar2022Arabic-Bold);"><?=$titre?></a>
            <button class="navbar-toggler "  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse "style="width:100px" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " >Ajouter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" >Supprimer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" >Modifier</a>
                    </li>
                
                </ul>
               
            </div>

        </div>
    </nav>
    
    <!-- On met le background Pelouse + le contenu de la page -->
    <main style="background-image:url(https://img.freepik.com/photos-premium/terrain-foot-terrain-foot-pour-fond_64749-1841.jpg?w=740); 
height:100%;background-size: 100%;  background-position: center; background-image:cover; background-repeat: no-repeat; "  >
        <div >
            <?= $contentPelouse?>
        </div>

        
    </main>

    <!-- Image BANC -->
    <div class="perso position-relative" >
        <?= $contentBanc?>      
    </div>

   

    <footer class="bg-dark text-center text-white pt-3 fs-5"style=" height:60px">
        Clément CARLIER, Nadia BENYAMINA, Manon DENOLF et Maxime MILLIEN
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>