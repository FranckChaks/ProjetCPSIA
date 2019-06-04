-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 04 Juin 2019 à 12:56
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Structure de la table `associer`
--

CREATE TABLE `associer` (
  `id_comm` int(11) NOT NULL,
  `id_panier` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `associer`
--

INSERT INTO `associer` (`id_comm`, `id_panier`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_c` int(11) NOT NULL,
  `nom_c` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_c`, `nom_c`) VALUES
(1, 'Alimentaires'),
(2, 'Vêtements'),
(3, 'Electroménager');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_comm` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `date_c` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commande`
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
(9, 5, '2019-06-04 11:53:30');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id_pa` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  `id_u` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `panier`
--

INSERT INTO `panier` (`id_pa`, `quantite`, `id_p`, `id_u`) VALUES
(3, 1, 5, 1),
(4, 1, 4, 1),
(5, 13, 7, 1),
(6, 1, 5, 1),
(7, 1, 5, 1),
(8, 1, 4, 1),
(38, 1, 5, 5),
(37, 1, 4, 5),
(36, 1, 5, 5),
(33, 1, 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_p` int(11) NOT NULL,
  `libelle_p` varchar(255) NOT NULL,
  `description_p` text,
  `prix_p` float NOT NULL,
  `img_p` varchar(255) NOT NULL,
  `taille_p` varchar(3) DEFAULT NULL,
  `id_c` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id_p`, `libelle_p`, `description_p`, `prix_p`, `img_p`, `taille_p`, `id_c`) VALUES
(4, 'Ananas', NULL, 3, 'pineapple.png', NULL, 1),
(5, 'Fraise', NULL, 2.5, 'fraise.png', NULL, 1),
(10, 'Haricot', 'haricot', 2, '15027884_10210976944521623_6199252390319426678_n.jpg', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE `stock` (
  `id_s` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `id_p` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `stock`
--

INSERT INTO `stock` (`id_s`, `quantite`, `id_p`) VALUES
(1, 0, 4),
(2, 8, 5),
(3, 15, 14);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_u` int(11) NOT NULL,
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
  `selected` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_u`, `login`, `mdp`, `nom`, `prenom`, `ville`, `rue`, `numero`, `tel`, `email`, `lvl`, `selected`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Chaks', 'Franck', 'Montgeron', 'Sentier des roches', '111', '0102030405', 'admin@gmail.com', 2, 0),
(2, 'Jo', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Truong', 'Jo', 'Stains', 'Rue des rues', '1Bis', '0102030406', 'jo@gmail.fr', 1, 0),
(5, 'test', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Monsieur', 'Test', 'Paris', 'Avenue de la république', '1', '0203040506', 'test@gmail.com', 1, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_c`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_comm`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_pa`),
  ADD KEY `id_p` (`id_p`),
  ADD KEY `id_u` (`id_u`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_p`);

--
-- Index pour la table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_s`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_comm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id_pa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `stock`
--
ALTER TABLE `stock`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
