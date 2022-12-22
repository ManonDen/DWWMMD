<?php
// Il faut que l'id ne soit pas vide
// trim sert a nettoyer les données
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // inclure ma connexion
    require_once "../php/config.php";

    // prepare ma requête pour récuperer l'articles en fonction de l'id
    $sql= "SELECT * FROM articles WHERE id = ?";

    // ($stmt=mysqli_prepare($link,$sql))==true
    // je test si bien connecter a ma bd et ma quete
    if($stmt=mysqli_prepare($link,$sql)){
        // met un i pour integer 
        // va lier le ? de ma requête à param_id
        mysqli_stmt_bind_param($stmt,"i",$param_id);

        // récupère id
        $param_id = trim($_GET['id']);

        // exécute ma requete stmt et la test si fonctionne
        if(mysqli_stmt_execute($stmt)){
            // recupere nombre enregistrement
            $result = mysqli_stmt_get_result($stmt);

            // Test si le nombre de ligne est = à 1 (car 1 seul id == 1 enregistrement)
            if(mysqli_num_rows($result) == 1){
                // tansforme resultat en tableau associatif
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                $nom = $row['nom'];
                $description = $row["description"];
                $prix = $row["prix"];
                $categorie = $row["categorie"];
                $actif = $row["actif"];
            }
            // fait une redirection vers la page d'erreur, lève l'erreur si ça plante
            else{
                header("location: index.php");
                exit();
            }
        }
            
        else{
            echo "Oups, problème de connexion à la BDD, veuillez réessayer ultérieurement";
        }
    }
    // vide la mémoire
    mysqli_stmt_close($stmt);

    // deconnexion de la bdd
    mysqli_close($link);


}else{
    header("location: index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>read (lecture)</title>
    <style>
    .wrapper{
        width: 600px;
        margin:0 auto;

    }
    </style>

</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="mt-5 mb-3">Lecture</h1>
                        <div class="form-group">
                            <label for="">Nom</label>
                            <!-- Dans sql va chercher la ligne email -->
                            <p><?= $row["nom"]; ?></p>
                        </div>
                        <div class="form-group">
                            <label for="">description</label>
                            <p><?= $row["description"]; ?></p>
                        </div>
                        <div class="form-group">
                            <label for="">Prix</label>
                            <p><?= $row["prix"]; ?></p>
                        </div>
                        <div class="form-group">
                            <label for="">categorie</label>
                            <p><?= $row["categorie"]; ?></p>
                        </div>
                        <div class="form-group">
                            <label for="">actif</label>
                            <p><?= $row["actif"]; ?></p>
                        </div>

                    </div>
            </div>

        </div>
        <a href="index.php" class="btn btn-secondary ml-2">Retour</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>

