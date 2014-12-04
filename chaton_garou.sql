-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Jeu 04 Décembre 2014 à 20:37
-- Version du serveur: 5.5.32
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `chaton_garou`
--
CREATE DATABASE IF NOT EXISTS `chaton_garou` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `chaton_garou`;

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

CREATE TABLE IF NOT EXISTS `association` (
  `id_association` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `libelle_association` varchar(20) CHARACTER SET utf8 NOT NULL,
  `id_contact_association` int(4) DEFAULT NULL COMMENT 'id_benevole',
  PRIMARY KEY (`id_association`),
  UNIQUE KEY `id_association` (`id_association`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='table des associations' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `assoc_cata`
--

CREATE TABLE IF NOT EXISTS `assoc_cata` (
  `id_assoc_cata` int(4) NOT NULL COMMENT 'from association',
  `id_cata_assoc` int(4) NOT NULL COMMENT 'from cata',
  PRIMARY KEY (`id_assoc_cata`,`id_cata_assoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='table associative';

-- --------------------------------------------------------

--
-- Structure de la table `benevole`
--

CREATE TABLE IF NOT EXISTS `benevole` (
  `id_benevole` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id du benevoles',
  `nom_benevole` varchar(25) NOT NULL COMMENT 'nom du benevole',
  `prenom_benevole` varchar(25) NOT NULL COMMENT 'prenom du benevole',
  `mail_benevole` varchar(50) NOT NULL COMMENT 'mail du benevole',
  `phone_benevole` char(10) NOT NULL COMMENT 'numero de telephone du benevole',
  `password` varchar(20) CHARACTER SET utf8mb4 NOT NULL COMMENT 'mot de passe du benevole',
  `id_association_benevole` int(11) DEFAULT NULL COMMENT 'id de l''association du benevol',
  PRIMARY KEY (`id_benevole`),
  UNIQUE KEY `id_benevole` (`id_benevole`),
  UNIQUE KEY `mail_benevole` (`mail_benevole`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table des benevoles' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `benevole_cata`
--

CREATE TABLE IF NOT EXISTS `benevole_cata` (
  `id_benevole_cata` int(4) NOT NULL COMMENT 'from benevole',
  `id_cata_benevole` int(4) NOT NULL COMMENT 'from catastrophe',
  PRIMARY KEY (`id_benevole_cata`,`id_cata_benevole`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='table associative';

-- --------------------------------------------------------

--
-- Structure de la table `catastrophe`
--

CREATE TABLE IF NOT EXISTS `catastrophe` (
  `id_catastrophe` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `coordonnees_catastrophe` varchar(20) CHARACTER SET utf8 NOT NULL,
  `date_catastrophe` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_type_catastrophe` int(4) NOT NULL COMMENT 'id_type_catastrophe',
  PRIMARY KEY (`id_catastrophe`),
  UNIQUE KEY `id_catastrophe` (`id_catastrophe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `type_catastrophe`
--

CREATE TABLE IF NOT EXISTS `type_catastrophe` (
  `id_type_catastrophe` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `libelle_catastrophe` varchar(20) CHARACTER SET utf8 NOT NULL,
  `gravite_catastrophe` int(1) NOT NULL,
  PRIMARY KEY (`id_type_catastrophe`),
  UNIQUE KEY `id_type_catastrophe` (`id_type_catastrophe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
