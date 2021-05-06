-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 19 avr. 2021 à 07:34
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ndev`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteurs`
--

DROP TABLE IF EXISTS `acteurs`;
CREATE TABLE IF NOT EXISTS `acteurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `commune` varchar(255) NOT NULL,
  `acteur` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `naissance` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `domaine` varchar(255) NOT NULL,
  `annee` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `zones` varchar(255) NOT NULL,
  `type_produit` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `commercialisation` varchar(255) NOT NULL,
  `circuit` varchar(255) NOT NULL,
  `qte_produite` varchar(255) NOT NULL,
  `qte_vendue` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `type_agriculture` varchar(255) NOT NULL,
  `engagement` varchar(255) NOT NULL,
  `produit` varchar(255) NOT NULL,
  `periode` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `acteurs`
--

INSERT INTO `acteurs` (`id`, `region`, `departement`, `commune`, `acteur`, `nom`, `prenom`, `sexe`, `naissance`, `age`, `domaine`, `annee`, `categorie`, `lieu`, `telephone`, `zones`, `type_produit`, `mode`, `commercialisation`, `circuit`, `qte_produite`, `qte_vendue`, `experience`, `type_agriculture`, `engagement`, `produit`, `periode`) VALUES
(1, 'ny', 'ny', 'ny', 'Direct', 'sani', 'issa', 'Masculin', 'ny', '25', 'Maraichage', '12', 'Grossiste', 'ny', '89383822', 'Niamey', 'Vollaile', 'Cash', 'Toute annee', 'Jardin à Niamey', '13', '12', 'Oui', 'fed', 'oui', 'Laitue', 'Saisin Seche'),
(2, 'zr', 'zr', 'az', 'Direct', 'dcce', 'csd', 'Masculin', 'cC D', 'dcd', 'Maraichage', 'dcvd', 'Grossiste', 'cd', 'c', 'Niamey', 'Vollaile', 'Cash', 'Toute l\'annee', 'Jardin à Niamey', 'erz', 'ez', 'Oui', 'fre', 'zef', 'Laitue', 'Saisin Seche'),
(3, '', '', '', 'Direct', '', '', 'Masculin', '', '', 'Maraichage', '', 'Grossiste', '', '', 'Niamey', 'Vollaile', 'Cash', 'Toute l\'annee', 'Jardin à Niamey', '', '', 'Oui', '', '', 'Laitue', 'Saisin Seche');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `acces` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `mdp`, `acces`) VALUES
(1, 'Bachir@ndev.com', 'ee3d910c09fb8effe350a7d1ba4f3970', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
