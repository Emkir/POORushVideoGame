-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 17 Octobre 2013 à 14:59
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `poorushvideogame`
--
CREATE DATABASE IF NOT EXISTS `poorushvideogame` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `poorushvideogame`;

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `id_game` int(11) NOT NULL,
  `id_player_1` int(11) NOT NULL,
  `id_player_2` int(11) NOT NULL,
  PRIMARY KEY (`id_game`),
  KEY `fk_games_players1_idx` (`id_player_1`),
  KEY `fk_games_players2_idx` (`id_player_2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id_item` int(11) NOT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_strength` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `item_life` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `item_intelligence` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `id_player` int(11) NOT NULL,
  `player_pseudo` int(11) NOT NULL,
  `player_character` int(11) NOT NULL,
  `player_item` int(11) NOT NULL,
  `player_strength` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `player_life` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `player_intelligence` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_player`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `fk_games_players1` FOREIGN KEY (`id_player_1`) REFERENCES `mydb`.`players` (`id_player`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_games_players2` FOREIGN KEY (`id_player_2`) REFERENCES `mydb`.`players` (`id_player`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
