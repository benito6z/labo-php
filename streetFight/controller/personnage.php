<?php 
//condition qui vérifie si l'id existe bien en paramétre URL
if (isset($_GET['id']) && !empty($_GET['id'])){
    $classPersonnages = new personnages();
    $id = htmlspecialchars($_GET['id']);
    $classPersonnages->id = $id;
    $perso = $classPersonnages->getPersonnageById();
    if(empty($_SESSION['token'])){
        $_SESSION['token'] = $classPersonnages->generateCSRFToken();
    }

    //Condition qui me permet d'effacer un personnage en base de donnée
    if(isset($_POST['btnDelete'])){
     $classPersonnages->deletePersonnage();
     header('location:index.php?list');
    }

    //Condition qui permet de modifier un personnage
    if(isset($_POST['btnModify'])){
        //Je declare des tableau qui vont stocker les données du formulaire soit avec success ou d'erreur
        $formError = [];
        $formSuccess = array();
        //J'entame donc mes verification sur chaque donné du formulaire en analysant si la donnée est soumise et qu'elle n'est pas soumise a vide
       if(isset($_POST['atk']) && !empty($_POST['atk'])){
           $atk = htmlspecialchars($_POST['atk']);
       }else{
           //Sinon j'affiche un message d'erreur
           $formError['atk'] = "Veuillez saisir une valeur d'atk";
       }
       if(isset($_POST['life']) && !empty($_POST['life'])){
        $life = htmlspecialchars($_POST['life']);
    }else{
        //Sinon j'affiche un message d'erreur
        $formError['life'] = "Veuillez entrer une valeur de life";
    }
        if(isset($_POST['color']) && !empty($_POST['color'])){
            $color = htmlspecialchars($_POST['color']);
        }else{
            //Sinon j'affiche un message d'erreur
            $formError['color'] = "Veuillez entrer une color";
        }
        //Si mon tableau d'erreur et vide alors je procède a l'envoie en base de donnée
        if(empty($formError)){
            $classPersonnages->surname = $perso->surname;
            $classPersonnages->atk = $atk;
            $classPersonnages->life = $life;
            $classPersonnages->color = $color;
            $classPersonnages->updatePersonnage();
            $formSuccess['success'] = "Felicitation votre personnage a ete correctement modifier !";
            header('location:index.php?id='.$perso->id);
            $_SESSION['token'] = $classPersonnages->generateCSRFToken();
        }
    }
}else{
    //Sinon redirection sur le Home
header('location:index.php');
}