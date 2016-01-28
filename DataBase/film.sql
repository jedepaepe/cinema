-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 14 Janvier 2016 à 21:10
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `film`
--
CREATE IF NOT EXISTS DATABASE `film` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `film`;

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'index primaire',
  `titre` varchar(100) COLLATE utf8_bin NOT NULL COMMENT 'titre du film',
  `annee` int(11) NOT NULL COMMENT 'année du film',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`id`, `titre`, `annee`) VALUES
(1, 'Le tout nouveau testament', 2015),
(2, 'Mustang', 2015),
(3, 'La soupe au chou', 1985),
(4, 'Casablanca', 1948);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'index primaire',
  `forename` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '' COMMENT 'user forename',
  `surname` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '' COMMENT 'user surname',
  `password` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '' COMMENT 'user password',
  `email` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '' COMMENT 'user e-mail',
  `description` text COLLATE utf8_bin NOT NULL COMMENT 'description of user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `forename`, `surname`, `password`, `email`, `description`) VALUES
(1, 'Maria', 'Maria', 'WelcomeMaria', 'maria@hotmail.com', '2016 season Cinema User'),
(2, 'Michael', 'Michael', 'WelcomeMichael', 'michael@hotmail.com', '2016 season Cinema User'),
(3, 'Quentin', 'Quentin', 'WelcomeQuentin', 'quentin@hotmail.com', '2016 season Cinema User'),
(4, 'Laurine', 'Laurine', 'WelcomeLaurine', 'laurine@hotmail.com', '2016 season Cinema User'),
(5, 'Veronique', 'Veronique', 'WelcomeVeronique', 'veronique@hotmail.com', '2016 season Cinema User'),
(6, 'Francois', 'Francois', 'WelcomeFrancois', 'francois@hotmail.com', '2016 season Cinema User'),
(7, 'Huge', 'Huge', 'WelcomeHuge', 'huge@hotmail.com', '2016 season Cinema User'),
(8, 'Saul', 'edmundo vantalia', 'WelcomeSaul', 'saul@yahoo.com', '2016 season Cinema User'),
(9, 'donatien', '', 'don', '', ''),
(10, 'donatien', '', 'donatien2016', '', ''),
(11, 'donatien', '', 'donatien2016', '', ''),
(12, 'pablo', '', 'pablo', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
