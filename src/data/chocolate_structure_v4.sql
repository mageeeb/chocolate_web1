-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 08 déc. 2025 à 01:35
-- Version du serveur : 8.4.7
-- Version de PHP : 8.3.28

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chocolate`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `content` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '(DC2Type:datetime_immutable)',
  `is_accepted` tinyint UNSIGNED DEFAULT '0',
  `recipe_id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `rating` tinyint UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5F9E962A59D8A214` (`recipe_id`),
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `content`, `created_at`, `is_accepted`, `recipe_id`, `user_id`, `rating`) VALUES
(49, 'aaaaaaaaaaaaaaaaaaaaa', '2025-12-06 01:07:11', 0, 1, 46, 4),
(50, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2025-12-06 01:07:20', 0, 1, 46, 3),
(51, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2025-12-06 01:07:25', 0, 1, 46, 2),
(52, 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '2025-12-06 01:07:30', 0, 1, 46, 5),
(53, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2025-12-06 01:07:35', 0, 1, 46, 2),
(54, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2025-12-06 01:07:40', 0, 1, 46, 5),
(55, 'dazzzzzzzzzzzzzzzzzzzzzzz', '2025-12-06 01:07:44', 0, 1, 46, NULL),
(56, 'dazzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', '2025-12-06 01:07:49', 0, 1, 46, NULL),
(57, 'dazdazdazdazdaz', '2025-12-06 01:11:29', 0, 2, 46, 5),
(58, 'dazdazdazdazdazdadzdaz', '2025-12-07 14:58:01', 0, 5, 46, 4),
(59, 'dazdazdazdazdazdazd', '2025-12-07 14:59:09', 0, 6, 46, 4),
(60, 'dazdazdadazdazd', '2025-12-07 15:01:26', 0, 6, 46, 4),
(61, 'dazdazdazdazd', '2025-12-07 15:02:14', 0, 3, 46, NULL),
(62, 'dazdazdazd', '2025-12-07 18:21:26', 0, 6, 46, NULL),
(63, 'dazdazdazd', '2025-12-07 18:21:37', 0, 6, 46, 5),
(64, 'dazdazdazdazdazd', '2025-12-07 18:34:45', 0, 5, 46, 4),
(65, 'dazdazdazdazd', '2025-12-08 00:31:52', 0, 3, 46, 5),
(66, 'azdazdazdazdazd', '2025-12-08 00:34:35', 0, 4, 46, 4),
(67, 'dazdazdazdazd', '2025-12-08 00:34:47', 0, 5, 46, 5),
(68, 'dazdazdazdazd', '2025-12-08 02:06:07', 0, 2, 46, 4);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(11, 'Agim', 'Agim.coroli8016@gmail.com', 'dazazdaz', '2025-12-08 00:48:28'),
(10, 'Agim', 'Agim.coroli8016@gmail.com', 'adzadazd', '2025-12-08 00:24:50'),
(9, 'a', 'Agim.coroli8016@gmail.com', 'dazdazdazdadz', '2025-12-08 00:00:41'),
(8, 'a', 'Agim.coroli8016@gmail.com', 'dazdazazdazd', '2025-12-07 23:57:41');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recipe`
--

DROP TABLE IF EXISTS `recipe`;
CREATE TABLE IF NOT EXISTS `recipe` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(130) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prep_time` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '(DC2Type:datetime_immutable)',
  `user_id` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_UNIQUE` (`slug`),
  UNIQUE KEY `image_url` (`image_url`),
  KEY `IDX_DA88B137A76ED395` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `recipe`
--

