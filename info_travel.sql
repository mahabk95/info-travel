-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 15 sep. 2021 à 22:09
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `info_travel`
--

-- --------------------------------------------------------

--
-- Structure de la table `depot`
--

CREATE TABLE `depot` (
  `id` int(11) NOT NULL,
  `label` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `depot`
--

INSERT INTO `depot` (`id`, `label`) VALUES
(2, 'Bab Saadoun'),
(3, 'Ben Arous'),
(4, 'Tbourba'),
(5, 'Zahrouni'),
(22, 'tt');

-- --------------------------------------------------------

--
-- Structure de la table `horaires_lignes`
--

CREATE TABLE `horaires_lignes` (
  `id` int(11) NOT NULL,
  `direction` varchar(45) NOT NULL,
  `heure_depart` varchar(11) DEFAULT NULL,
  `heure_arrive` varchar(11) DEFAULT NULL,
  `numero_depart` int(11) DEFAULT NULL,
  `regim_hebdomadeur_id` int(11) NOT NULL,
  `programme_saisonaire_id` int(11) NOT NULL,
  `ligne_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `horaires_lignes`
--

INSERT INTO `horaires_lignes` (`id`, `direction`, `heure_depart`, `heure_arrive`, `numero_depart`, `regim_hebdomadeur_id`, `programme_saisonaire_id`, `ligne_id`) VALUES
(25, '1', '01:11', '02:12', 1, 2, 4, 6),
(26, '1', '03:12', '03:16', 2, 2, 4, 6),
(27, '1', '05:00', '05:30', 3, 2, 4, 6),
(28, '1', '06:00', '06:30', 4, 2, 4, 6),
(29, '1', '07:00', '07:30', 5, 2, 4, 6),
(30, '1', '08:00', '08:30', 6, 2, 4, 6),
(31, '1', '06:00', '06:40', 1, 1, 4, 5),
(32, '1', '07:00', '07:40', 2, 1, 4, 5),
(33, '1', '08:00', '08:40', 3, 1, 4, 5);

-- --------------------------------------------------------

--
-- Structure de la table `ligne`
--

CREATE TABLE `ligne` (
  `id` int(11) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `depot_id` int(11) NOT NULL,
  `regin_hebdomadeur_id` int(11) NOT NULL,
  `station_arrivee_id` int(11) NOT NULL,
  `station_depart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ligne`
--

INSERT INTO `ligne` (`id`, `numero`, `status`, `depot_id`, `regin_hebdomadeur_id`, `station_arrivee_id`, `station_depart_id`) VALUES
(1, '227', '1', 3, 1, 3, 8),
(2, '523', '1', 2, 1, 1, 7),
(4, '3D', '1', 4, 1, 3, 1),
(5, '27', '1', 4, 1, 3, 7),
(6, '23', '0', 5, 1, 3, 5),
(7, '527', '1', 4, 1, 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `programme_saisonaire`
--

CREATE TABLE `programme_saisonaire` (
  `id` int(11) NOT NULL,
  `label` varchar(45) NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `programme_saisonaire`
--

INSERT INTO `programme_saisonaire` (`id`, `label`, `date_debut`, `date_fin`) VALUES
(4, 'HIVER', '2021-10-01 22:18:30', '2021-12-31 22:18:30');

-- --------------------------------------------------------

--
-- Structure de la table `regim_hebdomadaire`
--

CREATE TABLE `regim_hebdomadaire` (
  `id` int(11) NOT NULL,
  `label` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `regim_hebdomadaire`
--

INSERT INTO `regim_hebdomadaire` (`id`, `label`) VALUES
(1, '5 sur 7'),
(2, '6 sur 7'),
(3, '7 sur 7');

-- --------------------------------------------------------

--
-- Structure de la table `station`
--

CREATE TABLE `station` (
  `id` int(11) NOT NULL,
  `label` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `station`
--

INSERT INTO `station` (`id`, `label`) VALUES
(1, 'Barcelone'),
(3, 'Bab Saadoun'),
(5, 'TGM'),
(6, 'Ghazella'),
(7, 'Borj Elbaccouche'),
(8, 'Morneg'),
(9, 'Sidi Rzig');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `login` varchar(45) NOT NULL,
  `pwd` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `matricule` varchar(45) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `cin` varchar(45) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `depot_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `depot`
--
ALTER TABLE `depot`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `horaires_lignes`
--
ALTER TABLE `horaires_lignes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_horaires_lignes_ligne1_idx` (`ligne_id`);

--
-- Index pour la table `ligne`
--
ALTER TABLE `ligne`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_ligne_depot1_idx` (`depot_id`),
  ADD KEY `fk_ligne_regin_hebdomadeur1_idx` (`regin_hebdomadeur_id`),
  ADD KEY `fk_ligne_station2_idx` (`station_arrivee_id`),
  ADD KEY `fk_ligne_station1_idx` (`station_depart_id`);

--
-- Index pour la table `programme_saisonaire`
--
ALTER TABLE `programme_saisonaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `regim_hebdomadaire`
--
ALTER TABLE `regim_hebdomadaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_UNIQUE` (`login`),
  ADD KEY `fk_user_depot_idx` (`depot_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `depot`
--
ALTER TABLE `depot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `horaires_lignes`
--
ALTER TABLE `horaires_lignes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `ligne`
--
ALTER TABLE `ligne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `programme_saisonaire`
--
ALTER TABLE `programme_saisonaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `regim_hebdomadaire`
--
ALTER TABLE `regim_hebdomadaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `station`
--
ALTER TABLE `station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `horaires_lignes`
--
ALTER TABLE `horaires_lignes`
  ADD CONSTRAINT `fk_horaires_lignes_ligne1` FOREIGN KEY (`ligne_id`) REFERENCES `ligne` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `ligne`
--
ALTER TABLE `ligne`
  ADD CONSTRAINT `fk_ligne_depot1` FOREIGN KEY (`depot_id`) REFERENCES `depot` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ligne_regin_hebdomadeur1` FOREIGN KEY (`regin_hebdomadeur_id`) REFERENCES `regim_hebdomadaire` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ligne_station1` FOREIGN KEY (`station_depart_id`) REFERENCES `station` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ligne_station2` FOREIGN KEY (`station_arrivee_id`) REFERENCES `station` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_depot` FOREIGN KEY (`depot_id`) REFERENCES `depot` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
