<?php 

$classArticle = new article();

$article = $classArticle->getAllArticle();
    if(isset($_POST['submitDelet'])) {
        $classArticle->id = $_POST['submitDelet'];
        $classArticle->deleteArticle();
        header('location: index.php');
 }