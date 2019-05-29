-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 28 mai 2019 à 12:47
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetcpsia`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_c` varchar(150) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_c`, `libelle_c`) VALUES
(1, 'Alimentaires'),
(2, 'Vêtements'),
(3, 'Electroménager');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_p` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_p` varchar(255) NOT NULL,
  `description_p` text,
  `prix_p` float NOT NULL,
  `img_p` varchar(255) NOT NULL,
  `taille_p` varchar(3) DEFAULT NULL,
  `id_c` int(11) NOT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_p`, `libelle_p`, `description_p`, `prix_p`, `img_p`, `taille_p`, `id_c`) VALUES
(1, 'test', 'qsndlknqsldknqlskdn', 30, '', NULL, 2),
(2, 'jeans', 'pantalon denim', 30, 'jeans.png', NULL, 2),
(4, 'ananas', NULL, 3, '', NULL, 1),
(5, 'fraise', NULL, 2.5, '', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_u` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mdp` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `rue` varchar(150) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `lvl` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_u`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_u`, `login`, `mdp`, `nom`, `prenom`, `ville`, `rue`, `numero`, `tel`, `email`, `lvl`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Chaks', 'Franck', 'Montgeron', 'avenue de la république', '1', '0102030405', 'admin@gmail.com', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
