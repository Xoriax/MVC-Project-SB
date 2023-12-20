-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 19 déc. 2023 à 16:21
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `smartbike`
--

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `velo_id` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text,
  `date_commande` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `velo_id` (`velo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `velo_id`, `nom`, `prenom`, `email`, `message`, `date_commande`) VALUES
(1, 11, 'testname', 'testfirstname', 'test@gmail.com', 'test n°1', '2023-12-19 15:42:29'),
(2, 9, 'testname2', 'testfirstname2', 'test2@gmail.com', 'test n°2', '2023-12-19 16:20:14');

-- --------------------------------------------------------

--
-- Structure de la table `velos`
--

DROP TABLE IF EXISTS `velos`;
CREATE TABLE IF NOT EXISTS `velos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` text,
  `prix` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `velos`
--

INSERT INTO `velos` (`id`, `nom`, `description`, `prix`, `image`) VALUES
(1, 'BikeOne', 'Description du BikeOne', '999.99', 'BikeOne.jpeg'),
(2, 'Bike22', 'Description du Bike22', '1299.99', 'Bike22.jpeg'),
(3, 'BikeFirst', 'Description du BikeFirst', '1499.99', 'BikeFirst.jpeg'),
(4, 'BikeFuture', 'Description du BikeFuture', '1599.99', 'BikeFuture.jpeg'),
(5, 'BikeObsidian', 'Description du BikeObsidian', '1599.99', 'BikeObsidian.jpeg'),
(7, 'BikeCities', 'Description du BikeCities', '499.99', 'BikeCities.jpeg'),
(9, 'BikeTwo', 'Description du BikeTwo', '1099.99', 'BikeTwo.jpeg'),
(10, 'BikeThree', 'Description du BikeThree', '1199.99', 'BikeThree.jpeg'),
(11, 'Bike5', 'Description du Bike5', '1299.99', 'Bike5.jpeg'),
(8, 'BikeAmetist', 'Description du BikeAmetist', '1399.99', 'BikeAmetist.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
