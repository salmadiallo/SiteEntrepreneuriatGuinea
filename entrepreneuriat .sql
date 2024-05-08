-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 08 Mai 2024 à 00:55
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `entrepreneuriat`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `texte_commentaire` varchar(255) DEFAULT NULL,
  `date_commentaire` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `conseil`
--

CREATE TABLE `conseil` (
  `id_conseil` int(10) UNSIGNED NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `lien` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `conseil`
--

INSERT INTO `conseil` (`id_conseil`, `titre`, `lien`, `video`) VALUES
(1, 'C\'est quoi la confiance en soi ?', 'Anonyme', '05-04-2024C_est_quoi_la_confiance_en_soi__(360p).mp4');

-- --------------------------------------------------------

--
-- Structure de la table `conseils_ressources`
--

CREATE TABLE `conseils_ressources` (
  `videos_conseil` varchar(255) DEFAULT NULL,
  `titre_video` varchar(255) DEFAULT NULL,
  `lien_video` varchar(255) DEFAULT NULL,
  `id_conseil` int(10) UNSIGNED NOT NULL,
  `type_video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `element_secteur`
--

CREATE TABLE `element_secteur` (
  `id_elem` int(10) UNSIGNED NOT NULL,
  `image_elem` varchar(255) DEFAULT NULL,
  `titre_image_elem` varchar(255) DEFAULT NULL,
  `lien_fb_img_elem` varchar(255) DEFAULT NULL,
  `id_secteur` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `element_secteur`
--

INSERT INTO `element_secteur` (`id_elem`, `image_elem`, `titre_image_elem`, `lien_fb_img_elem`, `id_secteur`) VALUES
(8, '8700fatou1.jpg', 'Actualité de Mme Fatoumata Camara', 'https://www.facebook.com/profile.php?id=100047253635263', 1),
(9, '28805NABE2.jpg', 'Actualité de Mme Djenabou Diallo', 'https://www.facebook.com/zeinacacao', 1),
(10, '7898mariama_cire.jpg', 'Actualité de Mariama Ciré', 'https://www.facebook.com/mamhhf', 2),
(11, '29261nantenin2.jpg', 'Actualité de Nantenin Keîta', 'https://www.facebook.com/nankeiproduction', 2),
(12, '11981diaka1.jpg', 'Actualité de Dr Diaka Sidibé', 'https://www.facebook.com/DrDiaka', 3),
(13, '20738patri.jpg', 'Actualité de Patricia Lamah', 'https://www.facebook.com/PATSNB', 3),
(14, '4994mimiche2.jpeg', 'Actualité d\'Aminata Diabaté', 'https://www.facebook.com/Mimichesfood', 3),
(15, '22576Fatoumata-Cissoko-transformation-ananas.jpg', 'Actualité de Mme Fatoumata Cissoko', 'https://www.facebook.com/fatou.t.cissoko', 1),
(16, '21854Binta5.jpg', 'Actualité de Mme Binta Diallo', 'Anonyme', 2);

-- --------------------------------------------------------

--
-- Structure de la table `idole`
--

CREATE TABLE `idole` (
  `id_idole` int(10) UNSIGNED NOT NULL,
  `nom_idole` varchar(255) DEFAULT NULL,
  `prenom_idole` varchar(255) DEFAULT NULL,
  `texte_parcours` varchar(255) DEFAULT NULL,
  `image_idole` varchar(255) DEFAULT NULL,
  `video_idole` varchar(255) DEFAULT NULL,
  `titre_video_idole` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_message` int(10) UNSIGNED NOT NULL,
  `contenu` text,
  `id_destintaire` int(10) UNSIGNED DEFAULT NULL,
  `id_auteur` int(10) UNSIGNED DEFAULT NULL,
  `date_envoi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id_message`, `contenu`, `id_destintaire`, `id_auteur`, `date_envoi`) VALUES
(50, 'Comment vas-tu ?', 14, 18, '2024-05-06'),
(51, 'je vais  bien et toi ?', 18, 14, '2024-05-06'),
(52, 'ou bien', 14, 18, '2024-05-06');

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `id_niveau` int(10) UNSIGNED NOT NULL,
  `niveau` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `niveau`
--

INSERT INTO `niveau` (`id_niveau`, `niveau`) VALUES
(1, 'Licence 1'),
(2, 'Licence 2'),
(3, 'Licence 3');

-- --------------------------------------------------------

--
-- Structure de la table `propos`
--

CREATE TABLE `propos` (
  `id_propos` int(10) UNSIGNED NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `id_niveau` int(10) UNSIGNED DEFAULT NULL,
  `passion` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `lien_fb` varchar(255) DEFAULT NULL,
  `lien_inst` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `secteur`
--

CREATE TABLE `secteur` (
  `id_secteur` int(10) UNSIGNED NOT NULL,
  `nom_secteur` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `secteur`
--

INSERT INTO `secteur` (`id_secteur`, `nom_secteur`) VALUES
(1, 'Commerce '),
(2, 'Artisanat'),
(3, 'Service');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nom_user` varchar(255) DEFAULT NULL,
  `prenom_user` varchar(255) DEFAULT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL,
  `id_chat_message` int(11) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `email_user` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `nom_user`, `prenom_user`, `mot_de_passe`, `id_chat_message`, `telephone`, `email_user`) VALUES
(1, 'CONTE', 'MABINTY', '$2y$10$ofxwpzoBESOZ11UTKkozI.XtSXB3LBbIyEMc.v8zhhZqvfux0fmEm', 1998291016, 623672910, 'mabinty@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nom_user` varchar(255) DEFAULT NULL,
  `prenom_user` varchar(255) DEFAULT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL,
  `email_user` varchar(255) DEFAULT NULL,
  `id_unique` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `nom_user`, `prenom_user`, `mot_de_passe`, `email_user`, `id_unique`) VALUES
(14, 'CONTE', 'MABINTY', '$2y$10$tu2D9ctqamPQQijo4Lu2U.yxz9pKaPt1MdwYufDVzlHwrokQsEbDi', 'mabinty@gmail.com', 'Déconnecté'),
(15, 'Diallo', 'Salamata', '$2y$10$PJvTpwLeNCRchrD8YuFNueEDjgDDiZTB5yd03QKCeRZAAxi/WXYMO', 'salamata@gmail.com', 'Déconnecté'),
(16, 'Mara', 'Mawa', '$2y$10$JAbo67RMmX9p65Zy0L14MeLpZYGKlPawoefg8pXW07nFmqCq79CHu', 'mara@gmail.com', 'Déconnecté'),
(17, 'CONTE', 'MANTY', '$2y$10$csbTx45DKNUkAxgOvySjkeeHVoeG2iE6Z1doyzDGJBKraUFZQ38je', 'manty@gmail.com', 'Déconnecté'),
(18, 'DIALLO', 'SALMA', '$2y$10$MMuZ9XXqzv3b.ojrdEsBF.uk6Ngr6qut92pIcO2HHvWqa1MrfsUly', 'salma@gmail.com', 'Connecté'),
(19, 'MAMAN', 'PAPA', '$2y$10$W5Nomd9iKbfml59ZGPhFj.tdqEPcUhB3XiOi4aJy4ZB4pfHCPUWqq', 'mapa@gmail.com', 'Déconnecté');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `fk_id_user` (`id_user`);

--
-- Index pour la table `conseil`
--
ALTER TABLE `conseil`
  ADD PRIMARY KEY (`id_conseil`);

--
-- Index pour la table `conseils_ressources`
--
ALTER TABLE `conseils_ressources`
  ADD PRIMARY KEY (`id_conseil`);

--
-- Index pour la table `element_secteur`
--
ALTER TABLE `element_secteur`
  ADD PRIMARY KEY (`id_elem`),
  ADD KEY `fk_id_secteur` (`id_secteur`);

--
-- Index pour la table `idole`
--
ALTER TABLE `idole`
  ADD PRIMARY KEY (`id_idole`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `fk_id_dest` (`id_destintaire`),
  ADD KEY `fk_id_aut` (`id_auteur`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`id_niveau`);

--
-- Index pour la table `propos`
--
ALTER TABLE `propos`
  ADD PRIMARY KEY (`id_propos`),
  ADD KEY `fk_id_niveau` (`id_niveau`);

--
-- Index pour la table `secteur`
--
ALTER TABLE `secteur`
  ADD PRIMARY KEY (`id_secteur`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `conseil`
--
ALTER TABLE `conseil`
  MODIFY `id_conseil` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `conseils_ressources`
--
ALTER TABLE `conseils_ressources`
  MODIFY `id_conseil` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `element_secteur`
--
ALTER TABLE `element_secteur`
  MODIFY `id_elem` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `idole`
--
ALTER TABLE `idole`
  MODIFY `id_idole` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `id_niveau` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `propos`
--
ALTER TABLE `propos`
  MODIFY `id_propos` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `secteur`
--
ALTER TABLE `secteur`
  MODIFY `id_secteur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `element_secteur`
--
ALTER TABLE `element_secteur`
  ADD CONSTRAINT `fk_id_secteur` FOREIGN KEY (`id_secteur`) REFERENCES `secteur` (`id_secteur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_id_aut` FOREIGN KEY (`id_auteur`) REFERENCES `utilisateur` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_dest` FOREIGN KEY (`id_destintaire`) REFERENCES `utilisateur` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `propos`
--
ALTER TABLE `propos`
  ADD CONSTRAINT `fk_id_niveau` FOREIGN KEY (`id_niveau`) REFERENCES `niveau` (`id_niveau`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
