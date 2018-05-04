-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 03 mai 2018 à 21:26
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ventelivres`
--

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

DROP TABLE IF EXISTS `livres`;
CREATE TABLE IF NOT EXISTS `livres` (
  `livreID` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `auteur` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `prix_unitaire` decimal(10,0) DEFAULT NULL,
  `actif` int(1) DEFAULT NULL,
  PRIMARY KEY (`livreID`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`livreID`, `titre`, `auteur`, `prix_unitaire`, `actif`) VALUES
(1, 'L\'étranger', 'Albert Camus', '6', NULL),
(2, 'L\'alchimiste', 'Paulo Coelho', '7', NULL),
(4, 'Le monde s\'effondre', 'Chinua Achebe', '5', 1),
(5, 'Orgueil et Préjugés', 'Jane Austen', '6', 1),
(6, 'Le Père Goriot', 'Honoré de Balzac', '5', NULL),
(7, 'Décaméron', 'Boccace', '8', 1),
(8, 'Fictions', 'Jorge Luis Borges', '5', NULL),
(9, 'Les Hauts de Hurlevent', 'Emily Bronte', '6', 1),
(10, 'L\'étranger', 'Albert Camus', '6', NULL),
(11, 'Don Quichotte', 'Miguel de Cervantes', '7', NULL),
(12, 'Les Contes de Canterbury', 'Geoffrey Chaucer', '5', 1),
(13, 'Nostromo', 'Joseph Conrad', '3', NULL),
(14, 'Divine Comédie', 'Dante Alighieri', '6', NULL),
(15, 'Les Grandes Espérances', 'Charles Dickens', '5', 1),
(16, 'Jacques le fataliste et son maître', 'Denis Diderot', '6', NULL),
(17, 'Berlin Alexanderplatz', 'Alfred Doblin', '6', NULL),
(18, 'L\'idiot', 'Fiodor Dostoievski', '7', NULL),
(19, 'Middlemarch', 'George Eliot', '6', NULL),
(20, 'Homme invisible, pour qui chantes-tu ?', 'Ralph Ellison', '6', NULL),
(21, 'Médée', 'Euripide', '5', NULL),
(22, 'Absalon, Absalon !', 'William Faulkner', '8', NULL),
(23, 'Madame Bovary', 'Gustave Flaubert', '7', NULL),
(24, 'Romancero Gitano', 'Federico Garcia Lorca', '3', NULL),
(25, 'Epopée de Gilgamesh', 'Anonyme', '6', NULL),
(26, 'Faust', 'Johann Wolfgang von Goethe', '6', NULL),
(27, 'Le Tambour', 'Gunter Grass', '6', NULL),
(28, 'La Faim', 'Knut Hamsun', '10', NULL),
(29, 'Le Vieil Homme et la Mer', 'Ernest Hemingway', '6', NULL),
(30, 'Illiade', 'Homère', '7', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `utilisateur` varchar(255) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `actif` int(1) DEFAULT NULL,
  PRIMARY KEY (`utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`utilisateur`, `code`, `nom`, `prenom`, `admin`, `actif`) VALUES
('cortil', 'cortil123', 'Tilmant', 'Corentin', NULL, 1),
('cordie', 'cordie123', 'Diederickx', 'Corentin', NULL, NULL),
('prehur', 'prehur123', 'Hurbin', 'Prescilla', NULL, NULL),
('tomdeb', 'tomdeb123', 'Debaes', 'Thomas', NULL, NULL),
('jambon', 'jambon123', 'Bond', 'James', NULL, NULL),
('katper', 'katper123', 'Perry', 'Katy', NULL, NULL),
('jesalb', 'jesalb123', 'Alba', 'Jessica', NULL, NULL),
('dwajoh', 'dwajoh123', 'Johnson', 'Dwayne', NULL, NULL),
('jeschr', 'jeschr123', 'Christ', 'Jesus', NULL, NULL),
('liomes', 'liomes123', 'Messi', 'Lionel', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `ventes`
--

DROP TABLE IF EXISTS `ventes`;
CREATE TABLE IF NOT EXISTS `ventes` (
  `idvente` int(11) NOT NULL AUTO_INCREMENT,
  `datevente` int(11) DEFAULT NULL,
  `etat` varchar(255) DEFAULT NULL,
  `utilisateurs_utilisateur` varchar(255) NOT NULL,
  PRIMARY KEY (`idvente`,`utilisateurs_utilisateur`),
  KEY `fk_vente_utilisateurs_idx` (`utilisateurs_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vente_details`
--

DROP TABLE IF EXISTS `vente_details`;
CREATE TABLE IF NOT EXISTS `vente_details` (
  `idvente_detail` int(11) NOT NULL AUTO_INCREMENT,
  `quantite` int(11) DEFAULT NULL,
  `prix_unitaire` decimal(10,0) DEFAULT NULL,
  `vente_idvente` int(11) NOT NULL,
  `livres_LivreID` int(11) NOT NULL,
  PRIMARY KEY (`idvente_detail`,`vente_idvente`),
  KEY `fk_vente_detail_livres1_idx` (`livres_LivreID`),
  KEY `fk_vente_detail_vente1_idx` (`vente_idvente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
