-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 25 jan. 2023 à 22:39
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

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

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`idquestion`, `question`, `answer`) VALUES
(1, 'Quelles sont les spécialités des lunettes <i>Binoclear</i> ?', 'Elles sont géniales.'),
(3, 'Où peut-on trouver les lunettes <i>Binoclear</i> ?', 'Auprès de nos opticiens partenaires.</br>\r\nVous pouvez les retrouver sur la page : <a href=\"http://localhost/BloomTech-FrontEnd.1/location.php\">Où nous trouver ?</a>. '),
(6, 'Comment vous contacter ?', 'En remplissant le formulaire sur la page : <a href=\"http://localhost/BloomTech-FrontEnd.1/nous-contacter.php\">Nous contacter</a>. ');

-- --------------------------------------------------------

--
-- Structure de la table `glassesdata`
--

CREATE TABLE `glassesdata` (
  `iddata` int(11) NOT NULL,
  `idglasses` varchar(11) NOT NULL,
  `datedata` date NOT NULL,
  `screentime` int(11) DEFAULT NULL,
  `CO2` int(11) DEFAULT NULL,
  `heartbeat` int(11) DEFAULT NULL,
  `noise` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `glassesdata`
--

INSERT INTO `glassesdata` (`iddata`, `idglasses`, `datedata`, `screentime`, `CO2`, `heartbeat`, `noise`) VALUES
(1, 'test', '2023-01-12', 7, 5, 10, 23),
(2, 'test', '2023-01-13', 8, 2, 3, 7),
(3, 'test', '2023-01-14', 5, 6, 4, 10),
(4, 'test', '2023-01-15', 5, 6, 4, 10),
(5, 'test', '2023-01-16', 5, 6, 4, 10),
(6, 'test', '2023-01-17', 8, 2, 3, 7),
(7, 'test', '2023-01-18', 7, 5, 10, 23),
(8, 'test', '2023-01-19', 7, 5, 10, 23);

-- --------------------------------------------------------

--
-- Structure de la table `opticians`
--

CREATE TABLE `opticians` (
  `idoptic` int(11) NOT NULL,
  `opticianname` varchar(100) DEFAULT 'OPTICIEN',
  `adressoptic` varchar(100) NOT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `department` int(2) DEFAULT NULL,
  `phoneoptic` varchar(32) DEFAULT NULL,
  `openinghours` varchar(100) DEFAULT NULL,
  `stock` varchar(100) DEFAULT 'Non'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `opticians`
--

INSERT INTO `opticians` (`idoptic`, `opticianname`, `adressoptic`, `latitude`, `longitude`, `department`, `phoneoptic`, `openinghours`, `stock`) VALUES
(1, 'OPTICIEN 1', '1 rue du boulevard 11111 Ville', 'gfd', 'bc', 11, '0111223344', '8h-19h', 'Non'),
(2, 'OPTICIEN 2', '2 rue du boulevard 11111 Ville', 'gfd', 'bc', 11, '0111223344', '8h-19h', 'Non'),
(3, 'OPTICIEN 3', '2 rue du boulevard 11111 Ville', 'gfd', 'bc', 11, '0111223344', '8h-19h', '1'),
(4, 'OPTICIEN 4', '2 rue du boulevard 11111 Ville', 'gfd', 'bc', 11, '0111223344', '8h-19h', '1');

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
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(100) NOT NULL,
  `idglasses` varchar(11) DEFAULT NULL,
  `Facebook` varchar(100) DEFAULT NULL,
  `Instagram` varchar(100) DEFAULT NULL,
  `Twitter` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `dateOfBirth`, `phone`, `address`, `email`, `admin`, `password`, `idglasses`, `Facebook`, `Instagram`, `Twitter`) VALUES
(3, 'Kevin', 'Rizk', '2000-12-29', NULL, NULL, 'kevin.rizk14@gmail.com', 0, '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL),
(4, 'george ', 'george ', '1999-12-12', NULL, NULL, '13@gmail.com', 0, '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL),
(5, 'test', 'test', '2023-01-01', NULL, NULL, 'test@test.com', 0, '098f6bcd4621d373cade4e832627b4f6', 'test', NULL, NULL, NULL),
(6, 'test2', 'test2', '2023-01-01', NULL, NULL, 'test2@test.com', 0, '098f6bcd4621d373cade4e832627b4f6', 'test2', NULL, NULL, NULL),
(10, 'test3', 'test3', '2023-01-01', NULL, NULL, 'test3@test.com', 0, '098f6bcd4621d373cade4e832627b4f6', NULL, NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`idquestion`);

--
-- Index pour la table `glassesdata`
--
ALTER TABLE `glassesdata`
  ADD PRIMARY KEY (`iddata`),
  ADD KEY `idglasses` (`idglasses`);

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
  MODIFY `idquestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `glassesdata`
--
ALTER TABLE `glassesdata`
  MODIFY `iddata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `opticians`
--
ALTER TABLE `opticians`
  MODIFY `idoptic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `glassesdata`
--
ALTER TABLE `glassesdata`
  ADD CONSTRAINT `glassesdata_ibfk_1` FOREIGN KEY (`idglasses`) REFERENCES `users` (`idglasses`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
