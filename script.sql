CREATE TABLE configuration(
id_configuration int PRIMARY KEY NOT NULL AUTO_INCREMENT,

);

CREATE TABLE Utilisateur (
    utilisateur_id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom varchar(50),
    prenom varchar(50),
    email VARCHAR(50),
    password VARCHAR(50),
    telephone VARCHAR(50),
    adresse VARCHAR(50),
    date_naissance VARCHAR(50),
    photo BLOB,
    pseudo VARCHAR(50), 
);

CREATE TABLE role (
role_id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
libelle VARCHAR(50),

);

CREATE TABLE avis (
avis_id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
commentaire VARCHAR (50),
note VARCHAR (50),
statut VARCHAR (50), 

);

CREATE TABLE Covoiturage (
covoiturage_id  int PRIMARY KEY NOT NULL AUTO_INCREMENT,
date_depart DATE,
heure_depart DATE,
date_arrivee DATE,
heure_arrivee VARCHAR (50),
lieu_arrivee VARCHAR (50),
statut VARCHAR (50),
nb_place INT (50),
prix_personne FLOAT,

);

CREATE TABLE Voiture (
voiture_id  int PRIMARY KEY NOT NULL AUTO_INCREMENT,
modele VARCHAR (50),
immatriculation VARCHAR (50),
energie VARCHAR (50),
couleur VARCHAR (50),
date_premiere_immatriculation VARCHAR (50),

);

CREATE TABLE parametre(
parametre_id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
propriete VARCHAR (50),
valeur VARCHAR (50),
);

CREATE TABLE Marque(
libelle VARCHAR (50),

);





