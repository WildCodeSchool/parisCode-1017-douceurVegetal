-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 24 nov. 2017 à 10:51
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `douceur_vegetale`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `category` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`categories_id`, `category`) VALUES
(1, 'product_week'),
(2, 'product');

-- --------------------------------------------------------

--
-- Structure de la table `homepage`
--

CREATE TABLE `homepage` (
  `homepage_id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(8000) DEFAULT NULL,
  `images_images_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `homepage`
--

INSERT INTO `homepage` (`homepage_id`, `title`, `description`, `images_images_id`) VALUES
(2, 'Une pâtisserie 100% végétale !', 'Conçue comme un lieu de convivialité, à la décoration épurée et élégante, Douceur Végétale propose des créations sucrées entièrement végétales centrées sur le respect des ingrédients, de leur origine et de la nature. Les créatrices de Douceur Végétale ont voulu rendre accessible à toutes et à tous cet univers sucré bousculant les codes de la tradition pâtissière française. Située à deux pas de l\'île Saint-Louis, en plein centre historique de Paris, Douceur Végétale offre aux becs sucrés une expérience gustative unique. Dès le matin, la pâtisserie vous propose des boissons chaudes, des jus de fruits frais, des viennoiseries, ou encore des brioches. Après le petit-déjeuner, une large gamme d\'entremets, de tartes, de macarons, de spécialités pâte à choux et autres créations de saison s\'expose en boutique. À déguster sur place ou à emporter !', 4);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `images_id` int(11) NOT NULL,
  `url` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`images_id`, `url`) VALUES
