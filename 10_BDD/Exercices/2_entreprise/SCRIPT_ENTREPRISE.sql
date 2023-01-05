#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

DROP DATABASE IF EXISTS SCRIPT_ENTREPRISE;

CREATE DATABASE IF NOT EXISTS SCRIPT_ENTREPRISE;

USE SCRIPT_ENTREPRISE;

#------------------------------------------------------------
# Table: CLIENT
#------------------------------------------------------------

CREATE TABLE EMPLOYE(
        idEmploye Int  Auto_increment  NOT NULL ,
        nom      Varchar (50) NOT NULL ,
        prenom   Varchar (25) NOT NULL ,
        sexe    Varchar (1) NOT NULL ,
        departement  Varchar (50) NOT NULL ,
        salaire int NOT NULL ,
        dateContrat Date NOT NULL 
	,CONSTRAINT EMPLOYE_PK PRIMARY KEY (idEmploye)
)ENGINE=InnoDB;
