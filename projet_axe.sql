-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 14 avr. 2023 à 15:17
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_axe`
--

-- --------------------------------------------------------

--
-- Structure de la table `postes`
--

CREATE TABLE `postes` (
  `poste_id` int NOT NULL,
  `contenu` text COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int NOT NULL,
  `date` datetime NOT NULL,
  `tag` varchar(140) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `postes`
--

INSERT INTO `postes` (`poste_id`, `contenu`, `user_id`, `date`, `tag`) VALUES
(15, 'Le bleu du ciel n\'est pas le bleu de la mer. Ce bleu que moi je préfère.', 3, '2023-04-14 15:18:09', '#Orange'),
(20, 'Je voudrais un bonhomme de neige', 3, '2023-04-14 15:44:38', '#Bleu'),
(21, 'Je voudrais un bonhomme de neige', 4, '2023-04-14 15:48:22', '#Vert'),
(22, 'Je voudrais un bonhomme de neige', 3, '2023-04-14 17:07:18', '#Rouge');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int NOT NULL,
  `nom` varchar(140) COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(140) COLLATE utf8mb4_general_ci NOT NULL,
  `mail` varchar(140) COLLATE utf8mb4_general_ci NOT NULL,
  `pseudo` varchar(140) COLLATE utf8mb4_general_ci NOT NULL,
  `mdp` varchar(140) COLLATE utf8mb4_general_ci NOT NULL,
  `photo` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `mail`, `pseudo`, `mdp`, `photo`) VALUES
(3, 'LETARD', 'Pierric', 'pierric@radiomail-fr.com', 'pierricwsh', '$2y$10$.vOFoiU5SIYLGQzwqorVv.4lln3aPQO9mJq7Ooqf0/eyJVPrcvZQa', 'URL'),
(4, 'Dupont', 'Jean', 'AntiKistari@gmail.com', 'Mrpierrouge', '$2y$10$T3SaHa5YOTEnf5PeG3zbce5.5ZIT2cVmKL25nbQErXltKOwTI2Mxe', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:AN');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `postes`
--
ALTER TABLE `postes`
  ADD PRIMARY KEY (`poste_id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `postes`
--
ALTER TABLE `postes`
  MODIFY `poste_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
