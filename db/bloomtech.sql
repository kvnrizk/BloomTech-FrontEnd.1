-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 10 jan. 2023 à 16:02
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bloomtech`
--

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `idquestion` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `glasses data`
--

CREATE TABLE `glasses data` (
  `iddata` int(11) NOT NULL,
  `idglasses` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `screentime` int(11) DEFAULT NULL,
  `CO2` int(11) DEFAULT NULL,
  `heartbeat` int(11) DEFAULT NULL,
  `noise` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `glasses identifier`
--

CREATE TABLE `glasses identifier` (
  `idglasses` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `opticians`
--

CREATE TABLE `opticians` (
  `idoptic` int(11) NOT NULL,
  `adressoptic` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `department` int(2) DEFAULT NULL,
  `phoneoptic` varchar(32) DEFAULT NULL,
  `openinghours` varchar(100) DEFAULT NULL,
  `stock` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `idglasses` varchar(11) DEFAULT NULL,
  `Facebook` varchar(100) DEFAULT NULL,
  `Instagram` varchar(100) DEFAULT NULL,
  `Twitter` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `dateOfBirth`, `phone`, `address`, `email`, `password`, `idglasses`, `Facebook`, `Instagram`, `Twitter`) VALUES
(3, 'Kevin', 'Rizk', '2000-12-29', NULL, NULL, 'kevin.rizk14@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL),
(4, 'george ', 'george ', '1999-12-12', NULL, NULL, '13@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL),
(5, 'test', 'test', '2023-01-01', NULL, NULL, 'test@test.com', '098f6bcd4621d373cade4e832627b4f6', NULL, NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`idquestion`);

--
-- Index pour la table `glasses data`
--
ALTER TABLE `glasses data`
  ADD PRIMARY KEY (`iddata`),
  ADD KEY `idglasses` (`idglasses`);

--
-- Index pour la table `glasses identifier`
--
ALTER TABLE `glasses identifier`
  ADD PRIMARY KEY (`idglasses`);

--
-- Index pour la table `opticians`
--
ALTER TABLE `opticians`
  ADD PRIMARY KEY (`idoptic`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD KEY `idglasses` (`idglasses`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `idquestion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `glasses data`
--
ALTER TABLE `glasses data`
  MODIFY `iddata` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `opticians`
--
ALTER TABLE `opticians`
  MODIFY `idoptic` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `glasses data`
--
ALTER TABLE `glasses data`
  ADD CONSTRAINT `glasses data_ibfk_1` FOREIGN KEY (`idglasses`) REFERENCES `glasses identifier` (`idglasses`) ON UPDATE NO ACTION;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idglasses`) REFERENCES `glasses identifier` (`idglasses`) ON DELETE SET NULL ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;