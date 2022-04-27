<?php

include 'model/config.php';
include 'model/bdd.php';
include 'model/image.php';
include 'controller/controller.php';
include 'controller/controllerGet.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

    </head>
<body>
    <h2>Ajouter une image</h2>
    <form action="index.php" method="POST" enctype="multipart/form-data">
    
        <label for="file">Fichier</label>
        <input type="file" name="file">

        <label for="file">titre</label>
        <input type="text" name="titre">

        <button type="submit" name="submit">Enregistrer</button>
    </form>
    <h2>Mes images</h2>
    <?php 



        if(!empty($image)){
            foreach($image as $classImage ){
                echo $classImage -> titre."<img src='./upload/".$classImage -> nom."' width='150px' ><br>";
            }
        }
    ?>
</body>
</html>