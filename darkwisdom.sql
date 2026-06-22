SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
SET NAMES utf8mb4;

-- --------------------------------------------------------
-- Base de données : `darkwisdom`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `pseudo` varchar(45) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `date_de_creation` datetime NOT NULL,
  `roles` enum('utilisateur','admin') NOT NULL,
  `mail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo_UNIQUE` (`pseudo`),
  UNIQUE KEY `mail_UNIQUE` (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `citation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `citation` varchar(255) NOT NULL,
  `source` varchar(45) DEFAULT NULL,
  `auteur` varchar(45) NOT NULL,
  `theme` varchar(50) NOT NULL,
  `utilisateurs_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_citation_utilisateurs1_idx` (`utilisateurs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `favoris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateurs_id` int(11) NOT NULL,
  `citation_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_favoris_utilisateurs1_idx` (`utilisateurs_id`),
  KEY `fk_favoris_citation1_idx` (`citation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `citation`
  ADD CONSTRAINT `fk_citation_utilisateurs1` FOREIGN KEY (`utilisateurs_id`) REFERENCES `utilisateurs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `favoris`
  ADD CONSTRAINT `fk_favoris_citation1` FOREIGN KEY (`citation_id`) REFERENCES `citation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_favoris_utilisateurs1` FOREIGN KEY (`utilisateurs_id`) REFERENCES `utilisateurs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

-- --------------------------------------------------------
-- Utilisateurs (mot de passe : Admin1234!)
-- --------------------------------------------------------

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `pseudo`, `mot_de_passe`, `date_de_creation`, `roles`, `mail`) VALUES
(1, 'Admin', 'Dark', 'admin', '$2y$10$mk3wO0N1JpmeLjPNRRn2PukkmZBpuu.ScVECuYChIkMGanpLNiy8.', '2025-01-01 00:00:00', 'admin', 'admin@darkwisdom.fr');

-- --------------------------------------------------------
-- Citations
-- --------------------------------------------------------

INSERT INTO `citation` (`citation`, `source`, `auteur`, `theme`, `utilisateurs_id`) VALUES

-- ============================================================
-- PHILOSOPHIE (25 citations)
-- ============================================================
('Je pense, donc je suis.', 'Discours de la méthode', 'René Descartes', 'Philosophie', 1),
('L''homme est condamné à être libre.', 'L''Être et le Néant', 'Jean-Paul Sartre', 'Philosophie', 1),
('Ce qui ne me tue pas me rend plus fort.', 'Le Crépuscule des idoles', 'Friedrich Nietzsche', 'Philosophie', 1),
('La vie non examinée ne vaut pas la peine d''être vécue.', 'Apologie de Socrate', 'Socrate', 'Philosophie', 1),
('L''enfer, c''est les autres.', 'Huis Clos', 'Jean-Paul Sartre', 'Philosophie', 1),
('On ne naît pas femme, on le devient.', 'Le Deuxième Sexe', 'Simone de Beauvoir', 'Philosophie', 1),
('Connais-toi toi-même.', NULL, 'Socrate', 'Philosophie', 1),
('L''homme est un animal politique.', 'Politique', 'Aristote', 'Philosophie', 1),
('Dieu est mort.', 'Le Gai Savoir', 'Friedrich Nietzsche', 'Philosophie', 1),
('Il faut imaginer Sisyphe heureux.', 'Le Mythe de Sisyphe', 'Albert Camus', 'Philosophie', 1),
('La philosophie n''est pas une théorie mais une activité.', 'Tractatus logico-philosophicus', 'Ludwig Wittgenstein', 'Philosophie', 1),
('Je ne sais qu''une chose, c''est que je ne sais rien.', NULL, 'Socrate', 'Philosophie', 1),
('Le courage, c''est de savoir avoir peur et de ne pas en être paralysé.', NULL, 'Épictète', 'Philosophie', 1),
('Tout ce qui est grand est difficile autant que rare.', 'L''Éthique', 'Baruch Spinoza', 'Philosophie', 1),
('La vérité est le tout.', 'Phénoménologie de l''Esprit', 'Georg Wilhelm Friedrich Hegel', 'Philosophie', 1),
('Ce n''est pas que les choses sont difficiles qui nous empêche d''oser, c''est que nous n''osons pas qui les rend difficiles.', 'Lettres à Lucilius', 'Sénèque', 'Philosophie', 1),
('Le temps est un enfant qui joue, qui joue.', 'Fragments', 'Héraclite', 'Philosophie', 1),
('L''ignorance est la racine de tout mal.', 'Ménon', 'Platon', 'Philosophie', 1),
('Ose savoir.', 'Qu''est-ce que les Lumières ?', 'Emmanuel Kant', 'Philosophie', 1),
('L''existence précède l''essence.', 'L''Existentialisme est un humanisme', 'Jean-Paul Sartre', 'Philosophie', 1),
('Le bonheur est dans l''âme qui pense juste.', 'Pensées', 'Marc Aurèle', 'Philosophie', 1),
('Le meilleur moyen de se plaindre, c''est de faire quelque chose.', NULL, 'Denis Diderot', 'Philosophie', 1),
('On peut tout enlever à un homme sauf la liberté de choisir son attitude.', 'Découvrir un sens à sa vie', 'Viktor Frankl', 'Philosophie', 1),
('Mieux vaut une tête bien faite qu''une tête bien pleine.', 'Essais', 'Michel de Montaigne', 'Philosophie', 1),
('Le doute est le commencement de la sagesse.', NULL, 'Aristote', 'Philosophie', 1),

-- ============================================================
-- LITTÉRATURE (25 citations)
-- ============================================================
('On ne voit bien qu''avec le cœur, l''essentiel est invisible pour les yeux.', 'Le Petit Prince', 'Antoine de Saint-Exupéry', 'Littérature', 1),
('Toutes les familles heureuses se ressemblent, mais chaque famille malheureuse l''est à sa façon.', 'Anna Karénine', 'Léon Tolstoï', 'Littérature', 1),
('La beauté sauvera le monde.', 'L''Idiot', 'Fiodor Dostoïevski', 'Littérature', 1),
('Il faut cultiver notre jardin.', 'Candide', 'Voltaire', 'Littérature', 1),
('Les hommes font leur propre histoire, mais ils ne la font pas arbitrairement.', 'Le 18 Brumaire', 'Karl Marx', 'Littérature', 1),
('Être ou ne pas être, telle est la question.', 'Hamlet', 'William Shakespeare', 'Littérature', 1),
('Aimez-vous les uns les autres.', 'L''Évangile selon Jean', 'La Bible', 'Littérature', 1),
('Le monde va finir. La seule raison pour laquelle il pourrait durer, c''est qu''il existe.', 'Mon cœur mis à nu', 'Charles Baudelaire', 'Littérature', 1),
('Tout ce que j''ai appris de ma vie se tient en trois mots : elle continue.', 'The Road Not Taken', 'Robert Frost', 'Littérature', 1),
('Un livre ouvert est un cerveau qui parle ; fermé, un ami qui attend.', NULL, 'Victor Hugo', 'Littérature', 1),
('Je ne cherche pas. Je trouve.', NULL, 'Pablo Picasso', 'Littérature', 1),
('Il faut être toujours ivre. Tout est là : c''est l''unique question.', 'Le Spleen de Paris', 'Charles Baudelaire', 'Littérature', 1),
('Nul n''est une île.', 'Devotions upon Emergent Occasions', 'John Donne', 'Littérature', 1),
('Ce que l''on conçoit bien s''énonce clairement, et les mots pour le dire arrivent aisément.', 'Art poétique', 'Nicolas Boileau', 'Littérature', 1),
('La vérité est rarement pure et n''est jamais simple.', 'L''Importance d''être Constant', 'Oscar Wilde', 'Littérature', 1),
('Seuls les dieux peuvent se permettre d''être bêtes.', 'Crime et Châtiment', 'Fiodor Dostoïevski', 'Littérature', 1),
('En ce monde rien n''est certain, sauf la mort et les impôts.', NULL, 'Benjamin Franklin', 'Littérature', 1),
('Les rêves sont des vérités qui dorment.', 'Les Chants de Maldoror', 'Lautréamont', 'Littérature', 1),
('Tant qu''il y aura des hommes, la guerre sera.', 'Les Misérables', 'Victor Hugo', 'Littérature', 1),
('L''art, c''est le mensonge qui dit la vérité.', NULL, 'Pablo Picasso', 'Littérature', 1),
('Il n''y a de nouveau que ce qui est oublié.', NULL, 'Marie-Anne de Bertin', 'Littérature', 1),
('Le génie, c''est un pour cent d''inspiration et quatre-vingt-dix-neuf pour cent de transpiration.', NULL, 'Thomas Edison', 'Littérature', 1),
('La vie est ce que tu en fais.', 'Walden', 'Henry David Thoreau', 'Littérature', 1),
('Toute grande décision crée ses propres conditions de succès.', NULL, 'Albert Camus', 'Littérature', 1),
('Rien n''est plus dangereux qu''une idée, quand on n''en a qu''une.', 'Propos sur la religion', 'Émile-Auguste Chartier (Alain)', 'Littérature', 1),

-- ============================================================
-- POÉSIE (20 citations)
-- ============================================================
('Le vent se lève ! Il faut tenter de vivre !', 'Le Cimetière Marin', 'Paul Valéry', 'Poésie', 1),
('Les sanglots longs des violons de l''automne blessent mon cœur d''une langueur monotone.', 'Chanson d''automne', 'Paul Verlaine', 'Poésie', 1),
('Il pleure dans mon cœur comme il pleut sur la ville.', 'Romances sans paroles', 'Paul Verlaine', 'Poésie', 1),
('Là, tout n''est qu''ordre et beauté, luxe, calme et volupté.', 'L''Invitation au voyage', 'Charles Baudelaire', 'Poésie', 1),
('Et rose, elle a vécu ce que vivent les roses, l''espace d''un matin.', 'Consolation à M. Du Périer', 'François de Malherbe', 'Poésie', 1),
('Demain, dès l''aube, à l''heure où blanchit la campagne, je partirai.', 'Les Contemplations', 'Victor Hugo', 'Poésie', 1),
('J''ai tant rêvé de toi que tu perds ta réalité.', 'Corps et Biens', 'Robert Desnos', 'Poésie', 1),
('La nuit n''est jamais complète.', 'Capitale de la douleur', 'Paul Éluard', 'Poésie', 1),
('Ô temps ! Suspends ton vol, et vous, heures propices, suspendez votre cours !', 'Le Lac', 'Alphonse de Lamartine', 'Poésie', 1),
('Il est des parfums frais comme des chairs d''enfants, doux comme les hautbois.', 'Correspondances', 'Charles Baudelaire', 'Poésie', 1),
('Je suis le ténébreux, le veuf, l''inconsolé.', 'El Desdichado', 'Gérard de Nerval', 'Poésie', 1),
('Ma jeunesse ne fut qu''un ténébreux orage.', 'L''Ennemi', 'Charles Baudelaire', 'Poésie', 1),
('Sous le pont Mirabeau coule la Seine et nos amours.', 'Le Pont Mirabeau', 'Guillaume Apollinaire', 'Poésie', 1),
('Je suis venu, calme orphelin, riche de mes seuls yeux tranquilles.', 'Œuvres complètes', 'Jules Laforgue', 'Poésie', 1),
('Vois sur ces canaux dormir ces vaisseaux dont l''humeur est vagabonde.', 'L''Invitation au voyage', 'Charles Baudelaire', 'Poésie', 1),
('Il n''y a pas de hasard, il n''y a que des rendez-vous.', 'Les Yeux d''Elsa', 'Paul Éluard', 'Poésie', 1),
('L''homme n''est qu''un roseau, le plus faible de la nature, mais c''est un roseau pensant.', 'Pensées', 'Blaise Pascal', 'Poésie', 1),
('Mon cœur est en repos et mon âme est sereine.', 'Sagesse', 'Paul Verlaine', 'Poésie', 1),
('La mer, la mer, toujours recommencée !', 'Le Cimetière Marin', 'Paul Valéry', 'Poésie', 1),
('Le ciel est, par-dessus le toit, si bleu, si calme !', 'Sagesse', 'Paul Verlaine', 'Poésie', 1),

-- ============================================================
-- ANIME (30 citations)
-- ============================================================
('La douleur est inévitable. La souffrance est facultative.', 'Naruto', 'Nagato', 'Anime', 1),
('Un héros n''est pas celui qui ne tombe jamais, mais celui qui se relève toujours.', 'My Hero Academia', 'All Might', 'Anime', 1),
('Les faibles ne doivent pas choisir leur façon de mourir.', 'Attack on Titan', 'Levi Ackerman', 'Anime', 1),
('Un homme devient fort quand il a quelque chose à protéger.', 'Bleach', 'Kurosaki Ichigo', 'Anime', 1),
('Ne vis pas en pensant à ce que tu as perdu, mais à ce qu''il te reste.', 'Fullmetal Alchemist: Brotherhood', 'Edward Elric', 'Anime', 1),
('Les humains sont intéressants.', 'Death Note', 'Ryuk', 'Anime', 1),
('La peur est la vraie nature du pouvoir.', 'Tokyo Ghoul', 'Yoshimura', 'Anime', 1),
('Même le plus petit des flocons de neige peut déclencher une avalanche.', 'Steins;Gate', 'Okabe Rintarou', 'Anime', 1),
('Les liens entre les personnes sont ce qui fait leur véritable force.', 'Fairy Tail', 'Erza Scarlet', 'Anime', 1),
('Le monde n''est pas beau, mais il l''est.', 'Kino no Tabi', 'Kino', 'Anime', 1),
('Peu importe à quel point tu es talentueux, certaines choses ne peuvent être faites seul.', 'Hunter x Hunter', 'Gon Freecss', 'Anime', 1),
('La puissance seule est la véritable justice.', 'One Piece', 'Akainu', 'Anime', 1),
('Les miracles ne se produisent pas pour ceux qui ne croient pas en eux.', 'One Piece', 'Barbe Noire', 'Anime', 1),
('Un roi ne doit pas pleurer. Car il doit être l''espoir de son peuple.', 'Code Geass', 'Lelouch vi Britannia', 'Anime', 1),
('Tu es déjà mort.', 'Hokuto no Ken', 'Kenshiro', 'Anime', 1),
('Les mots ne suffisent pas toujours. Il faut agir.', 'Vinland Saga', 'Thorfinn', 'Anime', 1),
('Si tu ne renonces pas, si tu ne te rends pas, alors tu es un héros.', 'One Piece', 'Monkey D. Luffy', 'Anime', 1),
('Le but d''une vie, c''est de mourir sans regret.', 'Re:Zero', 'Subaru Natsuki', 'Anime', 1),
('Ce qui est triste, ce n''est pas de mourir. C''est de mourir sans avoir rien accompli.', 'Neon Genesis Evangelion', 'Kaji Ryoji', 'Anime', 1),
('Les règles existent pour être brisées par ceux qui en sont dignes.', 'Code Geass', 'Lelouch vi Britannia', 'Anime', 1),
('Le passé ne change jamais. Mais ce qu''on peut en faire, si.', 'Violet Evergarden', 'Gilbert Bougainvillea', 'Anime', 1),
('Je ne perds jamais. Soit je gagne, soit j''apprends.', 'Haikyuu!!', 'Keiji Akaashi', 'Anime', 1),
('La vraie force, c''est de continuer même quand tout te pousse à t''arrêter.', 'Demon Slayer', 'Tanjiro Kamado', 'Anime', 1),
('Ceux qui violent les règles sont des ordures, mais ceux qui abandonnent leurs amis sont pires que des ordures.', 'Naruto', 'Kakashi Hatake', 'Anime', 1),
('On ne peut pas vivre sa vie sans faire de mal aux autres. C''est la nature humaine.', 'Attack on Titan', 'Reiner Braun', 'Anime', 1),
('Si tu te bats pour quelque chose, bats-toi jusqu''au bout.', 'Berserk', 'Guts', 'Anime', 1),
('L''espoir est une bonne chose, peut-être même la meilleure.', 'Fullmetal Alchemist: Brotherhood', 'Roy Mustang', 'Anime', 1),
('Un rêve qui ne se réalise pas n''est pas un rêve, c''est une erreur.', 'Hajime no Ippo', 'Takamura Mamoru', 'Anime', 1),
('La nuit est la plus sombre juste avant l''aube.', 'Sword Art Online', 'Kirito', 'Anime', 1),
('Les larmes sont des mots que le cœur n''arrive pas à dire.', 'Clannad', 'Nagisa Furukawa', 'Anime', 1),

-- ============================================================
-- FILM (25 citations)
-- ============================================================
('Que la Force soit avec toi.', 'Star Wars', 'Obi-Wan Kenobi', 'Film', 1),
('Pourquoi si sérieux ?', 'The Dark Knight', 'Joker', 'Film', 1),
('La vie, c''est comme une boîte de chocolats : on ne sait jamais sur quoi on va tomber.', 'Forrest Gump', 'Forrest Gump', 'Film', 1),
('Pourquoi tombons-nous ? Pour mieux apprendre à nous relever.', 'Batman Begins', 'Alfred Pennyworth', 'Film', 1),
('Avec un grand pouvoir vient une grande responsabilité.', 'Spider-Man', 'Oncle Ben', 'Film', 1),
('Je reviendrai.', 'Terminator', 'Terminator', 'Film', 1),
('Tout ce que nous avons à décider, c''est quoi faire du temps qui nous est imparti.', 'Le Seigneur des Anneaux', 'Gandalf', 'Film', 1),
('La peur mène à la colère, la colère mène à la haine, la haine mène à la souffrance.', 'Star Wars', 'Yoda', 'Film', 1),
('Le bonheur n''est réel que lorsqu''il est partagé.', 'Into the Wild', 'Christopher McCandless', 'Film', 1),
('Ce n''est pas à cause de ce que je suis, mais à cause de ce que je fais.', 'Batman Begins', 'Bruce Wayne', 'Film', 1),
('L''héritage d''un homme n''est pas ce qu''il laisse aux autres, mais ce qu''il leur inspire.', 'Gladiator', 'Maximus', 'Film', 1),
('La peur est le tueur de l''esprit.', 'Dune', 'Paul Atréides', 'Film', 1),
('Tu vois, dans ce monde il y a deux sortes de personnes : ceux qui ont le pistolet chargé et ceux qui creusent.', 'Le Bon, la Brute et le Truand', 'Blondin', 'Film', 1),
('Je ne peux pas te dire ce que tu vas ressentir, je peux juste te dire que ça en vaut la peine.', 'Interstellar', 'Cooper', 'Film', 1),
('Parfois il suffit d''un acte de folie pour changer le monde.', 'Braveheart', 'William Wallace', 'Film', 1),
('Nous acceptons l''amour que nous pensons mériter.', 'The Perks of Being a Wallflower', 'Bill Anderson', 'Film', 1),
('Les rêves sont des réalités qui n''ont pas encore été.', 'Inception', 'Dom Cobb', 'Film', 1),
('La mort n''est pas la plus grande des pertes dans la vie. La plus grande perte, c''est ce qui meurt en nous alors que nous vivons.', 'American Beauty', 'Lester Burnham', 'Film', 1),
('Nous sommes tous fous, certains dans des coins différents.', 'One Flew Over the Cuckoo''s Nest', 'R.P. McMurphy', 'Film', 1),
('Tout le monde a un plan jusqu''à ce qu''ils se prennent un coup de poing en pleine tête.', 'Rocky Balboa', 'Rocky', 'Film', 1),
('La vie est courte. Brise les règles, pardonne vite, embrasse sincèrement.', 'Good Will Hunting', 'Sean Maguire', 'Film', 1),
('On ne vit qu''une fois, mais si on le fait bien, une fois suffit.', NULL, 'Mae West', 'Film', 1),
('Chaque jour est une nouvelle vie pour celui qui est sage.', 'The Shawshank Redemption', 'Red', 'Film', 1),
('L''espoir est une chose dangereuse. L''espoir peut rendre un homme fou.', 'The Shawshank Redemption', 'Red', 'Film', 1),
('On se bat pour ceux qu''on aime. On meurt pour ceux qu''on ne peut pas perdre.', 'Avengers: Endgame', 'Tony Stark', 'Film', 1),

-- ============================================================
-- MUSIQUE (15 citations)
-- ============================================================
('La musique peut changer le monde parce qu''elle peut changer les gens.', NULL, 'Bono', 'Musique', 1),
('Sans musique, la vie serait une erreur.', 'Le Crépuscule des idoles', 'Friedrich Nietzsche', 'Musique', 1),
('La musique exprime ce qui ne peut pas être dit et sur quoi il est impossible de rester silencieux.', NULL, 'Victor Hugo', 'Musique', 1),
('La musique, c''est du bruit qui pense.', 'William Shakespeare', 'Victor Hugo', 'Musique', 1),
('Un jour sans musique, c''est un jour sans soleil.', NULL, 'Pablo Picasso', 'Musique', 1),
('La musique est la sténographie des émotions.', NULL, 'Léon Tolstoï', 'Musique', 1),
('Le silence est la musique la plus forte que l''on puisse jouer.', NULL, 'Miles Davis', 'Musique', 1),
('La musique commence là où les mots s''arrêtent.', NULL, 'Heinrich Heine', 'Musique', 1),
('Jouer une note fausse est insignifiant. Jouer sans passion l''est infiniment plus.', NULL, 'Ludwig van Beethoven', 'Musique', 1),
('La musique est la langue des émotions.', NULL, 'Immanuel Kant', 'Musique', 1),
('Le rythme et l''harmonie trouvent leur chemin dans les endroits secrets de l''âme.', 'La République', 'Platon', 'Musique', 1),
('La musique est une révélation plus haute que la sagesse et la philosophie.', NULL, 'Ludwig van Beethoven', 'Musique', 1),
('Là où les mots échouent, la musique parle.', NULL, 'Hans Christian Andersen', 'Musique', 1),
('La musique nous donne ce que la vie ne peut pas toujours offrir.', NULL, 'Robert Louis Stevenson', 'Musique', 1),
('Sans la musique, le monde serait un lieu d''erreur.', NULL, 'Friedrich Nietzsche', 'Musique', 1),

-- ============================================================
-- SPORT (15 citations)
-- ============================================================
('Je peux accepter l''échec. Tout le monde échoue à quelque chose. Mais je ne peux accepter de ne pas essayer.', NULL, 'Michael Jordan', 'Sport', 1),
('La douleur est temporaire. L''abandon dure toujours.', NULL, 'Lance Armstrong', 'Sport', 1),
('Les champions continuent à jouer jusqu''à ce qu''ils fassent les choses bien.', NULL, 'Billie Jean King', 'Sport', 1),
('Le talent gagne des matchs, mais le travail en équipe et l''intelligence gagnent des championnats.', NULL, 'Michael Jordan', 'Sport', 1),
('Ne pas vouloir gagner, c''est déjà perdre.', NULL, 'Vince Lombardi', 'Sport', 1),
('La seule mauvaise séance de sport est celle que tu n''as pas faite.', NULL, 'Anonyme', 'Sport', 1),
('Un athlète ne court pas pour gagner. Il court parce qu''il ne peut pas s''en empêcher.', NULL, 'Joe Henderson', 'Sport', 1),
('Ce que l''esprit peut concevoir et croire, il peut l''accomplir.', NULL, 'Muhammad Ali', 'Sport', 1),
('Impossible est un mot que l''on trouve uniquement dans le dictionnaire des fous.', NULL, 'Napoléon Bonaparte', 'Sport', 1),
('Si tu travailles assez dur, tes rêves deviennent réalité.', NULL, 'Christiano Ronaldo', 'Sport', 1),
('La victoire ne se donne pas, elle se prend.', NULL, 'Zinedine Zidane', 'Sport', 1),
('Le meilleur moyen de prédire ton avenir, c''est de le créer.', NULL, 'Abraham Lincoln', 'Sport', 1),
('Je n''ai jamais perdu. J''ai seulement gagné et appris.', NULL, 'Nelson Mandela', 'Sport', 1),
('On est ce que l''on fait répétitivement. L''excellence n''est donc pas un acte mais une habitude.', 'Éthique à Nicomaque', 'Aristote', 'Sport', 1),
('La préparation, c''est tout. On ne gagne pas la guerre le jour de la bataille.', NULL, 'Général Sun Tzu', 'Sport', 1),

-- ============================================================
-- MOTIVATION (15 citations)
-- ============================================================
('Le secret pour avancer, c''est de commencer.', NULL, 'Mark Twain', 'Motivation', 1),
('Croyez en vous et vous serez à mi-chemin.', NULL, 'Theodore Roosevelt', 'Motivation', 1),
('La persévérance est la clé de toute réussite.', NULL, 'Charles de Gaulle', 'Motivation', 1),
('Votre seule limite, c''est vous-même.', NULL, 'Roy T. Bennett', 'Motivation', 1),
('N''attendez pas. Le bon moment n''arrivera jamais.', NULL, 'Napoleon Hill', 'Motivation', 1),
('Le succès, c''est aller d''échec en échec sans perdre son enthousiasme.', NULL, 'Winston Churchill', 'Motivation', 1),
('Si vous pensez que vous pouvez, ou que vous ne pouvez pas, vous avez raison dans les deux cas.', NULL, 'Henry Ford', 'Motivation', 1),
('La seule façon de faire du bon travail est d''aimer ce que vous faites.', NULL, 'Steve Jobs', 'Motivation', 1),
('Chaque accomplissement commence par la décision d''essayer.', NULL, 'Gail Devers', 'Motivation', 1),
('Ne comptez pas les jours. Faites que les jours comptent.', NULL, 'Muhammad Ali', 'Motivation', 1),
('Le succès appartient à ceux qui croient en la beauté de leurs rêves.', NULL, 'Eleanor Roosevelt', 'Motivation', 1),
('Commencez là où vous êtes. Utilisez ce que vous avez. Faites ce que vous pouvez.', NULL, 'Arthur Ashe', 'Motivation', 1),
('La seule chose qui puisse stopper vos rêves, c''est vous.', NULL, 'Anonyme', 'Motivation', 1),
('Le courage n''est pas l''absence de peur, mais le jugement que quelque chose d''autre est plus important que la peur.', NULL, 'Ambrose Redmoon', 'Motivation', 1),
('Votre attitude, et non votre aptitude, déterminera votre altitude.', NULL, 'Zig Ziglar', 'Motivation', 1);

COMMIT;
