-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 22 nov. 2022 à 23:25
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
(7, 'Sunt porro vitae non', 'Magna do cupidatat d', 4, 'Suscipit ipsum ea de', 376, '1998-08-17', 19, 'books/book637b39232c5191.04059924.jpg', 3),
(10, 'Asperiores obcaecati', 'In consequat Beatae', 4, 'Et ipsa tempor assu', 623, '2009-05-26', 42, 'books/book637bdef4dcb6a9.58604485.jpg', 3),
(11, 'Sunt elit veritati', 'Mollit repudiandae i', 8, 'Tempor aliquip velit', 238, '2005-05-19', 3, 'books/book637cc6b44f4f29.22530411.jpg', 3),
(12, 'Explicabo Pariatur', 'Laudantium do paria', 8, 'Ea consequuntur ea q', 912, '2017-05-22', 88, 'books/book637cc77a79a6f5.87495546.jpg', 3),
(13, 'Numquam exercitation', 'Eu quia dolorem nihi', 10, 'Eum qui et atque qui', 633, '2016-03-06', 9, 'books/book637cc78f65dfd5.00167077.jpg', 3),
(14, 'Molestiae cupidatat ', 'Beatae dolore et qui', 10, 'Molestiae vitae ex c', 202, '1974-08-01', 95, 'books/book637cc7a5c98176.27436424.jpg', 3),
(15, 'Sed corporis consequ', 'Deserunt dolorem dol', 9, 'Id vel tenetur volup', 443, '2019-02-03', 78, 'books/book637cc7b75ad142.33721652.jpg', 3),
(16, 'Sed laboriosam et m', 'Modi placeat simili', 9, 'Adipisicing mollit q', 16, '2011-01-08', 97, 'books/book637cc7d0cc6247.47224614.jpg', 3);

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
(4, 'romance'),
(7, 'drama'),
(8, 'Art'),
(9, 'Science'),
(10, 'Classic'),
(11, 'hi');

-- --------------------------------------------------------

--
-- Structure de la table `library`
--

CREATE TABLE `library` (
  `id_library` int(11) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `library`
--

INSERT INTO `library` (`id_library`, `type`, `date`, `book_id`, `user_id`) VALUES
(1, 'Want to read', '07/11/2000', 7, 3),
(2, 'Want to read', '2022/11/22', 10, 6),
(4, 'Already read', '2022/11/22', 7, 6),
(5, 'Want to read', '2022/11/22', 11, 6),
(6, 'reading', '2022/11/22', 12, 6),
(7, 'reading', '2022/11/22', 15, 6);

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
(3, 'nouha', 'khaoutinouhaila@gmail.com', '$2y$10$NY1Obejn8NSfxIc55hUyDuzTSP7TRKEAT02ulwi70QfP8ZGVo6vf.', 0),
(4, 'Joelle Barrett', 'lapudupa@mailinator.com', '$2y$10$d6UdL.q/7KzNHu6zFLonOeTsyEEON9nwgqyhmHEvs1SurbZl/us.a', 1),
(5, 'Gloria Garza', 'vezypemose@mailinator.com', '$2y$10$b6rWIRqw7bWIEJbXVHWM1.ozFx34etjtos9PKTU/NVZCx68Y2xQnS', 1),
(6, 'nouha', 'n.khaouti@student.youcode.ma', '$2y$10$J2nWehmZXxQxZL6a0HSSG.LHNoGuwQCgI6Ak.gH/r0w4fA4ItwExC', 1),
(7, 'Philip Cochran', 'jalamu@mailinator.com', '$2y$10$KKqTgIPO6AcDUgnEUdrgSezENbe2gtQI5SLaA2jR8LgB1.DRD113y', 1),
(9, '', '', '$2y$10$YKZLHDpq4/S8C4KJCvamu.2NyV/M4GjVChq4ebWsglCEGb7gr9Mpe', 1),
(10, 'Haviva England', 'nouha@gmail.com', '$2y$10$Th4usErDKp/VApEURGGvCuQ1M8mBN7qm7tKgu2odeMasGtiEZPg7.', 1),
(11, 'Olympia Buckner', 'maqawidi@mailinator.com', '$2y$10$NiFwD5KawEJ3J3JFyOsxfeC3aY2tOyhyDevSP0qsgDBTwYUfHgAHO', 1);

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
-- Index pour la table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id_library`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `user_id` (`user_id`);

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
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `library`
--
ALTER TABLE `library`
  MODIFY `id_library` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `library`
--
ALTER TABLE `library`
  ADD CONSTRAINT `library_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`),
  ADD CONSTRAINT `library_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
