-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 04 juin 2019 à 14:02
-- Version du serveur :  5.7.19
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `testcpsia`
--

-- --------------------------------------------------------

--
-- Structure de la table `associer`
--

DROP TABLE IF EXISTS `associer`;
CREATE TABLE IF NOT EXISTS `associer` (
  `id_comm` int(11) NOT NULL,
  `id_panier` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `associer`
--

INSERT INTO `associer` (`id_comm`, `id_panier`) VALUES
(1, 1),
(1, 2),
(10, 3),
(11, 3);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `nom_c` varchar(150) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_c`, `nom_c`) VALUES
(1, 'Alimentaires'),
(2, 'Vêtements'),
(3, 'Electroménager');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_comm` int(11) NOT NULL AUTO_INCREMENT,
  `id_u` int(11) NOT NULL,
  `date_c` datetime NOT NULL,
  PRIMARY KEY (`id_comm`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_comm`, `id_u`, `date_c`) VALUES
(1, 2, '2019-06-04 11:14:08'),
(2, 1, '2019-06-04 11:18:41'),
(3, 1, '2019-06-04 11:19:05'),
(4, 1, '2019-06-04 11:19:50'),
(5, 1, '2019-06-04 11:20:54'),
(6, 1, '2019-06-04 11:22:04'),
(7, 5, '2019-06-04 11:25:16'),
(8, 5, '2019-06-04 11:25:36'),
(9, 5, '2019-06-04 11:53:30'),
(10, 1, '2019-06-04 15:19:36'),
(11, 1, '2019-06-04 16:01:38');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id_pa` int(11) NOT NULL AUTO_INCREMENT,
  `quantite` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  PRIMARY KEY (`id_pa`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id_pa`, `quantite`, `id_p`, `id_u`) VALUES
(1, 12, 1, 1),
(2, 10, 2, 1),
(3, 6, 5, 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_p`, `libelle_p`, `description_p`, `prix_p`, `img_p`, `taille_p`, `id_c`) VALUES
(4, 'Ananas', NULL, 3, 'pineapple.png', NULL, 1),
(5, 'Fraise', NULL, 2.5, 'fraise.png', NULL, 1),
(10, 'Haricot', 'haricot', 2, '15027884_10210976944521623_6199252390319426678_n.jpg', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `id_s` int(11) NOT NULL AUTO_INCREMENT,
  `quantite` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  PRIMARY KEY (`id_s`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `stock`
--

INSERT INTO `stock` (`id_s`, `quantite`, `id_p`) VALUES
(1, 0, 4),
(2, 2, 5),
(3, 15, 14);

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
  `selected` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_u`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_u`, `login`, `mdp`, `nom`, `prenom`, `ville`, `rue`, `numero`, `tel`, `email`, `lvl`, `selected`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Chaks', 'Franck', 'Montgeron', 'Sentier des roches', '111', '0102030405', 'admin@gmail.com', 2, 1),
(2, 'Jo', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Truong', 'Jo', 'Stains', 'Rue des rues', '1Bis', '0102030406', 'jo@gmail.fr', 1, 0),
(5, 'test', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Monsieur', 'Test', 'Paris', 'Avenue de la république', '1', '0203040506', 'test@gmail.com', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
