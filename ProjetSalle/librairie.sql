-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 30 juin 2023 à 21:19
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
-- Base de données : `librairie`
--

-- --------------------------------------------------------

--
-- Structure de la table `administration`
--

CREATE TABLE `administration` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `login` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `administration`
--

INSERT INTO `administration` (`id`, `date`, `nom`, `prenom`, `login`, `pass`) VALUES
(2, '2023-06-29 16:21:55', 'DONDASSE', 'Saidatou', 'DONDASSESaidatou', 'dac2f08147b77397dd3759ed1f4a7331');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `tel` int(50) NOT NULL,
  `id_sale` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `Nom`, `adresse`, `tel`, `id_sale`) VALUES
(15, 'Maiga Tiguiane', 'tiguiane@gmail.com', 77145623, 1),
(16, 'Dambre Luc', 'luc@gmail.com', 65684517, 1),
(17, 'Minougou Alassane', 'alassane@gmail.com', 78951235, 1),
(18, 'Yonaba Paulline', 'paulline@gmail.com', 69325841, 5),
(19, 'Yonaba Paulline', 'paulline@gmail.com', 69325841, 5),
(20, 'Dondasse', 'saidatoudondasse65@gmail.com', 65632815, 1),
(21, 'Dondasse Saidatou', 'saidatoudondasse65@gmail.com', 65632815, 2),
(22, 'Dondasse Saidatou', 'saidatoudondasse65@gmail.com', 65632815, 2),
(23, 'Dondasse Saidatou', 'saidatoudondasse65@gmail.com', 65632815, 2),
(24, 'Koanda Rafiatou', 'rafiatou@gmail.com', 78451236, 2),
(25, 'Dondasse Ismael', 'saidatoudondasse65@gmail.com', 76139898, 2),
(26, 'Dondasse Ismael', 'saidatoudondasse65@gmail.com', 76139898, 2),
(27, 'Dondasse', 'saidatoudondasse65@gmail.com', 65632815, 2),
(28, 'Dondasse', 'saidatoudondasse65@gmail.com', 65632815, 2),
(29, 'Dondasse', 'saidatoudondasse65@gmail.com', 78451236, 5),
(30, 'Dondasse', 'saidatoudondasse65@gmail.com', 78451236, 5),
(31, 'Dondasse', 'saidatoudondasse65@gmail.com', 76139898, 5),
(32, 'KI Kevin', 'kevin@gmail.com', 77075613, 2),
(33, 'KI Kevin', 'kevin@gmail.com', 77075613, 0),
(34, 'DONDASSE Saidatou', 'saidatoudondasse65@gmail.com', 65632815, 0),
(35, 'DONDASSE Saidatou', 'saidatoudondasse65@gmail.com', 65632815, 0),
(36, 'DONDASSE Saidatou', 'saidatoudondasse65@gmail.com', 65632815, 4),
(37, 'DONDASSE Saidatou', 'saidatoudondasse65@gmail.com', 65632815, 4),
(38, 'DONDASSE Saidatou', 'saidatoudondasse65@gmail.com', 65632815, 4),
(39, 'Hien Pamela', 'pamela@gmail.com', 56073076, 6),
(40, 'Hien Pamela', 'inipamelahien@gmail.com', 56073076, 2),
(41, 'DONDASSE Saidatou', 'saidatoudondasse65@gmail.com', 65632815, 4),
(42, 'Dondasse ismael', 'saidatoudondasse65@gmail.com', 65650524, 6);

-- --------------------------------------------------------

--
-- Structure de la table `sales`
--

CREATE TABLE `sales` (
  `idsale` int(11) NOT NULL,
  `nom` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `capacite` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `equipement` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date` date NOT NULL,
  `duree` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Déchargement des données de la table `sales`
--

INSERT INTO `sales` (`idsale`, `nom`, `capacite`, `equipement`, `date`, `duree`) VALUES
(1, 'Petite', ' 2', ' Tables', '2023-06-01', ' 1h'),
(2, 'Salle de taille moyenne ', ' 8 à 12 personnes', 'Écran de projection ou téléviseur', '2023-06-02', '2h'),
(3, 'Grande salle de réunion ', ' 12 à 20 personnes', 'Rétroprojecteur', '2023-06-03', '1h'),
(4, 'Salle de conférence ', '20 à 50 personnes', 'Tableau blanc ou tableau noir', '2023-06-02', '2h'),
(5, 'Salle de formation ', ' 20 à 50 personnes', 'Vidéoconférence ', '2023-06-01', '1h'),
(6, 'Salle de conférence ou amphithéâtre ', '50 personnes ou plus', 'Système de sonorisation', '2023-06-02', '2h');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sale` (`id_sale`);

--
-- Index pour la table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`idsale`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administration`
--
ALTER TABLE `administration`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `sales`
--
ALTER TABLE `sales`
  MODIFY `idsale` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
