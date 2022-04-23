<?php
class article extends database{
    public $list;

    public function __construct(){
        parent::__construct();
    }

    public function createArticle(){
        $req = 'INSERT INTO `list`(`list`) VALUES (:list);';
        $insertArticle = $this->db->prepare($req);
        $insertArticle->bindValue(':list', $this->list, PDO::PARAM_STR);
        return $insertArticle->execute();
    }

    public function updateArticle() {
        $req = 'UPDATE `list` SET `list`=:list WHERE `id`=:id;';
        $article = $this->db->prepare($req);
        $article->bindValue(':list', $this->list, PDO::PARAM_STR);
        $article->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $article->execute();
    }

    public function deleteArticle() {
        $query = 'DELETE FROM `list` WHERE `id`=:id;';
        $article = $this->db->prepare($query);
        $article->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $article->execute();
    }


    public function getAllArticle(){
        $article = 'SELECT * FROM `list`';
        $selectArticle = $this->db->query( $article);
        $selectArticle->execute();
        return $selectArticle->fetchAll(PDO::FETCH_OBJ);
         
    }
    
    public function getArticleById(){
        $query = 'SELECT * FROM `list` WHERE `id`=:id ;';
        $find = $this->db->prepare($query);
        $find->bindValue(':id', $this->id, PDO::PARAM_INT);
        $find->execute();
        return $find->fetch(PDO::FETCH_OBJ); 
    }

}