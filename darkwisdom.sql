-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 13 fév. 2025 à 14:36
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `darkwisdom`
--

-- --------------------------------------------------------

--
-- Structure de la table `citation`
--

CREATE TABLE `citation` (
  `id` int(11) NOT NULL,
  `citation` varchar(255) NOT NULL,
  `source` varchar(45) DEFAULT NULL,
  `auteur` varchar(45) NOT NULL,
  `theme` varchar(50) NOT NULL,
  `utilisateurs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `citation`
--

INSERT INTO `citation` (`id`, `citation`, `source`, `auteur`, `theme`, `utilisateurs_id`) VALUES
(1, 'La douleur est inévitable. La souffrance est facultative.', 'Naruto', 'Nagato', 'Anime', 3),
(2, 'Le monde n\'est pas beau, mais il l\'est.', 'Kino no Tabi', 'Kino', 'Anime', 3),
(3, 'La puissance seule est la véritable justice.', 'One Piece', 'Sakazuki (Akainu)', 'Anime', 3),
(4, 'Même si je ne peux pas faire tout ce que je veux, au moins je peux faire ce que je peux.', 'Clannad', 'Nagisa Furukawa', 'Anime', 3),
(5, 'Un cœur brisé peut être guéri avec du temps et des amis.', 'Fruits Basket', 'Tohru Honda', 'Anime', 3),
(6, 'Un homme devient fort quand il a quelque chose à protéger.', 'Bleach', 'Kurosaki Ichigo', 'Anime', 3),
(7, 'Un héros n\'est pas celui qui ne tombe jamais, mais celui qui se relève toujours.', 'My Hero Academia', 'All Might', 'Anime', 3),
(8, 'Un roi ne doit pas pleurer. Car il doit être l\'espoir de son peuple.', 'Code Geass', 'Lelouch vi Britannia', 'Anime', 3),
(9, 'Les faibles ne doivent pas choisir leur façon de mourir.', 'Attack on Titan', 'Levi Ackerman', 'Anime', 3),
(10, 'Les miracles ne se produisent pas pour ceux qui ne croient pas en eux.', 'One Piece', 'Marshall D. Teach (Barbe Noire)', 'Anime', 3),
(11, 'Les hommes ne deviennent pas des rois parce qu\'ils sont forts. Ils deviennent forts parce qu\'ils sont des rois.', 'Magi', 'Sinbad', 'Anime', 3),
(12, 'Même si je ne peux pas le faire maintenant, je vais devenir quelqu\'un qui pourra.', 'Haikyuu!!', 'Hinata Shoyo', 'Anime', 3),
(13, 'Les liens entre les personnes sont ce qui fait leur véritable force.', 'Fairy Tail', 'Erza Scarlet', 'Anime', 3),
(14, 'Même le plus petit des flocons de neige peut déclencher une avalanche.', 'Steins;Gate', 'Okabe Rintarou', 'Anime', 3),
(15, 'Peu importe à quel point tu es talentueux, certaines choses ne peuvent être faites seul.', 'Hunter x Hunter', 'Gon Freecss', 'Anime', 3),
(16, 'Les humains sont intéressants.', 'Death Note', 'Ryuk', 'Anime', 3),
(17, 'La peur est la vraie nature du pouvoir.', 'Tokyo Ghoul', 'Yoshimura', 'Anime', 3),
(18, 'Ne vis pas en pensant à ce que tu as perdu, mais à ce qu\'il te reste.', 'Fullmetal Alchemist: Brotherhood', 'Edward Elric', 'Anime', 3),
(19, 'Les mots ne suffisent pas toujours. Il faut agir.', 'Vinland Saga', 'Thorfinn', 'Anime', 3),
(20, 'Tu es déjà mort.', 'Hokuto no Ken', 'Kenshiro', 'Anime', 3),
(21, 'Que la Force soit avec toi.', 'Star Wars', 'Obi-Wan Kenobi', 'Film', 3),
(22, 'Pourquoi tombons-nous ? Pour mieux apprendre à nous relever.', 'Batman Begins', 'Alfred Pennyworth', 'Film', 3),
(23, 'La vie, c\'est comme une boîte de chocolats : on ne sait jamais sur quoi on va tomber.', 'Forrest Gump', 'Forrest Gump', 'Film', 3),
(24, 'Avec un grand pouvoir vient une grande responsabilité.', 'Spider-Man', 'Oncle Ben', 'Film', 3),
(25, 'Je reviendrai.', 'Terminator', 'Terminator', 'Film', 3),
(26, 'L\'héritage d\'un homme n\'est pas ce qu\'il laisse aux autres, mais ce qu\'il leur inspire.', 'Gladiator', 'Maximus', 'Film', 3),
(27, 'Le plus important, ce n’est pas d’éviter les coups, c’est de savoir encaisser.', 'Rocky Balboa', 'Rocky', 'Film', 3),
(28, 'Pourquoi si sérieux ?', 'The Dark Knight', 'Joker', 'Film', 3),
(29, 'Tout ce que nous avons à décider, c\'est quoi faire du temps qui nous est imparti.', 'Le Seigneur des Anneaux', 'Gandalf', 'Film', 3),
(30, 'Ce n\'est pas à cause de ce que je suis, mais à cause de ce que je fais.', 'Batman Begins', 'Bruce Wayne', 'Film', 3),
(31, 'L\'amour, c\'est comme le vent : on ne peut pas le voir, mais on peut le sentir.', 'A Walk to Remember', 'Landon Carter', 'Film', 3),
(32, 'La peur mène à la colère, la colère mène à la haine, la haine mène à la souffrance.', 'Star Wars', 'Yoda', 'Film', 3),
(33, 'Chaque minute qui passe est une occasion de changer le cours de sa vie.', 'Vanilla Sky', 'David Aames', 'Film', 3),
(34, 'On ne vit qu\'une fois, mais si on le fait bien, une fois suffit.', 'Mae West', 'Mae West', 'Film', 3),
(35, 'Le bonheur n\'est réel que lorsqu\'il est partagé.', 'Into the Wild', 'Christopher McCandless', 'Film', 3),
(36, 'Tu vois, dans ce monde, il y a deux catégories de personnes : ceux qui ont un pistolet chargé et ceux qui creusent. Toi, tu creuses.', 'Le Bon, la Brute et le Truand', 'Blondin', 'Film', 3),
(37, 'La seule chose qui peut nous faire traverser cette vie, c\'est un sens aigu de l\'humour.', 'La Ligne verte', 'Paul Edgecomb', 'Film', 3),
(38, 'Gagne ton destin !', 'Braveheart', 'William Wallace', 'Film', 3),
(39, 'La peur est le tueur de l\'esprit.', 'Dune', 'Paul Atréides', 'Film', 3),
(40, 'Tout ce que tu dois faire, c’est décider ce que tu veux faire de ton temps.', 'Le Seigneur des Anneaux', 'Gandalf', 'Film', 3),
(41, 'Demain, dès l’aube, à l’heure où blanchit la campagne, Je partirai.', 'Les Contemplations', 'Victor Hugo', 'Poésie', 3),
(42, 'Il n’y a pas de hasard, il n’y a que des rendez-vous.', 'Les Yeux d\'Elsa', 'Paul Éluard', 'Poésie', 3),
(43, 'Là, tout n\'est qu\'ordre et beauté, Luxe, calme et volupté.', 'L\'Invitation au voyage', 'Charles Baudelaire', 'Poésie', 3),
(44, 'Aimons toujours ! Aimons encore !', 'Les Châtiments', 'Victor Hugo', 'Poésie', 3),
(45, 'L’homme n’est qu’un roseau, le plus faible de la nature, mais c’est un roseau pensant.', 'Pensées', 'Blaise Pascal', 'Poésie', 3),
(46, 'Ô temps ! Suspends ton vol, et vous, heures propices, suspendez votre cours !', 'Le Lac', 'Alphonse de Lamartine', 'Poésie', 3),
(47, 'Je suis le ténébreux, le veuf, l’inconsolé.', 'El Desdichado', 'Gérard de Nerval', 'Poésie', 3),
(48, 'Il pleure dans mon cœur comme il pleut sur la ville.', 'Romances sans paroles', 'Paul Verlaine', 'Poésie', 3),
(49, 'La mer, la mer, toujours recommencée !', 'Cahier de Douai', 'Paul Valéry', 'Poésie', 3),
(50, 'Le vent se lève ! Il faut tenter de vivre !', 'Le Cimetière Marin', 'Paul Valéry', 'Poésie', 3),
(51, 'La nuit n’est jamais complète.', 'Capitale de la douleur', 'Paul Éluard', 'Poésie', 3),
(52, 'J’ai tant rêvé de toi que tu perds ta réalité.', 'L’Amour la poésie', 'Robert Desnos', 'Poésie', 3),
(53, 'Là-bas, tout est neuf et tout est sauvage.', 'Là-bas', 'Louis Aragon', 'Poésie', 3),
(54, 'Les sanglots longs des violons de l’automne blessent mon cœur d’une langueur monotone.', 'Chanson d’automne', 'Paul Verlaine', 'Poésie', 3),
(55, 'Il est des parfums frais comme des chairs d’enfants.', 'Les Fleurs du mal', 'Charles Baudelaire', 'Poésie', 3),
(56, 'L’amour est un trésor de patience et de joie.', 'Amours', 'Ronsard', 'Poésie', 3),
(57, 'Le bonheur est parfois caché dans l’inconnu.', 'Fragments d\'un discours amoureux', 'Roland Barthes', 'Poésie', 3),
(58, 'Et rose, elle a vécu ce que vivent les roses, l’espace d’un matin.', 'Sonnet pour Hélène', 'Ronsard', 'Poésie', 3),
(59, 'Chaque jour est un adieu, chaque instant est un rêve.', 'L’Horloge', 'Charles Baudelaire', 'Poésie', 3),
(60, 'Le plus grand secret du bonheur, c\'est d\'être bien avec soi.', 'Pensées', 'Montaigne', 'Poésie', 3);

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

CREATE TABLE `favoris` (
  `id` int(11) NOT NULL,
  `utilisateurs_id` int(11) NOT NULL,
  `citation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `pseudo` varchar(45) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `date_de_creation` datetime NOT NULL,
  `roles` enum('utilisateur','admin') NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `pseudo`, `mot_de_passe`, `date_de_creation`, `roles`, `mail`) VALUES
