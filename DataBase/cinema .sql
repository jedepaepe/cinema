-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 28 Janvier 2016 à 20:44
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cinema`
--
CREATE DATABASE IF NOT EXISTS `cinema` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cinema`;
-- --------------------------------------------------------

--
-- Structure de la table `affiche`
--

CREATE TABLE IF NOT EXISTS `affiche` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Film_ID` int(11) NOT NULL,
  `Affiche` blob NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Film` (`Film_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Auteur_ID` int(50) NOT NULL,
  `Film_ID` int(11) NOT NULL,
  `Horodatage` date NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Film` (`Film_ID`),
  KEY `Auteur` (`Auteur_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE IF NOT EXISTS `compte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL COMMENT 'mot de passe de l''utilisateur',
  `email` text COLLATE utf8_bin NOT NULL COMMENT 'email de l''utilisateur ',
  `role_ID` int(11) NOT NULL,
  `langue_ID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_ID` (`role_ID`),
  KEY `langue` (`langue_ID`),
  KEY `langue_ID` (`langue_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `Année` int(4) NOT NULL,
  `Description` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

CREATE TABLE IF NOT EXISTS `langue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(2) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `affiche`
--
ALTER TABLE `affiche`
  ADD CONSTRAINT `affiche_ibfk_1` FOREIGN KEY (`Film_ID`) REFERENCES `film` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`Auteur_ID`) REFERENCES `compte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`Film_ID`) REFERENCES `film` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `compte_ibfk_1` FOREIGN KEY (`role_ID`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compte_ibfk_2` FOREIGN KEY (`langue_ID`) REFERENCES `langue` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
