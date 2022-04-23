<?php

if(isset($_POST['submit'])){
    $article = new article();

    $formError = [];
    $formSuccess = array();

    if(isset($_POST['list']) && !empty($_POST['list'])){
        $list = htmlspecialchars($_POST['list']);
    }else{
        $formError['list'] = "Saisir quelque chose";
    }

    if(empty($formError)){
        $article->list = $list;
        $article->createArticle();
    }
}