(1, 'assets/img/products/baked-goods-1846460.jpg'),
(2, 'assets/img/products/breakfast-1868059.jpg'),
(3, 'assets/img/products/cake-1850011.jpg'),
(4, 'assets/img/products/cake-1868788.jpg'),
(5, 'assets/img/products/cake.jpeg'),
(6, 'assets/img/products/cupcake-1.jpg'),
(7, 'assets/img/products/cupcake-2605694.jpg'),
(8, 'assets/img/products/cupcake-2646285.jpg'),
(9, 'assets/img/products/cupcake.jpg'),
(10, 'assets/img/products/cupcakes-690040.jpg'),
(11, 'assets/img/products/cupcakes-1081963.jpg'),
(12, 'assets/img/products/cupcakes-1452221.jpg'),
(13, 'assets/img/products/dessert-1850216.jpg'),
(14, 'assets/img/products/dessert-2178579.jpg'),
(15, 'assets/img/products/dessert-2523289.jpg'),
(16, 'assets/img/products/douceur_vegetale_glyphe_vert.png'),
(17, 'assets/img/products/douceur_vegetale_logo.png'),
(18, 'assets/img/products/doughnuts-1209614.jpg'),
(19, 'assets/img/products/macaroons-1938283.jpg'),
(20, 'assets/img/products/mixed-berries-1470226.jpg'),
(21, 'assets/img/products/pastries-756601.jpg'),
(22, 'assets/img/products/people-2557401.jpg'),
(23, 'assets/img/products/plum-cake-984102.jpg'),
(24, 'assets/img/products/waffle-heart-2697904.jpg'),
(25, 'assets/img/products/yumgoddess.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `description` varchar(8000) DEFAULT NULL,
  `categories_categories_id` int(11) NOT NULL,
  `images_images_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`products_id`, `name`, `description`, `categories_categories_id`, `images_images_id`) VALUES
(1, 'Cupcake chocolat et beurre de cacahuète', 'Cupcake au chocolat fourré de beurre de cacahuète crémeux et glacé à la crème.', 2, 6),
(2, 'Cupcake Oreo', 'Cupcake moelleux au chocolat fourré d\'un Oreo craquant. Hautement addictif !', 2, 10),
(3, 'Banana bread à la myrtille', 'Délicieux servi légèrement toasté et accompagné d\'une cuillère de crème vegan.', 2, 1),
(4, 'Gaufre liégeoise', 'Faite minute, croustillante et caramélisée ! Servie avec du chocolat fondu, du sucre glace ou l\'une de nos confitures maison.', 2, 2),
(5, 'Fondant au chocolat', 'Encore plus généreux que la recette classique, notre fondant combine différents types de chocolats et différentes cuissons, pour une sensation à la fois coulante et moelleuse jamais égalée.', 2, 3),
(6, 'Tarte citron et groseille façon crumble', 'Le parfait équilibre entre l\'acidité et la douceur du citron, surmonté de groseilles fraîches et servi avec une cuillère de crème vegan.', 2, 4),
(7, 'Muffin tout chocolat', 'Classique, moelleux, intense.', 1, 7),
(8, 'Cupcake aux fruits de saison', 'Cupcake à la vanille fourré de fruits fraits de saison légèrement rôtis avec des épices.', 2, 8),
(9, 'Cœur coulant chocolat et fleur de sel', 'Un gâteau au chocolat à peine cuit et saupoudré de fleur de sel de Guérande. ', 2, 11),
(10, 'Mini bouchée au chocolat', 'Mini gâteau au chocolat fourré d\'une ganache fondante. Un classique inégalable !', 2, 12),
(11, 'Macaron aux amandes', 'Petit, léger, craquant, à offrir ou à grignoter !', 2, 13),
(12, 'Macaron aux fruits de saison', 'Petit, léger, craquant, à offrir ou à grignoter !', 2, 14),
(13, 'Cheesecake à la vanille', 'Le grand classique new-yorkais revisité avec un fromage vegan et un soupçon de vanille de Madagascar. Parfait accompagné d\'un de nos délicieux chai latte.', 2, 15),
(14, 'Macaron au chocolat', 'Petit, léger, craquant, à offrir ou à grignoter !', 2, 19),
(15, 'Pièce montée de crêpes aux fruits rouges', 'Une façon originale de manger cette spécialisée française : en pièce montée, agrémentée de crème vegan et de fruits rouges de saison.', 2, 20),
(16, 'Cookie chocolat et noix de pécan', 'Un cookie fondant au chocolat noir, parsemé de noix de cajou grillées et croquantes.', 2, 21),
(17, 'Tarte aux prunes', 'Un classique, modernisé grâce à un étonnant mélange d\'épices dont nous gardons le secret...', 2, 23),
(18, 'Gaufre au caramel', 'Faite minute, croustillante et caramélisée ! Servie avec du chocolat fondu, du sucre glace ou l\'une de nos confitures maison.', 2, 24),
(19, 'Gâteau moelleux à la fraise', 'Un \"sponge cake\" moelleux garni de fraises fraîches.', 2, 25);

-- --------------------------------------------------------

--
-- Structure de la table `shop_infos`
--

CREATE TABLE `shop_infos` (
  `shop_infos_id` int(11) NOT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `hours` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `shop_infos`
--

INSERT INTO `shop_infos` (`shop_infos_id`, `telephone`, `email`, `address`, `hours`) VALUES
(1, '06 58 74 30 91', 'contact@douceurvegetale.com', '11 rue de Poissy\r\n75005 Paris', 'Du mardi au vendredi, de 9h à 19h');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `role`) VALUES
(1, 'nam', 'nam', 'admin'),
(2, 'sara', 'sara', 'admin'),
(3, 'amandine', 'amandine', 'admin'),
(4, 'emeline', 'emeline', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Index pour la table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`homepage_id`,`images_images_id`),
  ADD KEY `fk_homepage_images1_idx` (`images_images_id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`images_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`,`categories_categories_id`,`images_images_id`),
  ADD KEY `fk_products_categories_idx` (`categories_categories_id`),
  ADD KEY `fk_products_images1_idx` (`images_images_id`);

--
-- Index pour la table `shop_infos`
--
ALTER TABLE `shop_infos`
  ADD PRIMARY KEY (`shop_infos_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `homepage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `images_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `shop_infos`
--
ALTER TABLE `shop_infos`
  MODIFY `shop_infos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `homepage`
--
ALTER TABLE `homepage`
  ADD CONSTRAINT `fk_homepage_images1` FOREIGN KEY (`images_images_id`) REFERENCES `images` (`images_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_categories` FOREIGN KEY (`categories_categories_id`) REFERENCES `categories` (`categories_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_products_images1` FOREIGN KEY (`images_images_id`) REFERENCES `images` (`images_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
