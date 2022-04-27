<?php

class image extends database {

    public $nom;
    public $titre;

    public function __construct() {
        parent::__construct();
    }

    public function insertImages() {
        $requete = 'INSERT INTO `file`(`nom` ,`titre`) VALUES (:nom, :titre)';
        //$requete = 'INSERT INTO file (name) VALUES (?)');
        $insert = $this->db->prepare($requete);
        $insert->bindValue(':nom', $this->name, PDO::PARAM_STR);
        $insert->bindValue(':titre', $this->titre, PDO::PARAM_STR);
        return $insert->execute();
    }

   

    public function getImages(){
        $query = 'SELECT * FROM `file`';
        $image = $this->db->query( $query);
        return $image->fetchAll(PDO::FETCH_OBJ);
         
    }

}