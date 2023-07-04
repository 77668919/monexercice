-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 04 juil. 2023 à 17:26
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
-- Base de données : `gestiondecompte`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `dateDeNaissance` date NOT NULL,
  `sexe` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `motDePasse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `dateDeNaissance`, `sexe`, `email`, `motDePasse`) VALUES
(5, 'Yameogo', 'Jeannine', '0000-00-00', 'FEMIIN', 'Jeannineyameogo850@gmail.com', 'asdfg'),
(6, 'Yameogo', 'Jeannine', '0000-00-00', 'FEMIIN', 'Jeannineyameogo850@gmail.com', '1234'),
(7, 'Yameogo', 'Jeannine', '0000-00-00', 'FEMIIN', 'Jeannineyameogo850@gmail.com', '1234'),
(8, 'Yameogo', 'Jeannine', '0456-02-13', 'FEMIIN', 'jeannineyameogo@gmail.com', '12345'),
(9, 'Yameogo', 'Jeannine', '4567-03-12', 'FEMIIN', 'Jeannineyameogo850@gmail.com', '1234'),
(10, 'Yameogo', 'Jeanninedf', '1990-04-12', 'FEMIIN', 'Jeannineyameogo850@gmail.com', '12345'),
(11, 'Yameogo', 'Jeanninedf', '1990-04-12', 'FEMIIN', 'Jeannineyameogo850@gmail.com', 'asdfghj'),
(12, 'Yameogo', 'Jeannine', '0000-00-00', 'FEMIIN', 'jeannineyameogo@gmail.com', '1234'),
(13, 'Yameogo', 'Jeannine', '1999-07-12', 'Masculin', 'Jeannineyameogo850@gmail.com', '12345'),
(14, 'Yameogo', 'Jeannine', '1999-07-12', 'Masculin', 'Jeannineyameogo850@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(15, 'Yameogo', 'Jeannine', '1999-07-12', 'Masculin', 'Jeannineyameogo850@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(16, 'Yameogo', 'Jeannine', '1999-07-12', 'Masculin', 'Jeannineyameogo850@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(17, 'Yameogo', 'Jeannine', '1999-07-12', 'Masculin', 'Jeannineyameogo850@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(18, 'Yameogod', 'Jeanninedf', '2023-07-14', 'Masculin', 't@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(19, 'MIHIN', 'Hugues', '2023-07-15', 'Masculin', 'aime@gmail.com', '$2y$10$vIOPndbTKm2PTlfOLetpQ.WVBKfK3xDZej0p9VB7ihPA/9FUPuRw2'),
(20, 'Yameogo', 'Aude', '2023-07-05', 'Feminim', 'aude@gmail.com', '$2y$10$Y1tXwwKbrIv/z.lu82QJE.qlolvU8BcpH9vmm4sn2WJQpF0Oi/ZG.'),
(21, 'Yameogo', 'Jeannine', '2023-07-12', 'Feminim', 'Jeannineyameogo850@gmail.com', '$2y$10$GUF1u8U/NR3tCSZJAz.dtOzbPhOeiQ733y8hdOtuoYvkDX8tDRIWq');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
