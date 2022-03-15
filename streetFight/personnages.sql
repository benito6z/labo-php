CREATE DATABASE `streetfight` CHARACTER SET utf8;

USE `streetfight`;

#------------------------------------------------------------
# Table: personnages
#------------------------------------------------------------

CREATE TABLE personnages
(
        id         Int  Auto_increment  NOT NULL PRIMARY KEY ,
        surname       Varchar (20) NOT NULL ,
        atk       Int(2) NOT NULL DEFAULT 99,
        life       Varchar (3) NOT NULL ,
        color          Varchar (15) NOT NULL
)ENGINE=InnoDB;
