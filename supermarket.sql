-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 16 mai 2021 à 23:52
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `supermarket`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_cli` int(11) NOT NULL AUTO_INCREMENT,
  `prenom_cli` varchar(150) NOT NULL,
  `nom_cli` varchar(100) NOT NULL,
  `avance_cli` int(20) DEFAULT NULL,
  `reste_a_payer_cli` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_cli`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_cli`, `prenom_cli`, `nom_cli`, `avance_cli`, `reste_a_payer_cli`) VALUES
(1, 'Modou Khoulé', 'THIAM', NULL, NULL),
(2, 'Demba ', 'BA', NULL, NULL),
(5, 'Bocar ', 'SALL', NULL, NULL),
(6, 'Amadou ', 'MBAYE', NULL, NULL),
(7, 'Sadio ', 'LY', NULL, NULL),
(8, 'Omar ', 'BATHYLI', NULL, NULL),
(9, 'Mabo ', 'TALL', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commander`
--

DROP TABLE IF EXISTS `commander`;
CREATE TABLE IF NOT EXISTS `commander` (
  `id_prod` int(11) NOT NULL,
  `id_cli` int(11) NOT NULL,
  `date_liv` date NOT NULL,
  `num_liv` int(20) NOT NULL AUTO_INCREMENT,
  `quantite_com` int(11) NOT NULL,
  `prix_com` int(11) NOT NULL,
  PRIMARY KEY (`num_liv`),
  KEY `id_prod` (`id_prod`),
  KEY `id_cli` (`id_cli`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commander`
--

INSERT INTO `commander` (`id_prod`, `id_cli`, `date_liv`, `num_liv`, `quantite_com`, `prix_com`) VALUES
(2, 2, '2021-04-28', 1, 12, 15646),
(2, 3, '2021-04-28', 2, 10, 16565),
(2, 4, '2021-04-28', 3, 7, 66556),
(2, 1, '2021-04-28', 4, 19, 76767);

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `id_employe` int(11) NOT NULL AUTO_INCREMENT,
  `prenom_employe` varchar(150) NOT NULL,
  `nom_employe` int(100) NOT NULL,
  `poste_employe` varchar(255) NOT NULL,
  `surnom_employe` varchar(150) NOT NULL,
  `age_employe` int(11) NOT NULL,
  PRIMARY KEY (`id_employe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_prod` int(11) NOT NULL AUTO_INCREMENT,
  `nom_prod` varchar(100) NOT NULL,
  `quantite_prod` int(10) NOT NULL,
  `prix_prod` int(15) NOT NULL,
  PRIMARY KEY (`id_prod`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_prod`, `nom_prod`, `quantite_prod`, `prix_prod`) VALUES
(1, 'Chocolat', 12, 12000),
(2, 'Beurre', 14, 13000),
(3, 'Fromage', 14, 11000),
(4, 'Riz', 3, 18500);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `password_user` varchar(255) NOT NULL,
  `email_user` varchar(150) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
