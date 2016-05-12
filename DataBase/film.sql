-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 14 Janvier 2016 à 16:41
-- Version du serveur :  5.6.17-log
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Contenu de la table `film`
--

USE cinema;
INSERT INTO `film` (`id`, `titre`, `annee`, `description`) VALUES
(1, 'Le tout nouveau testament', 2015, 'Dieu existe. Il habite à Bruxelles. Il est odieux avec sa femme et sa fille. On a beaucoup parlé de son fils, mais très peu de sa fille. Sa fille c’est moi. Je m’appelle Ea et j’ai dix ans. Pour me venger j’ai balancé par SMS les dates de décès de tout le monde…'),
(2, 'Mustang', 2015, 'C''est le début de l''été.\r\nDans un village reculé de Turquie, Lale et ses quatre sœurs rentrent de l’école en jouant avec des garçons et déclenchent un scandale aux conséquences inattendues.\r\nLa maison familiale se transforme progressivement en prison, les cours de pratiques ménagères remplacent l’école et les mariages commencent à s’arranger.\r\nLes cinq sœurs, animées par un même désir de liberté, détournent les limites qui leur sont imposées.'),
(3, 'La soupe au chou', 1981, 'Le Glaude et le Bombé, deux vieux paysans portés sur la bouteille, vivent très retirés de la vie moderne. Une nuit, un extra-terrestre atterrit en soucoupe volante dans le jardin du Glaude. En gage de bienvenue, ce dernier lui offre un peu de sa fameuse soupe aux choux...'),
(4, 'Casablanca', 1947, 'A Casablanca, pendant la Seconde Guerre mondiale, le night-club le plus couru de la ville est tenu par Rick Blaine, un Américain en exil. Mais l''établissement sert également de refuge à ceux qui voudraient se procurer les papiers nécessaires pour quitter le pays. Lorsque Rick voit débarquer un soir le dissident politique Victor Laszlo et son épouse Ilsa, quelle n''est pas sa surprise de retrouver dans ces circonstances le grand amour de sa vie...');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
