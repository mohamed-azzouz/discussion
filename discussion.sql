-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 09 déc. 2019 à 13:26
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `discussion`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(140) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=269 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `message`, `id_utilisateur`, `date`) VALUES
(207, 'cvvvvvvvvvvvvvvvvvvvvvvvvvv', 3, '2019-12-05 13:52:15'),
(212, 'cdcsdcdscsdczefvzrfgzr', 3, '2019-12-05 13:52:39'),
(210, 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNN', 3, '2019-12-05 13:52:31'),
(211, 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNN', 3, '2019-12-05 13:52:35'),
(209, 'cxccxxxxxxxxxxxxxxxxxxxxxxx', 3, '2019-12-05 13:52:23'),
(208, 'cxccxxxxxxxxxxxxxxxxxxxxxxx', 3, '2019-12-05 13:52:20'),
(206, 'cvvvvvvvvvvvvvvvvvvvvvvvvvv', 3, '2019-12-05 13:51:26'),
(205, 'cvvvvvvvvvvvvvvvvvvvvvvvvvv', 3, '2019-12-05 13:51:23'),
(204, 'lllllllllllllllllllllllllllllllllllllllll', 3, '2019-12-05 13:51:12'),
(203, 'lllllllllllllllllllllllllllllllllllllllll', 3, '2019-12-05 13:51:06'),
(202, 'cccccccccccccccccccccccc', 3, '2019-12-05 13:50:58'),
(201, 'cccccccccccccccccc', 3, '2019-12-05 13:49:22'),
(200, 'cccccccccccccccccc', 3, '2019-12-05 13:49:18'),
(199, 'cdcdcdcdcd', 3, '2019-12-05 13:48:58'),
(198, 'ZZZZZZZZZZZZZZZ', 3, '2019-12-05 13:48:32'),
(197, 'ZZZZZZZZZZZZZZZ', 3, '2019-12-05 13:48:13'),
(196, 'ZZZZZZZZZZZZZZZ', 3, '2019-12-05 13:48:10'),
(195, 'ZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZ', 3, '2019-12-05 13:48:01'),
(194, 'MMMMMMMMMMMMMMMMMMMMMMMMMMM', 3, '2019-12-05 13:47:52'),
(193, 'MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM', 3, '2019-12-05 13:47:38'),
(192, 'rezrzerzea', 3, '2019-12-05 13:47:31'),
(191, 'ezrzerza', 3, '2019-12-05 13:47:26'),
(190, 'ezrzerza', 3, '2019-12-05 13:47:09'),
(189, 'ezrzerza', 3, '2019-12-05 13:47:08'),
(188, 'ezrzerza', 3, '2019-12-05 13:47:07'),
(187, 'ezrzerza', 3, '2019-12-05 13:47:06'),
(186, 'rezrezrzae', 3, '2019-12-05 13:47:05'),
(185, 'MOIMIOIOIOI', 3, '2019-12-05 13:47:03'),
(213, 'cdcsdcdscsdczefvzrfgzr', 3, '2019-12-05 13:52:42'),
(214, 'ccckkkkkkkkkkkkkkkkkkkkkkkk', 3, '2019-12-05 13:52:48'),
(215, 'wwwwwwwwwwwwwwwwwwwwwwwwwwww', 3, '2019-12-05 13:53:02'),
(216, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 3, '2019-12-05 13:53:07'),
(217, 'bbbbbbbbbbbbbbbbbbbbbbb', 3, '2019-12-05 13:56:05'),
(218, 'dddddddddddddddddddddddddddddd', 3, '2019-12-05 13:56:12'),
(219, 'fffffffffffffffffffffffffffff', 3, '2019-12-05 13:56:39'),
(220, 'ffffffffffffffffffffffffff', 3, '2019-12-05 13:56:41'),
(221, 'ddddddddddddddddddddddd', 3, '2019-12-05 13:56:45'),
(222, 'KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK', 3, '2019-12-05 13:59:01'),
(223, 'fedfezfzef', 3, '2019-12-05 14:02:16'),
(224, 'fezfezfzefzefze', 3, '2019-12-05 14:02:26'),
(225, 'fezfzefzefze', 3, '2019-12-05 14:02:32'),
(226, 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX', 3, '2019-12-05 14:02:38'),
(227, 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX', 3, '2019-12-05 14:02:46'),
(228, 'GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGgg', 3, '2019-12-05 14:04:55'),
(229, 'JJJJJJJJJJJJJJJJJJJJJJJ', 3, '2019-12-05 14:05:47'),
(230, 'JJJJJJJJJJJJJJJJJJJJJJJ', 3, '2019-12-05 14:07:34'),
(231, 'FFFFFFFFFFFFFFFFFFFFFFFFFF', 3, '2019-12-05 14:07:40'),
(232, 'FFFFFFFFFFFFFFFFFFFFFFFFFF', 3, '2019-12-05 14:07:45'),
(233, 'YOLOOOOOOOOOOOOOOOOO', 3, '2019-12-05 14:12:38'),
(234, 'YOLOOOOOOOOOOOOOOOOO', 3, '2019-12-05 14:12:43'),
(235, 'veilrzhnvoiuerhnfvouirehnfoerihfgirjgerjgerpof', 3, '2019-12-05 14:13:29'),
(236, 'MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM', 3, '2019-12-05 14:13:37'),
(237, 'MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM', 3, '2019-12-05 14:16:01'),
(238, 'salut salut', 1, '2019-12-06 12:21:15'),
(239, 'salut salut', 1, '2019-12-06 12:21:39'),
(240, 'salut salut', 1, '2019-12-06 12:21:46'),
(241, 'salut salut', 1, '2019-12-06 12:21:51'),
(242, 'salut salut', 1, '2019-12-06 12:22:37'),
(243, 'salut salut', 1, '2019-12-06 12:22:40'),
(244, 'salut salut', 1, '2019-12-06 12:23:15'),
(245, 'salut salut', 1, '2019-12-06 12:23:43'),
(246, 'salut salut', 1, '2019-12-06 12:24:03'),
(247, 'salut salut', 1, '2019-12-06 12:24:09'),
(248, 'salut salut', 1, '2019-12-06 12:25:20'),
(249, 'salut salut', 1, '2019-12-06 12:27:05'),
(250, 'salut salut', 1, '2019-12-06 12:27:07'),
(251, 'salut salut', 1, '2019-12-06 12:27:33'),
(252, 'salut salut', 1, '2019-12-06 12:32:39'),
(253, 'YOOO', 1, '2019-12-06 12:46:14'),
(254, 'YOOO', 1, '2019-12-06 12:47:43'),
(255, 'YOOO', 1, '2019-12-06 12:47:53'),
(256, 'kjilj,po', 1, '2019-12-06 18:17:38'),
(257, ',', 1, '2019-12-06 18:17:45'),
(258, ';:;,;:;', 1, '2019-12-06 18:17:49'),
(259, '\'', 1, '2019-12-06 18:17:54'),
(260, '\'', 1, '2019-12-06 18:18:06'),
(261, 't\'es', 1, '2019-12-06 18:18:18'),
(262, 't\'es', 1, '2019-12-06 18:19:05'),
(263, 't\'es', 1, '2019-12-06 18:22:58'),
(264, 'tu t\'es', 1, '2019-12-06 18:23:06'),
(265, 'tu t\'es', 1, '2019-12-06 18:39:49'),
(266, 'tu t\'es', 1, '2019-12-06 18:40:02'),
(267, 'tu t\'es', 1, '2019-12-06 18:40:15'),
(268, 'fezfe', 12, '2019-12-06 19:07:11');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'Kuro14', 'loplop'),
(2, 'God13', 'god13'),
(3, 'SEIJURO', 'akashi'),
(4, 'God14', 'lopm'),
(5, 'Paul', 'Paul'),
(6, 'serge', '$2y$12$wrwmXvIAVzJ0RcX/ntPVSOd88oBFMG.dJJle3eQYudy6.Lwwu6UGK'),
(7, 'toto', '$2y$12$4r5e1HnjWiKOIWVxPODRh.6vmcqqEvp0hUpvm4VZ/84THxq1ZtKhG'),
(8, 'tata', '$2y$12$f.sbMbuWlkDDqedj.i4Up.bkM4GcldLf/hr4/mSMdUZVTHRoxSXG6'),
(9, 'lala', '$2y$12$PwPh1OC6SmMEx/WLvRsEweVtCFVc8.kgd/K7.H3bFAAvp.rcd7qli'),
(10, 'popo', '$2y$12$gjrQEMIXAVGgxvZ49iNZ5.nqCHt15vffJ.ltLjEuRpsnSqg5vqeQ6'),
(11, 'mpmp', '$2y$12$fT/5RF9Hh48j99eqCUiypOVc.fNk307ZF5bOmFd1kpYdKbQZmhjPW'),
(12, 'katar', '$2y$12$8jPQYmrMzoYwePqBr30cJelUFq4oESkY5OC08rB/TlG3/InjFiRsu'),
(13, 'loi', '$2y$12$zEGemy54ULrrD4omS/79fu0oH0OuRIXL3ROG0OycSi80MG.cI1R0S'),
(14, 'momo', ''),
(15, 'azer', ''),
(16, 'moi', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
