-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 06 avr. 2023 à 13:44
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
-- Base de données : `utilisateurs`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(2, 'Baroth', 'Etienne', 'test', 'test'),
(3, '', 'Etienne', 'test', 'test'),
(4, '', 'Etienne', 'test', 'test'),
(5, '', 'Etienne', 'test', 'test'),
(6, '', 'Etienne', 'test', 'test'),
(9, 'Pierre', 'Jean', 'mdp', 'mdp'),
(10, 'Baroth', 'Etienne', 'tt', 'tt'),
(11, 'Baroth', 'Etienne', 'tt', 'tt'),
(12, 'Baroth', 'Etienne', 'Abcddddd!!9', 'Abcddddd!!9'),
(13, 'Maro', 'Marc', 'Bravoalpha1!', 'Bravoalpha1!'),
(14, 'Malus', 'Marc', 'test@test', 'Bravoalpha2!'),
(15, 'Baroth', 'Jean', 'yo@yo.com', 'test'),
(16, 'Testons', 'LeTest', 'yo@yo.com', 'test'),
(17, '', '', 'Etienne', 'Etienne'),
(18, '', '', 'Etienne', 'Etienne');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
