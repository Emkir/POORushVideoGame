-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 18 Octobre 2013 à 07:25
-- Version du serveur: 5.1.53-community-log
-- Version de PHP: 5.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `leagueofproject`


-- --------------------------------------------------------

--
-- Structure de la table `characters`
--

CREATE TABLE IF NOT EXISTS `characters` (
  `id_characters` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id_characters`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `characters`
--

INSERT INTO `characters` (`id_characters`, `name`, `type`) VALUES
(1, 'Bromanidd le guerrier', 'Warrior'),
(2, 'Graurk le barbare', 'Barbarian'),
(3, 'Oudin le mage', 'Mage'),
(4, 'Sorensean le necromancien', 'Necromancer'),
(5, 'Galaviel l''elfe de sang', 'BloodElf');

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `id_game` int(11) NOT NULL AUTO_INCREMENT,
  `id_player_1` int(11) NOT NULL,
  `id_player_2` int(11) NOT NULL,
  PRIMARY KEY (`id_game`),
  KEY `fk_games_players1_idx` (`id_player_1`),
  KEY `fk_games_players2_idx` (`id_player_2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `id_player` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(255) NOT NULL,
  `id_character` int(11) NOT NULL,
  `player_strength` varchar(45) NOT NULL,
  `player_health` varchar(45) NOT NULL,
  `player_intelligence` varchar(45) NOT NULL,
  `player_protection` binary(1) DEFAULT NULL,
  `player_ability_1` binary(1) DEFAULT NULL,
  `player_ability_2` binary(1) DEFAULT NULL,
  PRIMARY KEY (`id_player`),
  KEY `fk_players_characters1` (`id_character`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `fk_games_players1` FOREIGN KEY (`id_player_1`) REFERENCES `players` (`id_player`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_games_players2` FOREIGN KEY (`id_player_2`) REFERENCES `players` (`id_player`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `fk_players_characters1` FOREIGN KEY (`id_character`) REFERENCES `characters` (`id_characters`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
