-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  Dim 19 nov. 2017 à 12:15
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `douceur_vegetale`
--

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

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`images_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `images_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;