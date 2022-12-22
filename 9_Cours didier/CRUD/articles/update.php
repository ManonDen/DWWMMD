<?php
require_once "../php/config.php";

// définir nos variables et init
$nom = $description= $prix= $categorie=$actif= "";
$nom_err = $description_err = $prix_err = $categorie_err=$actif_err= "";


if(isset($_POST["id"]) && !empty($_POST["id"])){
    $id = $_POST["id"];

    $nom_ok = trim($_POST["nom"]);

    if(empty($nom_ok)){
        $nom_err = "nom incorrect";
    }else{
        $nom = $nom_ok;
    }

    $description_ok = trim($_POST["description"]);

    if(empty($description_ok)){
        $description_err = "description incorrect";
    }else{   
        $description = $description_ok;
    }

    $prix_ok = trim($_POST["prix"]);

    if(empty($prix_ok)){
        $prix_err = "prix incorrect";
    }else{   
        $prix = $prix_ok;
    }

    $categorie_ok = trim($_POST["categorie"]);

    if(empty($categorie_ok)){
        $categorie_err = "categorie incorrect";
    }else{   
        $categorie = $categorie_ok;
    }

    $actif_ok = trim($_POST["actif"]);

    if($input_actif!=(int)$input_actif){
        $actif_err = "Entrer 1 pour en vente ou 0 pour en rupture de stock.";  
    }else{   
        $actif = $actif_ok;
    }
   

    // var_dump($description);die;
    if(empty($nom_err) && empty($description_err) && empty($prix_err) && empty($categorie_err)){

        $sql = "UPDATE articles SET nom=?, description=?, prix=?,categorie=?,actif=? WHERE id=?";

        if($stmt = mysqli_prepare($link,$sql)){
            mysqli_stmt_bind_param($stmt, "ssdsii", $nom_param, $description_param, $prix_param,$categorie_param,$actif_param,$id_param );
            // var_dump("ici");die;
            $nom_param = $nom;
            $description_param = $description;
            $id_param = $id;
            $prix_param=$prix;
            $categorie_param=$categorie;
            $actif_param = $actif;

            // var_dump($description_param);
            if(mysqli_stmt_execute($stmt)){
                header("location: index.php");
                exit();
            }else{
                echo "Oups, problème de connexion a la BDD, veuillez réessayer ultérieurement"; 
            }

        }
        // mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}else{

    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        $id = trim($_GET["id"]);

        $sql ="SELECT * FROM articles WHERE id=?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "i", $param_id);

            $param_id = $id;

            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);

                if(mysqli_num_rows($result)==1){
                    $row=mysqli_fetch_array($result);

                    $nom = $row["nom"];
                    
                    $description = $row["description"];

                    $prix = $row["prix"];

                    $categorie = $row["categorie"];

                    $actif = $row["actif"];
                    // var_dump($description[0]);die;
                }else{
                    header("location: index.php");
                    exit();
                }
            }else{
                echo "Oups, problème de connexion a la BDD, veuillez réessayer ultérieurement";
            }
            mysqli_stmt_close($stmt);

        }
        mysqli_close($link);
    }else{
        header("location: index.php");
        exit();
    }


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mise a jour</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Mise à jour</h2>
                    <p>Veuillez modifier les champs souhaité et valider</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>nom</label>
                            <input type="text" name="nom" class="form-control <?php echo (!empty($nom_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $nom; ?>">
                            <span class="invalid-feedback"><?php echo $nom_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>description</label>
                            <input type="text" name="description" class="form-control <?php echo (!empty($description_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $description; ?>">
                            <span class="invalid-feedback"><?php echo $description_err;?></span>                           
                        </div>
                        <div class="form-group">
                            <label>Prix</label>
                            <input type="text" name="prix" class="form-control <?php echo (!empty($prix_err)) ? 'is-invalid' : ''; ?>" 
                            value="<?php echo $prix; ?>"> <span class="invalid-feedback"><?php echo $prix_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>categorie</label>
                            <input type="text" name="categorie" class="form-control <?php echo (!empty($categorie_err)) ? 'is-invalid' : ''; ?>" 
                            value="<?php echo $categorie; ?>"> <span class="invalid-feedback"><?php echo $categorie_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>actif</label>
                            <input type="text" name="actif" class="form-control <?php echo (!empty($actif_err)) ? 'is-invalid' : ''; ?>" 
                            value="<?php echo $actif; ?>"> <span class="invalid-feedback"><?php echo $actif_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>