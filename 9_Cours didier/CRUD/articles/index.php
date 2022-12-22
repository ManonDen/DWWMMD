<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>read (lecture)</title>
    <style>
    .wrapper{
        width: 800px;
        margin:0 auto;

    }
    /* table tr td:last-child{
        width:120px;
    } */
    .td{
        display: block;
        width:120px;
    }
    </style>

</head>
<body>
    <h1 class="text-center">tableau de bord</h1>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2>Utilisateurs</h2>
                        <a href="create.php" class="btn btn-success pull-right">
                            <i class="fa fa-plus"></i>New User
                        </a>
                    </div>
                    <!-- include ficher cnx bdd -->
                    <?php
require_once "../php/config.php";
                    // requete
                    $sql = "SELECT * FROM articles";
                    // requete preparer c'est avec le ? dans la requete

                    // on fait directement ça car sql n'est pas une requête preparer
                    // il va chercher tous les enregistrements
                    if ($result=mysqli_query($link,$sql)){
                        // on recupere tous les lignes de m'a et on verifie qu'il y a bien qqchose dedans
                        if(mysqli_num_rows($result)>0){
                            // creation de notre table
                            echo" <table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Nom</th>";
                                        echo "<th>Description</th>";
                                        echo "<th>Prix</th>";
                                        echo "<th>Categorie</th>";
                                        echo "<th>Actif</th>";
                                    echo "</tr>";
                                echo "</thead> ";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>".$row["id"]."</td>";
                                        echo "<td>".$row["nom"]."</td>";
                                        echo "<td>".$row["description"]."</td>";
                                        echo "<td>".$row["prix"]."</td>";
                                        echo "<td>".$row["categorie"]."</td>";
                                        echo "<td>".$row["actif"]."</td>";
                                        echo "<td>";
                                        // bouton vue
                                        echo '
                                        <a href="read.php?id='.$row['id'].'"class ="mr-3 title="vue" data-toggle="tooltip">
                                            <span class="fa fa-eye">
                                            </span>
                                        </a>';
                                        // bouton update
                                        echo '
                                        <a href="update.php?id='.$row["id"].'"class ="mr-3" title="mise a jour" data-toggle="tooltip">
                                            <span class="fa fa-pencil">
                                            </span>
                                        </a>';
                                        // bouton delete
                                        echo '
                                        <a href="delete.php?id='.$row['id'].'"class ="mr-3" title="delete" data-toggle="tooltip">
                                            <span class="fa fa-trash">
                                            </span>
                                        </a>';
                                    echo '</td>';
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                            echo "</table>";
                            // libère la mémoire
                            mysqli_free_result($result);
                        }
                        // controle erreur (si on a pas de données pas d'id)
                        else{
                            echo "Oups, pas d'enregistrement trouvé, veuillez réessayer ultérieurement";
                        }
                        
                    }else{
                        echo"Oups, problème de connexion à la BDD, veuillez réessayer ultérieurement";
                    }
                    mysqli_close($link);
                    
                    ?>
                </div>
            </div>

        </div>
    </div>

</body>
</html>


