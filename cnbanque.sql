-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 09 Juin 2013 à 20:43
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


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
  `statut` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Contenu de la table `infopret`
--

INSERT INTO `infopret` (`montantProjet`, `nom`, `prenom`, `adresse`, `cp`, `telephone`, `mail`, `montantApport`, `dureeEmprunt`, `age`, `ville`, `idCN`, `id`, `statut`) VALUES
(44444, 'tyuio', 'tyuio', 'tyuio', 'tyuio', 'tyuio', 'tuyio', 4444, 14, 32, 'tyuio', 42, 11, 'En attente'),
(100000, 'Deycard', 'Marc', '8 rue du pont levis', '55000', '0678987458', 'Marc.Deycard@gmail.com', 50000, 19, 30, 'Bar-le-Duc', 34, 12, 'accepte'),
(25000, 'Ayvaz', 'Osman', '7 rue des turcs', '15478', '0678987458', 'Osman.Ayvaz@gmail.com', 5000, 15, 30, 'Turcville', 35, 13, 'En attente'),
(14520, 'Kastendeuch', 'Frédéric', '9 rue de la mairie', '55000', '0673343274', 'frederic.kastendeuch@gmail.com', 3000, 9, 51, 'Bar-le-Duc', 36, 14, 'En attente'),
(100000, 'Deycard', 'Marc', '8 rue du pont levis', '55000', '0678987458', 'Marc.Deycard@gmail.com', 50000, 19, 30, 'Bar-le-Duc', 34, 15, 'En attente'),
(25000, 'Ayvaz', 'Osman', '7 rue des turcs', '15478', '0678987458', 'Osman.Ayvaz@gmail.com', 5000, 15, 30, 'Turcville', 35, 16, 'En attente'),
(14520, 'Kastendeuch', 'Frédéric', '9 rue de la mairie', '55000', '0673343274', 'frederic.kastendeuch@gmail.com', 3000, 9, 51, 'Bar-le-Duc', 36, 17, 'En attente'),
(100000, 'Deycard', 'Marc', '8 rue du pont levis', '55000', '0678987458', 'Marc.Deycard@gmail.com', 50000, 19, 30, 'Bar-le-Duc', 34, 18, 'En attente'),
(25000, 'Ayvaz', 'Osman', '7 rue des turcs', '15478', '0678987458', 'Osman.Ayvaz@gmail.com', 5000, 15, 30, 'Turcville', 35, 19, 'En attente'),
(14520, 'Kastendeuch', 'Frédéric', '9 rue de la mairie', '55000', '0673343274', 'frederic.kastendeuch@gmail.com', 3000, 9, 51, 'Bar-le-Duc', 36, 20, 'En attente'),
(100000, 'Dondelinger', 'Eric', '15 rue des DoNdOns de la Farce', '98654', '067898745', 'Eric.Dondelinger@gmail.com', 50000, 15, 30, 'Dondonville', 37, 21, 'En attente'),
(100000, 'Garovo', 'Martine', 'salle 204', '55000', '0327180212', 'Garovo.Martine@gmail.com', 50000, 15, 30, 'Bar-le-Duc', 38, 22, 'En attente'),
(100000, 'Mougin', 'Jason', '8 rue de l''eglise', '57360', '0678459878', 'Jason.Mougin@gmail.com', 50000, 15, 30, 'Amnéville', 39, 23, 'En attente'),
(100000, 'Moschetta', 'Adrien', '14 rue des américains', '57260', '0678984584', 'Mosketa@live.fr', 50000, 15, 30, 'Algrange', 40, 24, 'En attente'),
(55555, 'jhon', 'snow', '3 rue du nord', '78000', '0120112', 'tuyio', 1500, 7, 22, 'fgsdfgdfg', 0, 27, 'En attente'),
(44444, 'jhon', 'mario', '3 rue du nord', 'tyuio', 'tyuio', 'asqscviud', 1500, 15, 30, 'dsvgqgbqf', 57, 28, 'Accepte'),
(15000, 'pierre', 'pol', '3 rue du nord', '78000', '0000000', 'jack', 3000, 5, 24, 'dsvgqgbqf', 58, 29, 'En attente');

--
-- Déclencheurs `infopret`
--
DROP TRIGGER IF EXISTS `ins_stat`;
DELIMITER //
CREATE TRIGGER `ins_stat` BEFORE INSERT ON `infopret`
 FOR EACH ROW SET NEW.statut = "En attente"
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
