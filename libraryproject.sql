-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 19 nov. 2022 à 17:29
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `libraryproject`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `NumberPage` int(11) DEFAULT NULL,
  `published` varchar(100) DEFAULT NULL,
  `isbi` int(11) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`book_id`, `title`, `autor`, `category_id`, `description`, `NumberPage`, `published`, `isbi`, `image`, `admin_id`) VALUES
(7, 'Asperiores laborum ', 'Consectetur et dign', 4, 'Ex qui qui omnis sim', 870, '1978-08-26', 5, 'books/book6378fa9dcecfd3.15395190.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `label` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `label`) VALUES
(4, 'romance');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `user_name`, `email_address`, `user_password`, `user_role`) VALUES
(2, 'Tallulah Dennis', 'rupodo@mailinator.com', 'Pa$$w0rd!', 1),
(3, 'nouha', 'khaoutinouhaila@gmail.com', '$2y$10$a1ONkrQ5Clrw9CfNIkFXl.dMBEwQaYBUX6Cpafo4Na15HbMPWjQEi', 1),
(4, 'Joelle Barrett', 'lapudupa@mailinator.com', '$2y$10$d6UdL.q/7KzNHu6zFLonOeTsyEEON9nwgqyhmHEvs1SurbZl/us.a', 1),
(5, 'Gloria Garza', 'vezypemose@mailinator.com', '$2y$10$b6rWIRqw7bWIEJbXVHWM1.ozFx34etjtos9PKTU/NVZCx68Y2xQnS', 1),
(6, 'nouha', 'n.khaouti@student.youcode.ma', '$2y$10$n3tFEqq6tpe9BGg2d89wC.tFJiVWx30fE1pgmSZGnj5admwO91sB.', 1),
(7, 'Philip Cochran', 'jalamu@mailinator.com', '$2y$10$KKqTgIPO6AcDUgnEUdrgSezENbe2gtQI5SLaA2jR8LgB1.DRD113y', 1),
(9, '', '', '$2y$10$YKZLHDpq4/S8C4KJCvamu.2NyV/M4GjVChq4ebWsglCEGb7gr9Mpe', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