(1, 'Adjassa', 'Aimé', 'admin', '$2y$10$mk3wO0N1JpmeLjPNRRn2PukkmZBpuu.ScVECuYChIkMGanpLNiy8.', '0000-00-00 00:00:00', 'utilisateur', 'aime.adj@hotmail.com'),
(3, 'Adjassa', 'Aimé', 'ade', '$2y$10$.aNW2CG2S3hcVygdk6rFaexHGE0fF2HWfCZOMfdaz/AGP8FiH.Wd6', '0000-00-00 00:00:00', 'utilisateur', 'aadj@hotmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `citation`
--
ALTER TABLE `citation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_citation_utilisateurs1_idx` (`utilisateurs_id`);

--
-- Index pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_favoris_utilisateurs1_idx` (`utilisateurs_id`),
  ADD KEY `fk_favoris_citation1_idx` (`citation_id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo_UNIQUE` (`pseudo`),
  ADD UNIQUE KEY `mail_UNIQUE` (`mail`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `citation`
--
ALTER TABLE `citation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pour la table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `citation`
--
ALTER TABLE `citation`
  ADD CONSTRAINT `fk_citation_utilisateurs1` FOREIGN KEY (`utilisateurs_id`) REFERENCES `utilisateurs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `fk_favoris_citation1` FOREIGN KEY (`citation_id`) REFERENCES `citation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_favoris_utilisateurs1` FOREIGN KEY (`utilisateurs_id`) REFERENCES `utilisateurs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