INSERT INTO `recipe` (`id`, `title`, `slug`, `image_url`, `description`, `prep_time`, `created_at`, `user_id`) VALUES
(1, 'Mousse au chocolat', 'mousse-au-chocolat', 'mousse_au_chocolat.jpg', 'Délicieuse mousse légère et aérienne au chocolat.', '20 min', '2025-12-04 16:03:55', NULL),
(2, 'Fondant au chocolat', 'fondant-au-chocolat', 'fondant_au_chocolat.jpg', 'Fondant moelleux au cœur coulant de chocolat.', '30 min', '2025-12-04 16:03:55', NULL),
(3, 'Tiramissu au chocolat', 'tiramissu-au-chocolat', 'tiramisu-chocolat-transparent.png', 'Version chocolatée du célèbre dessert italien.', '25 min', '2025-12-04 16:03:55', NULL),
(4, 'Glace au chocolat intense', 'glace-au-chocolat-intense', 'chocolate-ice-cream.jpg', 'Glace crémeuse au goût puissant de chocolat.', '40 min', '2025-12-04 16:03:55', NULL),
(5, 'Cookie maison au chocolat', 'cookie-maison-au-chocolat', 'cookies_4.jpg', 'Cookies croustillants avec pépites de chocolat noir.', '15 min', '2025-12-04 16:03:55', NULL),
(6, 'Cookie au chocolat blanc', 'cookie-au-chocolat-blanc', 'cookies_3.jpg', 'Cookies gourmands aux morceaux de chocolat blanc.', '15 min', '2025-12-04 16:03:55', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `recipe_ingredients`
--

DROP TABLE IF EXISTS `recipe_ingredients`;
CREATE TABLE IF NOT EXISTS `recipe_ingredients` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `slug` varchar(104) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_UNIQUE` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `recipe_ingredients`
--

INSERT INTO `recipe_ingredients` (`id`, `slug`, `name`) VALUES
(1, 'chocolat-noir', 'Chocolat noir'),
(2, 'chocolat-au-lait', 'Chocolat au lait'),
(3, 'chocolat-blanc', 'Chocolat blanc'),
(4, 'cacao-poudre', 'Cacao en poudre'),
(5, 'beurre', 'Beurre'),
(6, 'beurre-doux', 'Beurre doux'),
(7, 'beurre-sale', 'Beurre salé'),
(8, 'sucre-blanc', 'Sucre blanc'),
(9, 'sucre-roux', 'Sucre roux'),
(10, 'sucre-glace', 'Sucre glace'),
(11, 'farine-blanche', 'Farine blanche'),
(12, 'farine-complete', 'Farine complète'),
(13, 'oeufs', 'Œufs'),
(14, 'jaune-doeuf', 'Jaune d’œuf'),
(15, 'blanc-doeuf', 'Blanc d’œuf'),
(16, 'lait-entier', 'Lait entier'),
(17, 'lait-demi-ecreme', 'Lait demi-écrémé'),
(18, 'creme-fraiche', 'Crème fraîche'),
(19, 'creme-liquide', 'Crème liquide'),
(20, 'mascarpone', 'Mascarpone'),
(21, 'fromage-frais', 'Fromage frais'),
(22, 'sel', 'Sel'),
(23, 'levure-chimique', 'Levure chimique'),
(24, 'bicarbonate-soude', 'Bicarbonate de soude'),
(25, 'vanille-extrait', 'Extrait de vanille'),
(26, 'vanille-gousse', 'Gousse de vanille'),
(27, 'cafe-expresso', 'Café expresso'),
(28, 'cafe-soluble', 'Café soluble'),
(29, 'amandes', 'Amandes'),
(30, 'noisettes', 'Noisettes'),
(31, 'noix', 'Noix'),
(32, 'pistaches', 'Pistaches'),
(33, 'noix-de-pecan', 'Noix de pécan'),
(34, 'noix-de-coco-rape', 'Noix de coco râpée'),
(35, 'miel', 'Miel'),
(36, 'sirop-erable', 'Sirop d’érable'),
(37, 'rhum', 'Rhum'),
(38, 'liqueur-cafe', 'Liqueur de café'),
(39, 'liqueur-chocolat', 'Liqueur de chocolat'),
(40, 'huile-tournesol', 'Huile de tournesol'),
(41, 'huile-colza', 'Huile de colza'),
(42, 'huile-noisette', 'Huile de noisette'),
(43, 'fleur-de-sel', 'Fleur de sel'),
(44, 'poudre-amande', 'Poudre d’amande'),
(45, 'poudre-noisette', 'Poudre de noisette'),
(46, 'poudre-cacao-amer', 'Poudre de cacao amer'),
(47, 'pepites-chocolat', 'Pépites de chocolat'),
(48, 'copeaux-chocolat', 'Copeaux de chocolat'),
(49, 'chantilly', 'Chantilly'),
(50, 'glace-vanille', 'Glace vanille'),
(51, 'glace-chocolat', 'Glace chocolat'),
(52, 'biscuits-cuiller', 'Biscuits cuiller'),
(53, 'speculoos', 'Spéculoos'),
(54, 'biscuit-sec', 'Biscuit sec'),
(55, 'biscuit-sable', 'Biscuit sablé'),
(56, 'biscuit-cacao', 'Biscuit cacao'),
(57, 'sucre-vanille', 'Sucre vanillé'),
(58, 'poudre-cannelle', 'Cannelle en poudre'),
(59, 'poudre-coriandre', 'Coriandre en poudre'),
(60, 'poudre-cardamome', 'Cardamome en poudre'),
(61, 'poudre-gingembre', 'Gingembre en poudre'),
(62, 'poudre-muscade', 'Muscade en poudre');

-- --------------------------------------------------------

--
-- Structure de la table `recipe_ingredients_has_recipe`
--

DROP TABLE IF EXISTS `recipe_ingredients_has_recipe`;
CREATE TABLE IF NOT EXISTS `recipe_ingredients_has_recipe` (
  `recipe_ingredients_id` int UNSIGNED NOT NULL,
  `recipe_id` int UNSIGNED NOT NULL,
  PRIMARY KEY (`recipe_ingredients_id`,`recipe_id`),
  KEY `fk_recipe_ingredients_has_recipe_recipe1_idx` (`recipe_id`),
  KEY `fk_recipe_ingredients_has_recipe_recipe_ingredients1_idx` (`recipe_ingredients_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `steps`
--

DROP TABLE IF EXISTS `steps`;
CREATE TABLE IF NOT EXISTS `steps` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `position` int UNSIGNED NOT NULL,
  `instruction` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipe_id` int UNSIGNED NOT NULL,
  `images_id` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_34220A7259D8A214` (`recipe_id`),
  KEY `fk_steps_images1_idx` (`images_id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `steps`
--

INSERT INTO `steps` (`id`, `position`, `instruction`, `recipe_id`, `images_id`) VALUES
(40, 1, 'Faire fondre le chocolat au bain-marie.', 1, NULL),
(41, 2, 'Séparer les blancs des jaunes d’œufs.', 1, NULL),
(42, 3, 'Incorporer les jaunes au chocolat fondu.', 1, NULL),
(43, 4, 'Monter les blancs en neige ferme.', 1, NULL),
(44, 5, 'Incorporer délicatement les blancs au mélange.', 1, NULL),
(45, 6, 'Répartir dans des verrines et laisser reposer au frais.', 1, NULL),
(46, 1, 'Préchauffer le four à 180°C.', 2, NULL),
(47, 2, 'Faire fondre le chocolat et le beurre ensemble.', 2, NULL),
(48, 3, 'Ajouter le sucre et bien mélanger.', 2, NULL),
(49, 4, 'Incorporer les œufs un à un.', 2, NULL),
(50, 5, 'Ajouter la farine et mélanger.', 2, NULL),
(51, 6, 'Verser dans un moule beurré et enfourner 20 minutes.', 2, NULL),
(52, 1, 'Préparer un café fort et le laisser refroidir.', 3, NULL),
(53, 2, 'Battre les jaunes d’œufs avec le sucre.', 3, NULL),
(54, 3, 'Ajouter le mascarpone et bien mélanger.', 3, NULL),
(55, 4, 'Monter les blancs en neige et les incorporer.', 3, NULL),
(56, 5, 'Tremper les biscuits dans le café et disposer en couche.', 3, NULL),
(57, 6, 'Alterner biscuits et crème au mascarpone.', 3, NULL),
(58, 7, 'Saupoudrer de cacao en poudre et laisser reposer au frais.', 3, NULL),
(59, 1, 'Faire chauffer le lait et la crème.', 4, NULL),
(60, 2, 'Ajouter le chocolat et mélanger jusqu’à fonte complète.', 4, NULL),
(61, 3, 'Battre les jaunes d’œufs avec le sucre.', 4, NULL),
(62, 4, 'Verser le mélange chaud sur les jaunes en fouettant.', 4, NULL),
(63, 5, 'Remettre sur feu doux et cuire jusqu’à épaississement.', 4, NULL),
(64, 6, 'Laisser refroidir puis turbiner en sorbetière.', 4, NULL),
(65, 1, 'Préchauffer le four à 180°C.', 5, NULL),
(66, 2, 'Mélanger le beurre mou avec le sucre.', 5, NULL),
(67, 3, 'Ajouter l’œuf et l’extrait de vanille.', 5, NULL),
(68, 4, 'Incorporer la farine, la levure et le sel.', 5, NULL),
(69, 5, 'Ajouter les pépites de chocolat.', 5, NULL),
(70, 6, 'Former des boules de pâte et les déposer sur une plaque.', 5, NULL),
(71, 7, 'Cuire 10 à 12 minutes jusqu’à coloration dorée.', 5, NULL),
(72, 1, 'Préchauffer le four à 180°C.', 6, NULL),
(73, 2, 'Mélanger le beurre mou avec le sucre.', 6, NULL),
(74, 3, 'Ajouter l’œuf et l’extrait de vanille.', 6, NULL),
(75, 4, 'Incorporer la farine, la levure et le sel.', 6, NULL),
(76, 5, 'Ajouter les morceaux de chocolat blanc.', 6, NULL),
(77, 6, 'Former des boules de pâte et les déposer sur une plaque.', 6, NULL),
(78, 7, 'Cuire 10 à 12 minutes jusqu’à coloration dorée.', 6, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `registered_at` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '(DC2Type:datetime_immutable)',
  `role` tinyint UNSIGNED DEFAULT '0',
  `email_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pwd_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `is_verified` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `images_id` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`),
  UNIQUE KEY `login_UNIQUE` (`login`),
  KEY `fk_users_images2_idx` (`images_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`, `registered_at`, `role`, `email_token`, `pwd_token`, `is_verified`, `images_id`) VALUES
(46, 'Agim', 'abc', 'Agim.coroli8016@gmail.com', '$2y$10$BMpX6fYzlzm1vyaB6N55weS54TZh3/ZTEgqFegT5m6V1M6Pv9WNwu', '2025-12-05 21:36:09', NULL, NULL, NULL, 1, NULL),
(47, 'Souli', 'souli', 'Agim.coroli.pro@gmail.com', '$2y$10$oN1udN8C6dVfehyyWQzrCenkru4sg06OKqB7oMX1DtD2.3TyKZY76', '2025-12-05 22:35:33', NULL, NULL, NULL, 1, NULL),
(48, 'Agim', 'dazdazdaz', 'dazdadz@dazdhazd.com', '$2y$10$US18QdFyorDayjV8HB2mG.xZD18ywgSup.O.i2HXTID766Xb4OKv2', '2025-12-05 23:22:53', NULL, 'db0a80c8d2fd79c7b6e957d0e8db58eaffc5e9553a8ebd950173936f64565078', NULL, 0, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_5F9E962A59D8A214` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`id`);

--
-- Contraintes pour la table `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `FK_DA88B137A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `recipe_ingredients_has_recipe`
--
ALTER TABLE `recipe_ingredients_has_recipe`
  ADD CONSTRAINT `fk_recipe_ingredients_has_recipe_recipe1` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_recipe_ingredients_has_recipe_recipe_ingredients1` FOREIGN KEY (`recipe_ingredients_id`) REFERENCES `recipe_ingredients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `steps`
--
ALTER TABLE `steps`
  ADD CONSTRAINT `FK_34220A7259D8A214` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`id`),
  ADD CONSTRAINT `fk_steps_images1` FOREIGN KEY (`images_id`) REFERENCES `images` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_images2` FOREIGN KEY (`images_id`) REFERENCES `images` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
