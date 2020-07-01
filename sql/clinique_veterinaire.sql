-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 24 juin 2020 à 06:54
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `clinique_veterinaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dateNaissance` date NOT NULL,
  `dateDeces` date NOT NULL,
  `idPropietaire` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `animal_fk_idpropietaire` (`idPropietaire`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `animal`
--

INSERT INTO `animal` (`id`, `nom`, `dateNaissance`, `dateDeces`, `idPropietaire`, `photo`) VALUES
(1, 'Rocky', '2012-12-21', '0000-00-00', 1, 'rocky-carlin.png'),
(2, 'Estrella', '2015-04-15', '0000-00-00', 2, 'estrella-terrier.png'),
(3, 'Iker', '2014-02-12', '0000-00-00', 3, 'iker-terrier.png'),
(4, 'Titan', '2010-03-05', '0000-00-00', 4, 'titan-rottweiler.png'),
(5, 'Sasha', '2010-03-05', '0000-00-00', 1, 'sasha-berger-allemand.png'),
(6, 'Messi', '2018-05-20', '0000-00-00', 5, 'messi-bulldog.png'),
(7, 'Tito', '2019-08-20', '0000-00-00', 6, 'tito-bulldog-francais.png'),
(8, 'Mia', '2017-01-13', '0000-00-00', 2, 'mia-golden-retiver.png'),
(9, 'Minino', '2018-12-02', '0000-00-00', 2, 'minino-persan.png'),
(10, 'Mr Grey', '2019-03-05', '0000-00-00', 1, 'mrGrey-british-shorthair.png'),
(11, 'Roxy', '2015-11-20', '0000-00-00', 6, 'roxy-siamois.png'),
(12, 'Ronaldo', '2016-04-04', '0000-00-00', 5, 'ronaldo-savannah.png');

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `idAnimal` int(11) NOT NULL,
  `idRace` int(11) NOT NULL,
  KEY `chat_fk_idanimal` (`idAnimal`),
  KEY `chat_fk_idrace` (`idRace`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`idAnimal`, `idRace`) VALUES
(9, 1),
(10, 2),
(11, 3),
(12, 4);

-- --------------------------------------------------------

--
-- Structure de la table `chien`
--

DROP TABLE IF EXISTS `chien`;
CREATE TABLE IF NOT EXISTS `chien` (
  `idAnimal` int(11) NOT NULL,
  `taille` float NOT NULL,
  `poids` float NOT NULL,
  `idRace` int(11) NOT NULL,
  KEY `chien_fk_idanimal` (`idAnimal`),
  KEY `chien_fk_idrace` (`idRace`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `chien`
--

INSERT INTO `chien` (`idAnimal`, `taille`, `poids`, `idRace`) VALUES
(1, 28, 10, 1),
(2, 30, 10, 3),
(3, 35, 10, 3),
(5, 80, 25, 4),
(4, 70, 35, 6),
(6, 40, 25, 2),
(7, 25, 10, 5),
(8, 70, 20, 7);

-- --------------------------------------------------------

--
-- Structure de la table `dossier`
--

DROP TABLE IF EXISTS `dossier`;
CREATE TABLE IF NOT EXISTS `dossier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `antecedents` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `effectuer`
--

DROP TABLE IF EXISTS `effectuer`;
CREATE TABLE IF NOT EXISTS `effectuer` (
  `idGarde` int(11) NOT NULL,
  `idVeterinaire` int(11) NOT NULL,
  KEY `effectuer_fk_idgarde` (`idGarde`),
  KEY `effectuer_fk_idveterinaire` (`idVeterinaire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `garde`
--

DROP TABLE IF EXISTS `garde`;
CREATE TABLE IF NOT EXISTS `garde` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` time NOT NULL,
  `heureDebut` time NOT NULL,
  `heureFin` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `horaire`
--

DROP TABLE IF EXISTS `horaire`;
CREATE TABLE IF NOT EXISTS `horaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `heureDebut` time NOT NULL,
  `heureFin` time NOT NULL,
  `idVeterinaire` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `horaire_fk_idveterinaire` (`idVeterinaire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

DROP TABLE IF EXISTS `medicament`;
CREATE TABLE IF NOT EXISTS `medicament` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dosage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `indications` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `effetsSecondaires` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `laboratoire` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `prescrire`
--

DROP TABLE IF EXISTS `prescrire`;
CREATE TABLE IF NOT EXISTS `prescrire` (
  `idVisite` int(11) NOT NULL,
  `idMedicament` int(11) NOT NULL,
  `posologie` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  KEY `prescrire_fk_idmedicament` (`idMedicament`),
  KEY `prescrire_fk_idvisite` (`idVisite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `propietaire`
--

DROP TABLE IF EXISTS `propietaire`;
CREATE TABLE IF NOT EXISTS `propietaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `codePostal` int(11) NOT NULL,
  `ville` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `telephone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `telephoneMobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `propietaire`
--

INSERT INTO `propietaire` (`id`, `nom`, `prenom`, `rue`, `codePostal`, `ville`, `telephone`, `telephoneMobile`) VALUES
(1, 'Da Costa', 'Melissa', '9 rue du Docteur Ramon', 94000, 'Creteil', '0761287412', '0761287412'),
(2, 'Garcia', 'Ariana', 'knioiohiohio', 3001, 'Calamanga', '56494', '5449'),
(3, 'De La Rosa', 'Irene', '454949', 16465, 'Medellin', '85454', '5544'),
(4, 'Da Costa', 'Tiago', '9 rue du Docteur Ramon', 94000, 'Creteil', '4878', '54546'),
(5, 'Rodriguez', 'Juan', 'jiihiho', 35698, 'Buenos Aires', '4979879', '54644'),
(6, 'Camus', 'Marie', 'lkk', 94000, 'Creteil', '07615488', '544799');

-- --------------------------------------------------------

--
-- Structure de la table `race_chat`
--

DROP TABLE IF EXISTS `race_chat`;
CREATE TABLE IF NOT EXISTS `race_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `race_chat`
--

INSERT INTO `race_chat` (`id`, `nom`) VALUES
(1, 'Persan'),
(2, 'British Shorthair'),
(3, 'Siamois'),
(4, 'Savannah');

-- --------------------------------------------------------

--
-- Structure de la table `race_chien`
--

DROP TABLE IF EXISTS `race_chien`;
CREATE TABLE IF NOT EXISTS `race_chien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `race_chien`
--

INSERT INTO `race_chien` (`id`, `nom`) VALUES
(1, 'Carlin'),
(2, 'Bulldog'),
(3, 'Terrier'),
(4, 'Berger Allemand'),
(5, 'Bulldog Français'),
(6, 'Rottweiler'),
(7, 'Golden Retiver');

-- --------------------------------------------------------

--
-- Structure de la table `veterinaire`
--

DROP TABLE IF EXISTS `veterinaire`;
CREATE TABLE IF NOT EXISTS `veterinaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `telephone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `telephoneMobil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

DROP TABLE IF EXISTS `visite`;
CREATE TABLE IF NOT EXISTS `visite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateVisite` date NOT NULL,
  `heureVisite` time NOT NULL,
  `raison` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `idDossier` int(11) NOT NULL,
  `idAnimal` int(11) NOT NULL,
  `idVeterinaire` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `visite_fk_idanimal` (`idAnimal`),
  KEY `visite_fk_iddossier` (`idDossier`),
  KEY `visite_fk_idveterinaire` (`idVeterinaire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_fk_idpropietaire` FOREIGN KEY (`idPropietaire`) REFERENCES `propietaire` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_fk_idanimal` FOREIGN KEY (`idAnimal`) REFERENCES `animal` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `chat_fk_idrace` FOREIGN KEY (`idRace`) REFERENCES `race_chat` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `chien`
--
ALTER TABLE `chien`
  ADD CONSTRAINT `chien_fk_idanimal` FOREIGN KEY (`idAnimal`) REFERENCES `animal` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `chien_fk_idrace` FOREIGN KEY (`idRace`) REFERENCES `race_chien` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `effectuer`
--
ALTER TABLE `effectuer`
  ADD CONSTRAINT `effectuer_fk_idgarde` FOREIGN KEY (`idGarde`) REFERENCES `garde` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `effectuer_fk_idveterinaire` FOREIGN KEY (`idVeterinaire`) REFERENCES `veterinaire` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `horaire`
--
ALTER TABLE `horaire`
  ADD CONSTRAINT `horaire_fk_idveterinaire` FOREIGN KEY (`idVeterinaire`) REFERENCES `veterinaire` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `prescrire`
--
ALTER TABLE `prescrire`
  ADD CONSTRAINT `prescrire_fk_idmedicament` FOREIGN KEY (`idMedicament`) REFERENCES `medicament` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `prescrire_fk_idvisite` FOREIGN KEY (`idVisite`) REFERENCES `visite` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `visite`
--
ALTER TABLE `visite`
  ADD CONSTRAINT `visite_fk_idanimal` FOREIGN KEY (`idAnimal`) REFERENCES `animal` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `visite_fk_iddossier` FOREIGN KEY (`idDossier`) REFERENCES `dossier` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `visite_fk_idveterinaire` FOREIGN KEY (`idVeterinaire`) REFERENCES `veterinaire` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
