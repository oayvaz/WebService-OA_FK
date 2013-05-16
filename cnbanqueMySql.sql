-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Ven 19 Avril 2013 à 15:10
-- Version du serveur: 5.5.8
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `cnbanque`
--

-- --------------------------------------------------------

--
-- Structure de la table `infopret`
--

CREATE TABLE IF NOT EXISTS `infopret` (
  `montantProjet` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `montantApport` int(11) NOT NULL,
  `dureeEmprunt` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `idCN` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `infopret`
--

INSERT INTO `infopret` (`montantProjet`, `nom`, `prenom`, `adresse`, `cp`, `telephone`, `mail`, `montantApport`, `dureeEmprunt`, `age`, `ville`, `idCN`, `id`) VALUES
(1000000, 'TOTO', '', '', '55000', '121212121', '', 10000, 10, 10, '', 1, 6),
(1000000, 'PATATE', '', '', '55000', '121212121', '', 10000, 10, 10, '', 1, 7),
(1000000, 'PATATE2', '', '', '55000', '121212121', '', 10000, 10, 10, '', 5, 8),
(1000000, 'PATATE2', '', '', '55000', '121212121', '', 10000, 10, 10, '', 5, 9);
