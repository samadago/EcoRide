#------------------------------------------------------------
# Table: utilisateur
#------------------------------------------------------------
CREATE TABLE utilisateur (
    utilisateur_id Int Auto_increment NOT NULL,
    nom Varchar(50),
    prenom varchar(50),
    email VARCHAR(50),
    password VARCHAR(50),
    telephone VARCHAR(50),
    adresse VARCHAR(50),
    date_naissance VARCHAR(50),
    photo BLOB,
    pseudo VARCHAR(50),
    CONSTRAINT utilisateur_PK PRIMARY KEY (utilisateur_id)
);

#------------------------------------------------------------
# Table: configuration
#------------------------------------------------------------
CREATE TABLE configuration (
    id_configuration Int Auto_increment NOT NULL,
    utilisateur_id Int NOT NULL,
    CONSTRAINT configuration_PK PRIMARY KEY (id_configuration),
    CONSTRAINT configuration_utilisateur_FK FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (utilisateur_id)
);

#------------------------------------------------------------
# Table: parametre
#------------------------------------------------------------
CREATE TABLE parametre (
    parametre_id Int Auto_increment NOT NULL,
    propriete Varchar(50),
    valeur VARCHAR(50),
    id_configuration Int NOT NULL,
    CONSTRAINT parametre_PK PRIMARY KEY (parametre_id),
    CONSTRAINT parametre_configuration_FK FOREIGN KEY (id_configuration) REFERENCES configuration (id_configuration)
);

#------------------------------------------------------------
# Table: marque
#------------------------------------------------------------
CREATE TABLE marque (
    marque_id Int Auto_increment NOT NULL,
    libelle Varchar(50),
    CONSTRAINT marque_PK PRIMARY KEY (marque_id)
);

#------------------------------------------------------------
# Table: voiture
#------------------------------------------------------------
CREATE TABLE voiture (
    voiture_id Int Auto_increment NOT NULL,
    modele Varchar(50),
    utilisateur_id Int NOT NULL,
    marque_id Int NOT NULL,
    immatriculation VARCHAR(50),
    energie VARCHAR(50),
    couleur VARCHAR(50),
    date_premiere_immatriculation VARCHAR(50),
    CONSTRAINT voiture_PK PRIMARY KEY (voiture_id),
    CONSTRAINT voiture_utilisateur_FK FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (utilisateur_id),
    CONSTRAINT voiture_marque_FK FOREIGN KEY (marque_id) REFERENCES marque (marque_id)
);

#------------------------------------------------------------
# Table: covoiturage
#------------------------------------------------------------
CREATE TABLE covoiturage (
    covoiturage_id Int Auto_increment NOT NULL,
    date_depart Date,
    heure_depart DATE,
    date_arrivee DATE,
    heure_arrivee VARCHAR(50),
    lieu_arrivee VARCHAR(50),
    statut VARCHAR(50),
    nb_place INT(50),
    prix_personne FLOAT,
    voiture_id Int NOT NULL,
    CONSTRAINT covoiturage_PK PRIMARY KEY (covoiturage_id),
    CONSTRAINT covoiturage_voiture_FK FOREIGN KEY (voiture_id) REFERENCES voiture (voiture_id)
);

#------------------------------------------------------------
# Table: avis
#------------------------------------------------------------
CREATE TABLE avis (
    avis_id Int Auto_increment NOT NULL,
    commentaire Varchar(50),
    note VARCHAR(50),
    statut VARCHAR(50),
    CONSTRAINT avis_PK PRIMARY KEY (avis_id)
);

#------------------------------------------------------------
# Table: role
#------------------------------------------------------------
CREATE TABLE role (
    role_id Int Auto_increment NOT NULL,
    libelle Varchar(50),
    CONSTRAINT role_PK PRIMARY KEY (role_id)
);

#------------------------------------------------------------
# Table: possede
#------------------------------------------------------------
CREATE TABLE possede (
    role_id Int NOT NULL,
    utilisateur_id Int NOT NULL,
    CONSTRAINT possede_PK PRIMARY KEY (role_id, utilisateur_id),
    CONSTRAINT possede_role_FK FOREIGN KEY (role_id) REFERENCES role (role_id),
    CONSTRAINT possede_utilisateur_FK FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (utilisateur_id)
);

#------------------------------------------------------------
# Table: participe
#------------------------------------------------------------
CREATE TABLE participe (
    covoit_id Int NOT NULL,
    utilisateur_id Int NOT NULL,
    CONSTRAINT participe_PK PRIMARY KEY (covoit_id, utilisateur_id),
    CONSTRAINT participe_covoiturage_FK FOREIGN KEY (covoit_id) REFERENCES covoiturage (covoit_id),
    CONSTRAINT participe_utilisateur_FK FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (utilisateur_id)
);

#------------------------------------------------------------
# Table: depose
#------------------------------------------------------------
CREATE TABLE depose (
    avis_id Int NOT NULL,
    utilisateur_id Int NOT NULL,
    CONSTRAINT depose_PK PRIMARY KEY (avis_id, utilisateur_id),
    CONSTRAINT depose_avis_FK FOREIGN KEY (avis_id) REFERENCES avis (avis_id),
    CONSTRAINT depose_utilisateur_FK FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (utilisateur_id)
);