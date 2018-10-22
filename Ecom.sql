-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 04 oct. 2018 à 20:39
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Ecom`
--

-- --------------------------------------------------------

--
-- Structure de la table `Authentification`
--

CREATE TABLE `Authentification` (
  `ID` int(11) NOT NULL,
  `pseudo` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `passeword` varchar(155) NOT NULL,
  `address` varchar(155) NOT NULL,
  `city` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Authentification`
--

INSERT INTO `Authentification` (`ID`, `pseudo`, `email`, `passeword`, `address`, `city`) VALUES
(28, 'juko', 'juniorgiovani@outlook.fr', '$2y$10$E35eG/mr9LZzPBPWhO85W.F9IIHzphKnz/VvJf.WekZrRYuNtmal2', 'dsadsa', 'th'),
(29, 'Fatou Mane ', 'Fatou@gmail.com', '$2y$10$le3HkJbRkQoN3kPlV47iCeqS.DnWizViEw/bwyZlU4j1XJ2U080bO', 'sadsad', 'dsadasd'),
(30, 'Dougourou', 'bk@gmail.com', '$2y$10$lEiy59918rBXVcIqxammoOXG962isVeJh5HFI5d2dWcTYe9rpTqpi', 'asdd', 'th');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE `items` (
  `ID` int(11) NOT NULL,
  `item_name` varchar(155) NOT NULL,
  `item_desc` varchar(255) NOT NULL,
  `Item_pirce` int(11) NOT NULL,
  `item_foto` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Authentification`
--
ALTER TABLE `Authentification`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Authentification`
--
ALTER TABLE `Authentification`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `items`
--
ALTER TABLE `items`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
