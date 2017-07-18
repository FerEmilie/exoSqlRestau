-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 18 Juillet 2017 à 16:46
-- Version du serveur :  5.5.55-0+deb8u1
-- Version de PHP :  5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
`id` int(11) NOT NULL,
  `type_plat` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `type_plat`) VALUES
(1, 'Entrée'),
(2, 'Plat'),
(3, 'Dessert');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `nom`, `prix`) VALUES
(2, 'Enfant', 12),
(6, 'Marché', 34),
(7, 'Dégustation', 56);

-- --------------------------------------------------------

--
-- Structure de la table `menu_plat`
--

CREATE TABLE IF NOT EXISTS `menu_plat` (
`id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_plat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `menu_plat`
--

INSERT INTO `menu_plat` (`id`, `id_menu`, `id_plat`) VALUES
(83, 2, 7),
(84, 2, 9),
(85, 6, 5),
(86, 6, 11),
(87, 6, 14),
(94, 7, 1),
(95, 7, 3),
(96, 7, 5),
(97, 7, 11),
(98, 7, 15);

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE IF NOT EXISTS `plat` (
`id` int(11) NOT NULL,
  `nom_plat` varchar(255) NOT NULL,
  `id_type_plat` int(11) NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `plat`
--

INSERT INTO `plat` (`id`, `nom_plat`, `id_type_plat`, `prix`, `image`) VALUES
(1, 'Gigot d''agneau', 2, 27.5, 'agneau.jpg'),
(3, 'Entrée du chef', 1, 18.5, 'jardin.jpg'),
(5, 'Ratatouille', 2, 16, 'ratatouille.jpg'),
(7, 'Burger du Chef', 2, 23, 'burger.jpg'),
(8, 'Île Flottante', 3, 9, 'ile.jpeg'),
(9, 'Sorbet', 3, 8, 'sorbet.jpg'),
(11, 'Velouté d''été', 1, 16.5, 'veloute.JPG'),
(13, 'BoBun', 1, 16, 'bobun.jpeg'),
(14, 'Tarte au citron', 3, 9, 'citron.jpg'),
(15, 'Tiramisu framboise', 3, 12, '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', '$2y$10$KR2l29PjUOYxNbXQMqsLd.AueURxivUquI3v1AXgdByAsu18Qci9u');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `id_2` (`id`);

--
-- Index pour la table `menu_plat`
--
ALTER TABLE `menu_plat`
 ADD PRIMARY KEY (`id`), ADD KEY `id_menu` (`id_menu`), ADD KEY `id_plat` (`id_plat`);

--
-- Index pour la table `plat`
--
ALTER TABLE `plat`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `id_type_plat` (`id_type_plat`), ADD KEY `id_2` (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `menu_plat`
--
ALTER TABLE `menu_plat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT pour la table `plat`
--
ALTER TABLE `plat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `menu_plat`
--
ALTER TABLE `menu_plat`
ADD CONSTRAINT `menu_plat_ibfk_1` FOREIGN KEY (`id_plat`) REFERENCES `plat` (`id`),
ADD CONSTRAINT `menu_plat_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id`);

--
-- Contraintes pour la table `plat`
--
ALTER TABLE `plat`
ADD CONSTRAINT `plat_ibfk_1` FOREIGN KEY (`id_type_plat`) REFERENCES `categorie` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
