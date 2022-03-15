<?php
$select = ["choix", "red" => "rouge", "blue" => "bleu"];
//Je verifier la soumission de mon formulaire en specifiant le name du btn lors de la condition global du formulaire
if(isset($_POST['btnCreate'])){
    $personnages = new personnages();
    //Je declare des tableau qui vont stocker les données du formulaire soit avec success ou d'erreur
    $formError = [];
    $formSuccess = array();
    //J'entame donc mes verification sur chaque donné du formulaire en analysant si la donnée est soumise et qu'elle n'est pas soumise a vide
   if(isset($_POST['surname']) && !empty($_POST['surname'])){
       $surname = htmlspecialchars($_POST['surname']);
   }else{
       //Sinon j'affiche un message d'erreur
       $formError['surname'] = "Veuillez saisir un nom";
   }
   /* if(isset($_POST['color']) && !empty($_POST['color'])){
        $color = htmlspecialchars($_POST['color']);
    }else{
        //Sinon j'affiche un message d'erreur
        $formError['color'] = "Veuillez entrer une color";
    }*/

    if(empty($formError)){
        $formSuccess['success'] = "Felicitation votre personnage a ete correctement creer !";
        $personnages->surname = $surname;
        $personnages->atk = 99;
        $personnages->life = '99';
        $personnages->color = 'rouge';
        $personnages->createPersonnage();
        header('location:index.php?list');
    }
}
?>