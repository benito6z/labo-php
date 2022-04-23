<?php 

$classArticle = new article();

$article = $classArticle->getAllArticle();

if(isset($_GET['idArticle'])){
   $classArticle->id=$_GET['idArticle'];
   $articleV = $classArticle->getArticleById();
   $_SESSION['idArticle'] =  $articleV->id;
}

if(isset($_POST['submitModif'])){
   $classArticle->list=$_POST['list'];
   $classArticle->id = $_SESSION['idArticle'];
   $classArticle->updateArticle();
   header('location:index.php?home');
   exit();
}