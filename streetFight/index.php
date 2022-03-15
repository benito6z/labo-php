<?php
session_start();
include 'model/config.php';
include 'model/database.php';
include 'model/personnage.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StreetFight</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?home">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php?create">Create</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?list">List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?fightest">FighTest</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <?php
            //Si home existe dans l'url alors affiche moi la vue Home
    if(isset($_GET['home'])){
        include 'view/home.php';
    }
    else if (isset($_GET['create'])){
        include 'controller/create.php';
        include 'view/create.php';
    }else if (isset($_GET['fightest'])){
      include 'controller/fighTest.php';
        include 'view/fighTest.php';
    }else if (isset($_GET['list'])){
        include 'controller/list.php';
        include 'view/list.php';
    }else if (isset($_GET['id']) || isset($_GET['modify'])){
      include 'controller/personnage.php';
      include 'view/personnage.php';
    }
    //Sinon affiche ma vue Home
    else{
        include 'view/home.php';
    }
    ?>
            </div>
        </div>
    </div>
    <footer>
    </footer>
</body>
</html>