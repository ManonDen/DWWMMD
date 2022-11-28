<?php ob_start()?>
<h2>Page de connexion</h2>

<form action="" method="post" style="width:500px"class="m-auto bg-light border border-primary py-3  px-5 mt-5">
    <div class="fw-bolder fs-3 text-center mb-4">Connexion :</div>

    <div>
        <?php 
            echo isset($_POST["bouton"])? $_POST["pseudo"]." est connecté(e)." :"";
        ?>
    </div>

    <div>

        <div class="mb-3 row">
            <label name="pseudo" class="form-label col">Pseudo : </label>
            <input type="text" class="form-control col" name="pseudo" >
        </div>

        <div class="mb-3 row">
            <label name="password" class="form-label col">Mot de passe :</label>
            <input type="password" class="form-control col" name="mdp" ></input>
        </div>

        <div class="position-relative mt-2 pt-5">
        <input type="submit" class="position-absolute top-50 start-50 translate-middle" name="bouton" value="Connexion">
        </div>
    </div>

    
</form>




<?php
$titre= "Exercices difficiles";
$content= ob_get_clean();
require "../../Global/general/template.php";
?>