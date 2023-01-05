#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

DROP DATABASE IF EXISTS SCRIPT_CDC;

CREATE DATABASE IF NOT EXISTS SCRIPT_CDC;

USE SCRIPT_CDC;

#------------------------------------------------------------
# Table: CLIENT
#------------------------------------------------------------

CREATE TABLE CLIENT(
        idClient Int  Auto_increment  NOT NULL ,
        nom      Varchar (50) NOT NULL ,
        prenom   Varchar (25) NOT NULL ,
        email    Varchar (50) NOT NULL ,
        pwd      Varchar (50) NOT NULL
	,CONSTRAINT CLIENT_PK PRIMARY KEY (idClient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: COMMANDE
#------------------------------------------------------------

CREATE TABLE COMMANDE(
        idCommande   Int  Auto_increment  NOT NULL ,
        numero       Varchar (50) NOT NULL ,
        dateCommande Date NOT NULL ,
        idClient     Int NOT NULL
	,CONSTRAINT COMMANDE_PK PRIMARY KEY (idCommande)

	,CONSTRAINT COMMANDE_CLIENT_FK FOREIGN KEY (idClient) REFERENCES CLIENT(idClient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CATEGORIE
#------------------------------------------------------------

CREATE TABLE CATEGORIE(
        idCategorie Int  Auto_increment  NOT NULL ,
        nom         Varchar (50) NOT NULL
	,CONSTRAINT CATEGORIE_PK PRIMARY KEY (idCategorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PRODUIT
#------------------------------------------------------------

CREATE TABLE PRODUIT(
        idProduit   Int  Auto_increment  NOT NULL ,
        nom         Varchar (50) NOT NULL ,
        ref         Varchar (50) NOT NULL ,
        idCategorie Int
	,CONSTRAINT PRODUIT_PK PRIMARY KEY (idProduit)

	,CONSTRAINT PRODUIT_CATEGORIE_FK FOREIGN KEY (idCategorie) REFERENCES CATEGORIE(idCategorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: LigneCommande
#------------------------------------------------------------

CREATE TABLE LigneCommande(
        idLigneCommande Int  Auto_increment  NOT NULL ,
        idProduit  Int NOT NULL ,
        idCommande Int NOT NULL ,
        quantite   Int NOT NULL 
	,CONSTRAINT LigneCommande_PK PRIMARY KEY (idLigneCommande)

	,CONSTRAINT LigneCommande_PRODUIT_FK FOREIGN KEY (idProduit) REFERENCES PRODUIT(idProduit)
	,CONSTRAINT LigneCommande_COMMANDE0_FK FOREIGN KEY (idCommande) REFERENCES COMMANDE(idCommande)
)ENGINE=InnoDB;

