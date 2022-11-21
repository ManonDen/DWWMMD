
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body >
    <form action="convert.php" method="post" style="width:400px;heigth:300px"class="m-auto bg-light border border-primary  px-5 mt-5">
        <p class="text-center fw-bolder pt-2">Convertisseur de monnaie</p>
        <div class="row mb-4">
            <label class="p-auto pt-2 col">Montant (€) :</label>
            <input style="width=20px; heigth: 20px;" class="form-control col rounded-0 border border-secondary"  name="Input1">
        </div>
        <div class="row mb-4">  
            <label class="p-auto pt-2 col">Convertir en :</label>
            <select  class="form-control col rounded-0 border border-secondary" name="Input2">
            <option selected>Open</option>
                <?php
                    $monnaies=array("Livre britannique"=>0.87430143,"Dollar des États-Unis"=>1.0423948,
                    "Dollar canadien"=>1.3800676,"Yen japonais"=>145.24266,"Mexican Pesos"=>20.153923,
                    "Moroccan Dirhams"=>11.122638,"Roupies indiennes"=>84.690273,);

                    foreach ($monnaies as $key =>$value){
                        echo '<option value="'.$key.'">'.$key.'</option>';
                    }
                ?>
            </select>
        </div>

        <?php
        require "fonctions.php";
        $garde="";
        if (isset($_POST['bouton'])){
            $garde=convertir($monnaies,$_POST["Input1"],$_POST["Input2"]);
        }
        ?>

        <div class="row mb-4">  
        <label class="p-auto pt-2 col ">Résultat :</label>
            <input style="width=20px; heigth: 20px;" class="form-control col rounded-0 border border-secondary" value="<?php echo $garde ?>" name="Output">
        </div>

        <div style="height:50px" class="position-relative ">
            <input class="position-absolute top-50 start-50 translate-middle " type="submit" name="bouton" value="Convertir"/>
        </div>
    </form>

   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>
