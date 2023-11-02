-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 02 nov. 2023 à 14:38
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `panier`
--

-- --------------------------------------------------------

--
-- Structure de la table `panierhuawei`
--

CREATE TABLE `panierhuawei` (
  `id_huawei` int(11) NOT NULL,
  `img` varchar(10000) NOT NULL,
  `prix` int(20) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `panierhuawei`
--

INSERT INTO `panierhuawei` (`id_huawei`, `img`, `prix`, `nom`) VALUES
(1, 'huawei1.jpg', 1000, 'Huawei-Nova-10'),
(2, 'huawei02.jpg', 1200, 'Huawei-p-50-PIC'),
(3, 'huawei03.jpg', 1100, 'Huawei-Nova-Y-90-PIC'),
(4, 'huawei4.jpg', 1200, 'Huawei-Nova-Y-61-PIC'),
(5, 'huawei5.jpg', 10000, 'Huawei-Nova-8-PIC'),
(6, 'huawei6.jpg', 1300, 'Huawei-P50-Lite-XL'),
(7, 'huawei7.jpg', 1500, 'Huawei-Mate-20-Lite'),
(8, 'huawei8.png', 1800, 'Huawei-P50-Pro'),
(9, 'huawei3.jpg', 1400, 'Huawei-P50-Pocket'),
(10, 'huawei10.jpg', 1900, 'Huawei-Mate-50-Pro'),
(11, 'huawei11.jpeg', 1200, 'Huawei-P60-Pro'),
(12, 'huawei12.jpeg', 14000, 'Huawei-Mate-X3');

-- --------------------------------------------------------

--
-- Structure de la table `panieriphone`
--

CREATE TABLE `panieriphone` (
  `id_iphone` int(11) NOT NULL,
  `img` varchar(10000) NOT NULL,
  `prix` int(25) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `panieriphone`
--

INSERT INTO `panieriphone` (`id_iphone`, `img`, `prix`, `nom`) VALUES
(1, 'iphone1.jpg', 1000, 'Apple-Iphone-13-Mini'),
(2, 'iphone2.jpg', 1800, 'Apple-Iphone-14-pro-Red'),
(3, 'iphone3.jpg', 1700, 'Apple-Iphone-SE-2022'),
(4, 'iphone4.jpg', 1600, 'Apple-Iphone-13-Pro-Max'),
(5, 'iphone5.jpg', 1500, 'Apple-Iphone-13-Pro'),
(6, 'iphone6.webp', 1400, 'Apple-Iphone-12-Pro'),
(7, 'iphone7.webp', 1900, 'Apple-Iphone-14-Pro-max'),
(8, 'iphone8.avif', 12000, 'Apple-Iphone-12-Pro-Max'),
(9, 'iphone9.avif', 1500, 'Apple-Iphone-11-Pro-Max'),
(10, 'iphone10.jpg', 1700, 'Apple-Iphone-14-Plus'),
(11, 'iphone11.jpg', 1500, 'Apple-Iphone-14-Pro-Coloris-Jaune'),
(12, 'iphone12.jpg', 1800, 'Apple-Iphone-14-Pro-Max-Coloris-Blanc');

-- --------------------------------------------------------

--
-- Structure de la table `paniersamsung`
--

CREATE TABLE `paniersamsung` (
  `id_samsung` int(11) NOT NULL,
  `img` varchar(10000) NOT NULL,
  `prix` int(20) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `paniersamsung`
--

INSERT INTO `paniersamsung` (`id_samsung`, `img`, `prix`, `nom`) VALUES
(1, 'fold3.jpg', 1000, 'Samsung-GalaxyZ-Fold3'),
(2, 'samsung2.png', 1900, 'Samsung-GalaxyZ-Flip4'),
(3, 'samsungFold2.webp', 2000, 'Samsung GalaxyZ-Fold2'),
(4, 'samsung4.jpg', 1800, 'Samsung-GalaxyZ-S23-Ultra'),
(5, 'samsung5.jpg', 2000, 'Samsung-GalaxyZ-S23-Ultra'),
(6, 'samsung6.jpg', 1900, 'Samsung-GalaxyZ-A-14-Silver'),
(7, 'samsung7.png', 1600, 'Samsung-GalaxyZ-S23-LAVANDE-DOUBLE'),
(8, 'samsung8.webp', 1700, 'Samsung-GalaxyZ-S20-5g'),
(9, 'samsung1.png', 1600, 'Samsung-GalaxyZ-Flip5'),
(10, 'samsung3.jpg', 1500, 'Samsung-GalaxyZ-Fold4'),
(11, 'samsung10.jpg', 1200, 'Samsung-GalaxyZ-A34-5G'),
(12, 'samsung11.webp', 1400, 'Samsung-Galaxy-S20');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `panierhuawei`
--
ALTER TABLE `panierhuawei`
  ADD PRIMARY KEY (`id_huawei`);

--
-- Index pour la table `panieriphone`
--
ALTER TABLE `panieriphone`
  ADD PRIMARY KEY (`id_iphone`);

--
-- Index pour la table `paniersamsung`
--
ALTER TABLE `paniersamsung`
  ADD PRIMARY KEY (`id_samsung`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `panierhuawei`
--
ALTER TABLE `panierhuawei`
  MODIFY `id_huawei` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `panieriphone`
--
ALTER TABLE `panieriphone`
  MODIFY `id_iphone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `paniersamsung`
--
ALTER TABLE `paniersamsung`
  MODIFY `id_samsung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
