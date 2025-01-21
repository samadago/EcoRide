-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 08 jan. 2025 à 17:38
-- Version du serveur : 10.5.20-MariaDB
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */; 
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `covoiturage_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `avis_id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` varchar(50) DEFAULT NULL,
  `note` varchar(50) DEFAULT NULL,
  `statut` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`avis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`avis_id`, `commentaire`, `note`, `statut`) VALUES
(1, 'passer un bon trajet', '4', 'client'),
(2, 'excellent voyage', '4', 'client'),
(3, 'un temps magnifique pendant le voyage', '5', 'client');

-- --------------------------------------------------------

--
-- Structure de la table `configuration`
--

DROP TABLE IF EXISTS `configuration`;
CREATE TABLE IF NOT EXISTS `configuration` (
  `id_configuration` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateur_id` int(11) NOT NULL,)
  PRIMARY KEY (`id_configuration`),
  KEY `configuration_utilisateur_FK` (`utilisateur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `configuration`
--

INSERT INTO `configuration` (`id_configuration`, `utilisateur_id`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `covoiturage`
--

DROP TABLE IF EXISTS `covoiturage`;
CREATE TABLE IF NOT EXISTS `covoiturage` (
  `covoiturage_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_depart` date DEFAULT NULL,
  `heure_depart` date DEFAULT NULL,
  `date_arrivee` date DEFAULT NULL,
  `heure_arrivee` varchar(50) DEFAULT NULL,
  `lieu_arrivee` varchar(50) DEFAULT NULL,
  `statut` varchar(50) DEFAULT NULL,
  `nb_place` int(50) DEFAULT NULL,
  `prix_personne` float DEFAULT NULL,
  `voiture_id` int(11) NOT NULL,
  `lieu_depart` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`covoiturage_id`),
  KEY `covoiturage_voiture_FK` (`voiture_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `covoiturage`
--

INSERT INTO `covoiturage` (`covoiturage_id`, `date_depart`, `heure_depart`, `date_arrivee`, `heure_arrivee`, `lieu_arrivee`, `statut`, `nb_place`, `prix_personne`, `voiture_id`, `lieu_depart`) VALUES
(1, '2025-03-25', '12:00:00', '2025-03-25', '15:30:00', 'lyon', 'chauffeur', 2, 20, 1, 'paris'),
(2, '2025-03-10', '8:00:00', '2025-03-10', '10:30:00', 'nice', 'chauffeur', 1, 15, 4, 'marseille'),
(3, '2025-03-05', '10:00:00', '2025-03-05', '12:10:00', 'lille', 'chauffeur', 3, 12, 5, 'paris'),
(4, '2025-02-05', '14:00:00', '2025-02-05', '18:30:00', 'nice', 'chauffeur', 2, 17, 3, 'bordeaux'),
(5, '2025-03-13', '900:00', '2025-03-13', '14:30:00', 'lyon', 'chauffeur', 3, 25, 2, 'toulouse');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `marque_id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`marque_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`marque_id`, `libelle`) VALUES
(1, '2222eee8522'),
(2, '3333ccc9272'),
(3, '2111ddd8030'),
(4, '1111eee6632'),
(5, '4444fff3235');

-- --------------------------------------------------------

--
-- Structure de la table `parametre`
--

DROP TABLE IF EXISTS `parametre`;
CREATE TABLE IF NOT EXISTS `parametre` (
  `parametre_id` int(11) NOT NULL AUTO_INCREMENT,
  `propriete` varchar(50) DEFAULT NULL,
  `valeur` varchar(50) DEFAULT NULL,
  `id_configuration` int(11) NOT NULL,
  PRIMARY KEY (`parametre_id`),
  KEY `parametre_configuration_FK` (`id_configuration`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `parametre`
--

INSERT INTO `parametre` (`parametre_id`, `propriete`, `valeur`, `id_configuration`) VALUES
(1, '', 'liliane ledoux', 1);

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--

DROP TABLE IF EXISTS `possede`;
CREATE TABLE IF NOT EXISTS `possede` (
  `role_id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  PRIMARY KEY (`role_id`,`utilisateur_id`),
  KEY `possede_utilisateur_FK` (`utilisateur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `possede`
--

INSERT INTO `possede` (`role_id`, `utilisateur_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`role_id`, `libelle`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `utilisateur_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `date_naissance` varchar(50) DEFAULT NULL,
  `photo` blob DEFAULT NULL,
  `pseudo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`utilisateur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`utilisateur_id`, `nom`, `prenom`, `email`, `password`, `telephone`, `adresse`, `date_naissance`, `photo`, `pseudo`) VALUES
(1, 'sasa', 'didi', 'mukarugwirodiane@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$Rllua1NweTlFVlp0TVF5cA$4UuV+1omTsesCCJLQUiEm/btlHQIeByG9whcg9MaXo8', '0615947878', '8 rue castor paris 16', '2024-09-05', NULL, 'sam'),
(3, 'gaga', 'line', 'magagarine@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$UFozNllBTkdHb1ZoZTdKYw$YfaTgiZQrYbBJqI/5BtlRhXhgWY+Fl/5+N9k6XO4mgk', '0615947878', '8 rue castor paris 16', '2022-07-15', NULL, 'gali'),
(4, 'ledoux', 'liliane', 'lilidoux@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$amhidG9LbWpyUk5KaEtSVA$PSqb9RVLiL+C1VSTQbfHw5wKLV9uOMAFoVAwdNab+mc', '0615947878', '8 rue castor paris 16', '2016-06-08', NULL, 'lili'),
(5, 'fol', 'david', 'davidfol@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$ZDM3TnNKQ0FMYmh4dFhYTQ$XU4IqWI+O87thjdOX7lcTC4ylvbWPMm4sWGVC2twoRE', '0620203030', '9 rue du bel air paris ', '1980-09-15', NULL, 'dadi'),
(6, 'matte', 'luc', 'matteluc@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$VnBmTi5RUGxmZklaSTB0UA$6I0AkMBBbDODHGIAjN+MvAtmg4dfWBEPFhb3R0LeeS4', '0617151520', '3rue de ronsard 59 lille ', '1989-10-08', NULL, 'lulu'),
(7, 'bevery', 'angel', 'bevery@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$dVhUcUdkUC5Eb3RmUlloRw$B71lpejdtnu5hdpMFYitnncYyLAzsUWFeMpj0MILaRk', '0630302580', ' 2 rue du val 33 bordeaux  ', '1986-05-25', NULL, 'beby'),
(8, 'beni', 'anne', 'benanne@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$ck5lZXFIMEo4aXpPdmtXZw$fwxCVVF7nx88U0P6SPO83UAOhtgk85bvxbQH4bmRamA', '0645606078', ' 7 rue louise michel 31 toulouse', '1994-07-23', NULL, 'bena');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `voiture_id` int(11) NOT NULL AUTO_INCREMENT,
  `modele` varchar(50) DEFAULT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `marque_id` int(11) NOT NULL,
  `immatriculation` varchar(50) DEFAULT NULL,
  `energie` varchar(50) DEFAULT NULL,
  `couleur` varchar(50) DEFAULT NULL,
  `date_premiere_immatriculation` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`voiture_id`),
  KEY `voiture_utilisateur_FK` (`utilisateur_id`),
  KEY `voiture_marque_FK` (`marque_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`voiture_id`, `modele`, `utilisateur_id`, `marque_id`, `immatriculation`, `energie`, `couleur`, `date_premiere_immatriculation`) VALUES
(1, 'yaris', 4, 1, 'eg-020-fr', 'hybride', 'noir', '2023'),
(2, 'golf', 5, 2, 'eg-050-fr', 'hybride', 'rouge', '2022'),
(3, 'bmw', 6, 3, 'eg-035-fr', 'essence', 'bleu', '2022'),
(4, 'volvo', 7, 4, 'eg-045-fr', 'essence', 'noir', '2021'),
(5, 'tesla', 8, 5, 'eg-060-fr', 'electrique', 'blanc', '2024');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `configuration`
--
ALTER TABLE `configuration`
  ADD CONSTRAINT `configuration_utilisateur_FK` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`utilisateur_id`);

--
-- Contraintes pour la table `covoiturage`
--
ALTER TABLE `covoiturage`
  ADD CONSTRAINT `covoiturage_voiture_FK` FOREIGN KEY (`voiture_id`) REFERENCES `voiture` (`voiture_id`);

--
-- Contraintes pour la table `parametre`
--
ALTER TABLE `parametre`
  ADD CONSTRAINT `parametre_configuration_FK` FOREIGN KEY (`id_configuration`) REFERENCES `configuration` (`id_configuration`);

--
-- Contraintes pour la table `possede`
--
ALTER TABLE `possede`
  ADD CONSTRAINT `possede_role_FK` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`),
  ADD CONSTRAINT `possede_utilisateur_FK` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`utilisateur_id`);

--
-- Contraintes pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD CONSTRAINT `voiture_marque_FK` FOREIGN KEY (`marque_id`) REFERENCES `marque` (`marque_id`),
  ADD CONSTRAINT `voiture_utilisateur_FK` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`utilisateur_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
