<?php
// Include config file
require_once "../php/config.php";
require_once "../php/protection.php";
 
// Define variables and initialize with empty values
$nom = $description = $prix = $categorie=$actif = "";
$nom_err = $description_err = $prix_err = $categorie_err =$actif_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate nom
    $input_nom = protect_montexte($_POST["nom"]);
    if(empty($input_nom)){
        $nom_err = "Entrer un nom valide.";
    } else{
        $nom = $input_nom;
    }
    
    // Validate description
    $input_description = protect_montexte($_POST["description"]);
    if(empty($input_description)){
        $description_err = "Entrer une description valise.";     
    } else {
        $description = $input_description;
    }
    
    // Validate prix
    $input_prix = protect_montexte($_POST["prix"]);
    if(empty($input_prix)){
        $prix_err = "Entrer un prix valide.";     
    } else {
        $prix = $input_prix;
    }

    // Validate categorie
    $input_categorie = protect_montexte($_POST["categorie"]);
    if(empty($input_categorie)){
        $categorie_err = "Entrer une categorie valide.";     
    } else {
        $categorie = $input_categorie;
    }

    // Validate actif
    $input_actif = protect_montexte($_POST["actif"]);
    if($input_actif!=(int)$input_actif){
        $actif_err = "Entrer 1 pour en vente ou 0 pour en rupture de stock.";  
    }else {
        $actif = $input_actif;
    }
    
    // Check input errors before inserting in database
    if(empty($nom_err) && empty($description_err) && empty($prix_err) && empty($categorie_err)&& empty($actif_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO articles (nom, description, prix,categorie,actif) VALUES (?, ?, ?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssdsi", $param_nom, $param_description, $param_prix,$param_categorie,$param_actif);
            
            // Set parameters
            $param_nom = $nom;
            $param_description = $description;
            $param_prix = $prix;
            $param_categorie = $categorie;
            $param_actif = $actif;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                    <h2 class="mt-5">Nouvel Utilisateur</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="nom" class="form-control <?php echo (!empty($nom_err)) ? 'is-invalid' : ''; ?>" 
                            value="<?php echo $nom; ?>">
                            <span class="invalid-feedback"><?php echo $nom_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input name="description" class="form-control <?php echo (!empty($description_err)) ? 'is-invalid' : ''; ?>"
                            value="<?php echo $description; ?>"></input> <span class="invalid-feedback"><?php echo $description_err;?></span>
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
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Annuler</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>