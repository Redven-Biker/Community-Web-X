-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 08 mai 2020 à 23:21
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `communitywebx`
--

-- --------------------------------------------------------

--
-- Structure de la table `devlog`
--

CREATE TABLE `devlog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `devlog`
--

INSERT INTO `devlog` (`id`, `title`, `description`, `version`, `date`) VALUES
(1, 'title', 'description', '1.0.0', '2020-04-26 04:50:24'),
(4, 'title', 'description', '1.0.0', '2020-04-26 04:50:24'),
(5, 'title', 'description', '1.0.0', '2020-04-26 04:50:24');

-- --------------------------------------------------------

--
-- Structure de la table `donate`
--

CREATE TABLE `donate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `donate`
--

INSERT INTO `donate` (`id`, `name`, `url`, `logo`) VALUES
(6, 'utip', 'utip.io', './img/utip.png'),
(7, 'tipeee', 'tipeee', './img/tipeee.png');

-- --------------------------------------------------------

--
-- Structure de la table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `links`
--

INSERT INTO `links` (`id`, `name`, `url`) VALUES
(1, 'aa', 'aa'),
(2, 'aa', 'aa'),
(4, 'aa', 'aa');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `date`) VALUES
(2, 'Title', 'Description', '2020-04-26 03:29:36'),
(5, 'aa', 'aa', '2020-04-26 16:00:20'),
(6, 'aa', 'aa', '2020-04-28 18:34:02'),
(7, 'title', 'description', '2020-04-30 00:50:51');

-- --------------------------------------------------------

--
-- Structure de la table `notification_right`
--

CREATE TABLE `notification_right` (
  `id` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notification_right`
--

INSERT INTO `notification_right` (`id`, `description`) VALUES
(2, ' test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test'),
(6, ' test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test  test');

-- --------------------------------------------------------

--
-- Structure de la table `notification_sidebar`
--

CREATE TABLE `notification_sidebar` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notification_sidebar`
--

INSERT INTO `notification_sidebar` (`id`, `description`) VALUES
(6, 'Notification notification notification notification notification notification notification notification notification notification notification');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `label_1` varchar(255) NOT NULL,
  `label_2` varchar(255) NOT NULL,
  `label_3` varchar(255) NOT NULL,
  `label_4` varchar(255) NOT NULL,
  `label_5` varchar(255) NOT NULL,
  `label_6` varchar(255) NOT NULL,
  `label_7` varchar(255) NOT NULL,
  `label_8` varchar(255) NOT NULL,
  `label_9` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `label_1`, `label_2`, `label_3`, `label_4`, `label_5`, `label_6`, `label_7`, `label_8`, `label_9`) VALUES
(1, 'Bronze', '5$', 'label1', 'label2', 'label3', 'label4', 'label5', 'label6', 'label7', 'label8', 'label9'),
(2, 'Bronze', '5$', 'label1', 'label2', 'label3', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `servers`
--

CREATE TABLE `servers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL,
  `max_players` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `servers`
--

INSERT INTO `servers` (`id`, `name`, `ip`, `port`, `max_players`, `logo`) VALUES
(6, 'test', '51.178.99.166', '30120', 64, 'https://i.imgur.com/1KtLMg8.png'),
(7, 'SunnyIsland RP', '51.68.39.100', '30120', 150, 'https://i.imgur.com/1KtLMg8.png'),
(10, 'Paris City', '5.135.102.85', '30120', 300, 'https://i.imgur.com/SLxwNJo.png');

-- --------------------------------------------------------

--
-- Structure de la table `servers_top`
--

CREATE TABLE `servers_top` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL,
  `max_players` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `servers_top`
--

INSERT INTO `servers_top` (`id`, `name`, `ip`, `port`, `max_players`, `logo`) VALUES
(1, 'XLife roleplay', '51.178.99.166', '30120', '1024', 'https://i.imgur.com/1KtLMg8.png'),
(2, 'XLife roleplay', '51.68.39.100', '30120', '1024', 'https://i.imgur.com/SLxwNJo.png');

-- --------------------------------------------------------

--
-- Structure de la table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `social`
--

INSERT INTO `social` (`id`, `name`, `url`) VALUES
(1, 'aa', 'aa'),
(4, 'aa', 'aa'),
(6, 'aa', 'aa');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `date`) VALUES
(1, 'username', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2020-04-26 02:40:16'),
(10, 'aa', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', '2020-04-26 17:16:35');

-- --------------------------------------------------------

--
-- Structure de la table `vote`
--

CREATE TABLE `vote` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vote`
--

INSERT INTO `vote` (`id`, `name`, `url`) VALUES
(1, 'aa', 'aa'),
(5, 'aa', 'aa'),
(6, 'aa', 'aa');

-- --------------------------------------------------------

--
-- Structure de la table `website`
--

CREATE TABLE `website` (
  `id` int(11) NOT NULL,
  `website_name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `discord` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `website`
--

INSERT INTO `website` (`id`, `website_name`, `logo`, `discord`, `youtube`, `description`) VALUES
(1, 'XLife', 'https://i.imgur.com/UWsYTkX.png', 'https://discord.gg/#####', 'https://youtube.com', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `devlog`
--
ALTER TABLE `devlog`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notification_right`
--
ALTER TABLE `notification_right`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notification_sidebar`
--
ALTER TABLE `notification_sidebar`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `servers_top`
--
ALTER TABLE `servers_top`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `devlog`
--
ALTER TABLE `devlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `notification_right`
--
ALTER TABLE `notification_right`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `notification_sidebar`
--
ALTER TABLE `notification_sidebar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `servers`
--
ALTER TABLE `servers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `servers_top`
--
ALTER TABLE `servers_top`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
