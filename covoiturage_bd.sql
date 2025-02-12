-- MySQL dump 10.13  Distrib 8.0.41, for Linux (aarch64)
--
-- Host: localhost    Database: covoiturage_bd
-- ------------------------------------------------------
-- Server version	8.0.41

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `avis`
--

DROP TABLE IF EXISTS `avis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `avis` (
  `avis_id` int NOT NULL AUTO_INCREMENT,
  `commentaire` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `note` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `statut` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`avis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avis`
--

LOCK TABLES `avis` WRITE;
/*!40000 ALTER TABLE `avis` DISABLE KEYS */;
INSERT INTO `avis` VALUES (1,'passer un bon trajet','4','client'),(2,'excellent voyage','4','client'),(3,'un temps magnifique pendant le voyage','5','client');
/*!40000 ALTER TABLE `avis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configuration`
--

DROP TABLE IF EXISTS `configuration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `configuration` (
  `id_configuration` int NOT NULL AUTO_INCREMENT,
  `utilisateur_id` int NOT NULL,
  PRIMARY KEY (`id_configuration`),
  KEY `configuration_utilisateur_FK` (`utilisateur_id`),
  CONSTRAINT `configuration_utilisateur_FK` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`utilisateur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configuration`
--

LOCK TABLES `configuration` WRITE;
/*!40000 ALTER TABLE `configuration` DISABLE KEYS */;
INSERT INTO `configuration` VALUES (1,3);
/*!40000 ALTER TABLE `configuration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `covoiturage`
--

DROP TABLE IF EXISTS `covoiturage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `covoiturage` (
  `covoiturage_id` int NOT NULL AUTO_INCREMENT,
  `date_depart` date DEFAULT NULL,
  `heure_depart` date DEFAULT NULL,
  `date_arrivee` date DEFAULT NULL,
  `heure_arrivee` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lieu_arrivee` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `statut` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nb_place` int DEFAULT NULL,
  `prix_personne` float DEFAULT NULL,
  `voiture_id` int NOT NULL,
  `lieu_depart` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`covoiturage_id`),
  KEY `covoiturage_voiture_FK` (`voiture_id`),
  CONSTRAINT `covoiturage_voiture_FK` FOREIGN KEY (`voiture_id`) REFERENCES `voiture` (`voiture_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `covoiturage`
--

LOCK TABLES `covoiturage` WRITE;
/*!40000 ALTER TABLE `covoiturage` DISABLE KEYS */;
INSERT INTO `covoiturage` VALUES (1,'2025-03-25','2012-00-00','2025-03-25','15:30:00','lyon','chauffeur',2,20,1,'paris'),(2,'2025-03-10','0008-00-00','2025-03-10','10:30:00','nice','chauffeur',1,15,4,'marseille'),(3,'2025-03-05','2010-00-00','2025-03-05','12:10:00','lille','chauffeur',3,12,5,'paris'),(4,'2025-02-05','2014-00-00','2025-02-05','18:30:00','nice','chauffeur',2,17,3,'bordeaux'),(5,'2025-03-13','0000-00-00','2025-03-13','14:30:00','lyon','chauffeur',3,25,2,'toulouse');
/*!40000 ALTER TABLE `covoiturage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marque`
--

DROP TABLE IF EXISTS `marque`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `marque` (
  `marque_id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`marque_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marque`
--

LOCK TABLES `marque` WRITE;
/*!40000 ALTER TABLE `marque` DISABLE KEYS */;
INSERT INTO `marque` VALUES (1,'2222eee8522'),(2,'3333ccc9272'),(3,'2111ddd8030'),(4,'1111eee6632'),(5,'4444fff3235');
/*!40000 ALTER TABLE `marque` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parametre`
--

DROP TABLE IF EXISTS `parametre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parametre` (
  `parametre_id` int NOT NULL AUTO_INCREMENT,
  `propriete` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `valeur` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_configuration` int NOT NULL,
  PRIMARY KEY (`parametre_id`),
  KEY `parametre_configuration_FK` (`id_configuration`),
  CONSTRAINT `parametre_configuration_FK` FOREIGN KEY (`id_configuration`) REFERENCES `configuration` (`id_configuration`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parametre`
--

LOCK TABLES `parametre` WRITE;
/*!40000 ALTER TABLE `parametre` DISABLE KEYS */;
INSERT INTO `parametre` VALUES (1,'','liliane ledoux',1);
/*!40000 ALTER TABLE `parametre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `possede`
--

DROP TABLE IF EXISTS `possede`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `possede` (
  `role_id` int NOT NULL,
  `utilisateur_id` int NOT NULL,
  PRIMARY KEY (`role_id`,`utilisateur_id`),
  KEY `possede_utilisateur_FK` (`utilisateur_id`),
  CONSTRAINT `possede_role_FK` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`),
  CONSTRAINT `possede_utilisateur_FK` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`utilisateur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `possede`
--

LOCK TABLES `possede` WRITE;
/*!40000 ALTER TABLE `possede` DISABLE KEYS */;
INSERT INTO `possede` VALUES (1,1);
/*!40000 ALTER TABLE `possede` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role` (
  `role_id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,'1');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `utilisateur` (
  `utilisateur_id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_admin` int NOT NULL DEFAULT '0',
  `telephone` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `adresse` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_naissance` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo` blob,
  `pseudo` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`utilisateur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` VALUES (1,'sasa','didi','mukarugwirodiane@gmail.com','$argon2id$v=19$m=65536,t=4,p=1$Rllua1NweTlFVlp0TVF5cA$4UuV+1omTsesCCJLQUiEm/btlHQIeByG9whcg9MaXo8',0,'0615947878','8 rue castor paris 16','2024-09-05',NULL,'sam'),(3,'gaga','line','magagarine@gmail.com','$argon2id$v=19$m=65536,t=4,p=1$UFozNllBTkdHb1ZoZTdKYw$YfaTgiZQrYbBJqI/5BtlRhXhgWY+Fl/5+N9k6XO4mgk',0,'0615947878','8 rue castor paris 16','2022-07-15',NULL,'gali'),(4,'ledoux','liliane','lilidoux@gmail.com','$argon2id$v=19$m=65536,t=4,p=1$amhidG9LbWpyUk5KaEtSVA$PSqb9RVLiL+C1VSTQbfHw5wKLV9uOMAFoVAwdNab+mc',0,'0615947878','8 rue castor paris 16','2016-06-08',NULL,'lili'),(5,'fol','david','davidfol@gmail.com','$argon2id$v=19$m=65536,t=4,p=1$ZDM3TnNKQ0FMYmh4dFhYTQ$XU4IqWI+O87thjdOX7lcTC4ylvbWPMm4sWGVC2twoRE',0,'0620203030','9 rue du bel air paris ','1980-09-15',NULL,'dadi'),(6,'matte','luc','matteluc@gmail.com','$argon2id$v=19$m=65536,t=4,p=1$VnBmTi5RUGxmZklaSTB0UA$6I0AkMBBbDODHGIAjN+MvAtmg4dfWBEPFhb3R0LeeS4',0,'0617151520','3rue de ronsard 59 lille ','1989-10-08',NULL,'lulu'),(7,'bevery','angel','bevery@gmail.com','$argon2id$v=19$m=65536,t=4,p=1$dVhUcUdkUC5Eb3RmUlloRw$B71lpejdtnu5hdpMFYitnncYyLAzsUWFeMpj0MILaRk',0,'0630302580',' 2 rue du val 33 bordeaux  ','1986-05-25',NULL,'beby'),(8,'beni','anne','benanne@gmail.com','$argon2id$v=19$m=65536,t=4,p=1$ck5lZXFIMEo4aXpPdmtXZw$fwxCVVF7nx88U0P6SPO83UAOhtgk85bvxbQH4bmRamA',0,'0645606078',' 7 rue louise michel 31 toulouse','1994-07-23',NULL,'bena'),(9,'Bahi','Yassine','yassine.test@ecoride.com','$argon2id$v=19$m=65536,t=4,p=1$NHpneHpsVEoxSXdmN2NCZg$pzJiTFqZXBgDjZdAOVlOqpiafWRxZJ47Rfmnx7zJl0o',1,'01234567','1 rue senia','1992-12-12',NULL,'yassinos'),(10,'toto','titi','toto.titi@ecoride.com','$argon2id$v=19$m=65536,t=4,p=1$dkJQeU5HVzRPRkpaSmtvNw$npJJ2/tH69nHC6ld5BDFURoLXeawgJ8bfpLJ+VL/834',0,'13938104747','12 rue du PHP','1990-01-01',NULL,'tototiti');
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `voiture` (
  `voiture_id` int NOT NULL AUTO_INCREMENT,
  `modele` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `utilisateur_id` int NOT NULL,
  `marque_id` int NOT NULL,
  `immatriculation` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `energie` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `couleur` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_premiere_immatriculation` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`voiture_id`),
  KEY `voiture_utilisateur_FK` (`utilisateur_id`),
  KEY `voiture_marque_FK` (`marque_id`),
  CONSTRAINT `voiture_marque_FK` FOREIGN KEY (`marque_id`) REFERENCES `marque` (`marque_id`),
  CONSTRAINT `voiture_utilisateur_FK` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`utilisateur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voiture`
--

LOCK TABLES `voiture` WRITE;
/*!40000 ALTER TABLE `voiture` DISABLE KEYS */;
INSERT INTO `voiture` VALUES (1,'yaris',4,1,'eg-020-fr','hybride','noir','2023'),(2,'golf',5,2,'eg-050-fr','hybride','rouge','2022'),(3,'bmw',6,3,'eg-035-fr','essence','bleu','2022'),(4,'volvo',7,4,'eg-045-fr','essence','noir','2021'),(5,'tesla',8,5,'eg-060-fr','electrique','blanc','2024');
/*!40000 ALTER TABLE `voiture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'covoiturage_bd'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-02-12 23:28:17
