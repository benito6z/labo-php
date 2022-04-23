<?php
include 'modele/config.php';
include 'modele/database.php';
include 'modele/article.php';
?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>todoList</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php
    if (isset($_GET['viewUp'])) {
      include 'controller/controllerUp.php';
      include 'view/viewUp.php';
    }else {
      include 'controller/controllerList.php';
      include 'controller/controllerListView.php';
      include 'controller/controllerDel.php';
      include 'view/home.php';
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>