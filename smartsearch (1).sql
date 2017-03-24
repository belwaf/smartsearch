-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 14 Mars 2017 à 16:56
-- Version du serveur :  5.6.24
-- Version de PHP :  5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `smartsearch`
--

-- --------------------------------------------------------

--
-- Structure de la table `actions`
--

CREATE TABLE IF NOT EXISTS `actions` (
  `id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `date_action` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=176 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `actions`
--

INSERT INTO `actions` (`id`, `document_id`, `profile_id`, `type`, `date_action`) VALUES
(1, 2, 12, 'favourite', '2017-03-03 20:08'),
(2, 4, 12, 'favourite', '2017-03-03 20:55'),
(3, 1, 12, 'favourite', '2017-03-03 20:59'),
(4, 1, 12, 'view', '2017-03-03 20:48'),
(5, 1, 12, 'view', '2017-03-03 20:40'),
(6, 1, 12, 'view', '2017-03-03 20:40'),
(7, 1, 12, 'view', '2017-03-03 20:41'),
(8, 1, 12, 'view', '2017-03-03 20:41'),
(9, 1, 12, 'view', '2017-03-03 21:36'),
(10, 1, 12, 'view', '2017-03-03 21:31'),
(11, 1, 12, 'view', '2017-03-03 21:35'),
(12, 1, 12, 'view', '2017-03-03 21:37'),
(13, 1, 12, 'view', '2017-03-03 21:48'),
(14, 1, 12, 'view', '2017-03-03 21:36'),
(15, 1, 12, 'view', '2017-03-03 21:37'),
(16, 1, 12, 'view', '2017-03-03 21:38'),
(17, 1, 12, 'view', '2017-03-03 21:38'),
(18, 1, 12, 'view', '2017-03-03 21:39'),
(19, 1, 12, 'view', '2017-03-03 21:40'),
(20, 1, 12, 'view', '2017-03-03 21:40'),
(21, 1, 12, 'view', '2017-03-03 21:41'),
(22, 1, 12, 'view', '2017-03-03 21:30'),
(23, 1, 12, 'view', '2017-03-03 21:32'),
(24, 1, 12, 'view', '2017-03-03 21:50'),
(25, 1, 12, 'view', '2017-03-03 21:54'),
(26, 4, 12, 'view', '2017-03-03 21:15'),
(27, 1, 12, 'view', '2017-03-03 21:51'),
(28, 1, 12, 'view', '2017-03-06 14:05'),
(29, 1, 12, 'view', '2017-03-06 14:08'),
(30, 5, 12, 'view', '2017-03-06 14:28'),
(31, 5, 12, 'view', '2017-03-06 14:59'),
(32, 5, 12, 'download', '2017-03-06 16:41'),
(33, 5, 12, 'download', '2017-03-06 16:45'),
(34, 2, 12, 'download', '2017-03-06 16:43'),
(35, 5, 12, 'download', '2017-03-06 16:06'),
(36, 5, 12, 'download', '2017-03-06 19:01'),
(37, 5, 12, 'download', '2017-03-06 19:33'),
(38, 5, 12, 'download', '2017-03-06 19:08'),
(39, 5, 12, 'download', '2017-03-06 19:21'),
(40, 5, 12, 'download', '2017-03-06 19:53'),
(41, 5, 12, 'download', '2017-03-06 19:28'),
(42, 5, 12, 'download', '2017-03-06 19:49'),
(43, 5, 12, 'download', '2017-03-06 19:57'),
(44, 5, 12, 'download', '2017-03-06 19:16'),
(45, 5, 12, 'download', '2017-03-06 19:29'),
(46, 5, 12, 'download', '2017-03-06 19:35'),
(47, 5, 12, 'download', '2017-03-06 19:48'),
(48, 5, 12, 'download', '2017-03-06 19:49'),
(49, 5, 12, 'download', '2017-03-06 19:52'),
(50, 5, 12, 'download', '2017-03-06 19:54'),
(152, 4, 12, 'download', '2017-03-07 21:35'),
(153, 4, 12, 'unlike', '2017-03-07 21:27'),
(154, 3, 12, 'favourite', '2017-03-07 21:55'),
(155, 3, 12, 'like', '2017-03-07 21:06'),
(156, 3, 12, 'Send', '2017-03-07 21:42'),
(157, 5, 12, 'download', '2017-03-07 22:22'),
(158, 1, 12, 'Send', '2017-03-07 22:00'),
(159, 1, 12, 'Send', '2017-03-07 22:02'),
(160, 1, 12, 'Send', '2017-03-07 22:02'),
(161, 1, 12, 'Send', '2017-03-07 22:03'),
(162, 1, 12, 'Send', '2017-03-07 22:03'),
(163, 1, 12, 'Send', '2017-03-07 22:04'),
(164, 1, 12, 'Send', '2017-03-07 22:05'),
(165, 5, 12, 'favourite', '2017-03-07 22:01'),
(166, 5, 12, 'favourite', '2017-03-07 22:02'),
(167, 5, 12, 'favourite', '2017-03-07 22:56'),
(168, 5, 12, 'favourite', '2017-03-07 22:02'),
(169, 1, 12, 'favourite', '2017-03-07 22:12'),
(170, 5, 12, 'favourite', '2017-03-07 22:25'),
(171, 5, 12, 'favourite', '2017-03-07 22:27'),
(172, 5, 12, 'favourite', '2017-03-08 14:49'),
(173, 5, 12, 'download', '2017-03-08 14:03'),
(174, 5, 12, 'favourite', '2017-03-08 14:15'),
(175, 4, 12, 'favourite', '2017-03-08 19:17');

-- --------------------------------------------------------

--
-- Structure de la table `attachments`
--

CREATE TABLE IF NOT EXISTS `attachments` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `keyword` text,
  `url` varchar(222) NOT NULL,
  `extension` varchar(222) NOT NULL,
  `document_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `attachments`
--

INSERT INTO `attachments` (`id`, `name`, `keyword`, `url`, `extension`, `document_id`) VALUES
(1, 'BilelBlewafi - Employment Offer Letter 2 (2).pdf', '', 'files\\Stockage\\protected\\Informatique\\BilelBlewafi - Employment Offer Letter 2 (2).pdf', 'pdf', 1),
(2, 'BilelBlewafi - Employment Offer Letter 2 scan.pdf', '', 'files\\Stockage\\protected\\Informatique\\BilelBlewafi - Employment Offer Letter 2 scan.pdf', 'pdf', 1),
(3, 'BilelBlewafi - Employment Offer Letter 2.pdf', '', 'files\\Stockage\\protected\\Informatique\\BilelBlewafi - Employment Offer Letter 2.pdf', 'pdf', 1),
(4, 'Cahier-de-charge-bilel-marwa-safa.docx', '', 'files\\Stockage\\protected\\Informatique\\Cahier-de-charge-bilel-marwa-safa.docx', 'docx', 1),
(5, 'New Document Microsoft Word.docx', '', 'files\\Stockage\\protected\\Informatique\\New Document Microsoft Word.docx', 'docx', 1),
(6, 'Photos du journal.html', '', 'files\\Stockage\\protected\\Informatique\\Photos du journal.html', 'html', 1),
(7, 'BilelBlewafi - Employment Offer Letter 2 (2).pdf', '', 'files\\Stockage\\public\\php\\BilelBlewafi - Employment Offer Letter 2 (2).pdf', 'pdf', 2),
(8, 'BilelBlewafi - Employment Offer Letter 2 scan.pdf', '', 'files\\Stockage\\public\\php\\BilelBlewafi - Employment Offer Letter 2 scan.pdf', 'pdf', 2),
(9, 'BilelBlewafi - Employment Offer Letter 2.pdf', '', 'files\\Stockage\\public\\php\\BilelBlewafi - Employment Offer Letter 2.pdf', 'pdf', 2),
(10, 'Cahier-de-charge-bilel-marwa-safa.docx', '', 'files\\Stockage\\public\\php\\Cahier-de-charge-bilel-marwa-safa.docx', 'docx', 2),
(11, 'New Document Microsoft Word.docx', '', 'files\\Stockage\\public\\php\\New Document Microsoft Word.docx', 'docx', 2),
(12, 'Photos du journal.html', '', 'files\\Stockage\\public\\php\\Photos du journal.html', 'html', 2),
(13, 'BilelBlewafi - Employment Offer Letter 2 (2).pdf', '', 'files\\Stockage\\public\\fs\\BilelBlewafi - Employment Offer Letter 2 (2).pdf', 'pdf', 3),
(14, 'BilelBlewafi - Employment Offer Letter 2 scan.pdf', '', 'files\\Stockage\\public\\fs\\BilelBlewafi - Employment Offer Letter 2 scan.pdf', 'pdf', 3),
(15, 'BilelBlewafi - Employment Offer Letter 2.pdf', '', 'files\\Stockage\\public\\fs\\BilelBlewafi - Employment Offer Letter 2.pdf', 'pdf', 3),
(16, 'Cahier-de-charge-bilel-marwa-safa.docx', '', 'files\\Stockage\\public\\fs\\Cahier-de-charge-bilel-marwa-safa.docx', 'docx', 3),
(17, 'New Document Microsoft Word.docx', '', 'files\\Stockage\\public\\fs\\New Document Microsoft Word.docx', 'docx', 3),
(18, 'Photos du journal.html', '', 'files\\Stockage\\public\\fs\\Photos du journal.html', 'html', 3),
(19, 'Cahier-de-charge-bilel-marwa-safa.docx', '', 'files\\Stockage\\protected\\document 2\\Cahier-de-charge-bilel-marwa-safa.docx', 'docx', 4),
(20, 'New Document Microsoft Word.docx', '', 'files\\Stockage\\protected\\document 2\\New Document Microsoft Word.docx', 'docx', 4),
(21, 'Photos du journal.html', '', 'files\\Stockage\\protected\\document 2\\Photos du journal.html', 'html', 4),
(22, 'Concevoir un formulaire.pdf', '', 'files\\Stockage\\protected\\bocument1\\Concevoir un formulaire.pdf', 'pdf', 5),
(23, '', '', 'files\\Stockage\\Select your visibility\\\\', '', 6),
(24, 'Plafond avec spots lumineux.jpg', '', 'files\\Stockage\\protected\\document nathalie\\Plafond avec spots lumineux.jpg', 'jpg', 7),
(25, 'Remerciements.docx', '', 'files\\Stockage\\protected\\document nathalie\\Remerciements.docx', 'docx', 7),
(26, 'residence.txt', '', 'files\\Stockage\\protected\\document nathalie\\residence.txt', 'txt', 7),
(27, '', '', 'files\\Stockage\\Select your visibility\\\\', '', 8);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `description` varchar(222) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `description`) VALUES
(1, 'categorie1'),
(2, 'categorei2'),
(3, 'categorie1'),
(4, 'categorei2');

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL,
  `description` varchar(222) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `customers`
--

INSERT INTO `customers` (`id`, `description`) VALUES
(1, 'customers1'),
(2, 'customers'),
(3, 'customers1'),
(4, 'customers');

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(11) NOT NULL,
  `name` varchar(222) DEFAULT NULL,
  `country` varchar(222) DEFAULT NULL,
  `them` varchar(222) DEFAULT NULL,
  `description` varchar(222) DEFAULT NULL,
  `keyword` text,
  `price` varchar(22) DEFAULT NULL,
  `creation_date` varchar(222) DEFAULT NULL,
  `url` varchar(222) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `size` varchar(123) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `documents`
--

INSERT INTO `documents` (`id`, `name`, `country`, `them`, `description`, `keyword`, `price`, `creation_date`, `url`, `profile_id`, `size`) VALUES
(1, 'Informatique', 'D524, 63700 La Crouzille, France', 'formatation', 'formation ajax', 'ajax,java ,php', '0', '2017-02-28 22:th', 'files\\Stockage\\protected\\Informatique\\New Document Microsoft Word.docx', 12, '1.7614936828613'),
(2, 'php', 'D524, 63700 La Crouzille, France', 'php', 'php', 'php css', '0', '2017-02-28 23:th', 'files\\Stockage\\public\\php\\New Document Microsoft Word.docx', 12, '1.7614936828613'),
(3, 'fs', '130 Westmorland St, Moncton, NB E1C 1G2, Canada', 'sdfg', 'gs', 'nodejs', '0', '2017-02-28 23:th', 'files\\Stockage\\public\\fs\\BilelBlewafi - Employment Offer Letter 2 scan.pdf', 12, '2.2716207504272'),
(4, 'document 2', '130 Westmorland St, Moncton, NB E1C 1G2, Canada', 'bile', 'pour test', 'francis', '0', '2017-03-01 20:st', 'files\\Stockage\\protected\\document 2\\BilelBlewafi - Employment Offer Letter 2.pdf', 12, '1.1080150604248'),
(5, 'bocument1', '130 Westmorland St, Moncton, NB E1C 1G2, Canada', 'dd', 'ddddd', 'bil,php,facebook', '0', '2017-03-06 14:th', 'files\\Stockage\\protected\\bocument1\\Exercice 04.pdf', 12, '0.71043395996094'),
(6, '', 'D524, 63700 La Crouzille, France', '', '', '', '0', '2017-03-08 17:th', 'files\\Stockage\\Select your visibility\\\\', 12, '0'),
(7, 'document nathalie', 'City Hall Park Path, New York, NY 10007, États-Unis', 'minicupalite', 'test pour nathalie', 'nathalie,test,frabcis', '0', '2017-03-08 21:th', 'files\\Stockage\\protected\\document nathalie\\Remerciements.docx', 12, '0.076962471008301'),
(8, '', 'Bilbao, Espagne', '', '', '', '0', '2017-03-09 20:th', 'files\\Stockage\\Select your visibility\\\\', 12, '0');

-- --------------------------------------------------------

--
-- Structure de la table `document_categories`
--

CREATE TABLE IF NOT EXISTS `document_categories` (
  `id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `document_categories`
--

INSERT INTO `document_categories` (`id`, `document_id`, `categorie_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 2),
(5, 3, 1),
(6, 3, 2),
(7, 3, 3),
(8, 4, 2),
(9, 4, 3),
(10, 5, 1),
(11, 5, 2),
(12, 7, 1),
(13, 7, 2),
(14, 7, 3);

-- --------------------------------------------------------

--
-- Structure de la table `document_customers`
--

CREATE TABLE IF NOT EXISTS `document_customers` (
  `id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `document_customers`
--

INSERT INTO `document_customers` (`id`, `document_id`, `customer_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2),
(4, 3, 1),
(5, 3, 2),
(6, 3, 3),
(7, 4, 1),
(8, 4, 2),
(9, 5, 2),
(10, 5, 3),
(11, 7, 1),
(12, 7, 2),
(13, 7, 3);

-- --------------------------------------------------------

--
-- Structure de la table `document_languages`
--

CREATE TABLE IF NOT EXISTS `document_languages` (
  `id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `document_languages`
--

INSERT INTO `document_languages` (`id`, `document_id`, `language_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 2, 2),
(4, 3, 1),
(5, 3, 2),
(6, 4, 2),
(7, 4, 1),
(8, 5, 1),
(9, 5, 2),
(10, 7, 1),
(11, 7, 3);

-- --------------------------------------------------------

--
-- Structure de la table `document_sectors`
--

CREATE TABLE IF NOT EXISTS `document_sectors` (
  `id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `document_sectors`
--

INSERT INTO `document_sectors` (`id`, `document_id`, `sector_id`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 2, 2),
(4, 3, 4),
(5, 3, 5),
(6, 3, 6),
(7, 3, 7),
(8, 4, 1),
(9, 4, 2),
(10, 5, 1),
(11, 5, 2),
(12, 7, 2),
(13, 7, 3);

-- --------------------------------------------------------

--
-- Structure de la table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `abbreviation` varchar(222) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `languages`
--

INSERT INTO `languages` (`id`, `name`, `abbreviation`) VALUES
(1, 'francais', 'fr'),
(2, 'Anglais', 'Ang'),
(3, 'arabe', 'ar');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `date_message` varchar(200) NOT NULL,
  `vu` varchar(20) NOT NULL,
  `id_profile_send` int(11) NOT NULL,
  `id_profile_recu` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `description`, `date_message`, `vu`, `id_profile_send`, `id_profile_recu`) VALUES
(1, 'conditions fournit des conditions pour la clause WHERE de la requête.\r\nlimit Définit le nombre de lignes que vous voulez.\r\noffset Définit l’offset de la page que vous souhaitez. Vous pouvez aussi utiliser page pour faciliter le calcul.\r\ncontain définit les associations à charger en eager.\r\nfields limite les champs chargés dans l’entity. Charger seulement quelques champs peut faire que les entities se comportent de manière incorrecte.\r\ngroup ajoute une clause GROUP BY à votre requête. C’est utile quand vous utilisez les fonctions d’agrégation.\r\nhaving ajoute une clause HAVING à votre requête.\r\njoin définit les jointures personnalisées supplémentaires.\r\norder ordonne l’ensemble des résultats.', '12;23;3', 'non', 12, 14),
(13, 'message', 'March 14, 2017, 12:10 pm', 'non', 12, 14),
(17, 'message', 'March 14, 2017, 12:37 pm', 'non', 12, 14),
(18, 'message', 'March 14, 2017, 12:39 pm', 'non', 12, 14);

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `date_notification` varchar(222) NOT NULL,
  `vu` varchar(20) NOT NULL,
  `id_profile_send` int(11) NOT NULL,
  `id_profile_recu` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `notifications`
--

INSERT INTO `notifications` (`id`, `description`, `date_notification`, `vu`, `id_profile_send`, `id_profile_recu`) VALUES
(1, 'Our plans include unlimited texting, calling, and data, starting as low as $13.99 per month with no contracts. We even have a free, Wi-Fi only version of TextNow, available for download on your existing device.', '12-05-2016', 'non', 13, 14),
(2, 'fhker', '23323', 're', 15, 14);

-- --------------------------------------------------------

--
-- Structure de la table `sectors`
--

CREATE TABLE IF NOT EXISTS `sectors` (
  `id` int(11) NOT NULL,
  `description` varchar(222) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sectors`
--

INSERT INTO `sectors` (`id`, `description`) VALUES
(1, 'informatique'),
(2, 'count banck'),
(3, 'sector3'),
(4, 'count banck'),
(5, 'sector3'),
(6, 'exemple'),
(7, 'exemple');

-- --------------------------------------------------------

--
-- Structure de la table `social_profiles`
--

CREATE TABLE IF NOT EXISTS `social_profiles` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `social_network_name` varchar(64) DEFAULT NULL,
  `social_network_id` varchar(128) DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `display_name` varchar(128) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `link` varchar(512) NOT NULL,
  `picture` varchar(512) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `social_profiles`
--

INSERT INTO `social_profiles` (`id`, `user_id`, `social_network_name`, `social_network_id`, `email`, `display_name`, `first_name`, `last_name`, `link`, `picture`, `created`, `modified`, `status`) VALUES
(1, 12, 'bilel belwafi', NULL, 'bilel', 'bilel belwafi', 'bilel', 'belwafi', '', 'robert1.jpg', '2017-03-15 00:00:00', '2017-03-24 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `role` varchar(64) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created`, `modified`, `status`) VALUES
(13, 'robert_audoux', '3d7a0f28a4634d1ce2a5b2fc7bf084bc145b450e', 'robert@garago.com', 'admin', '2017-03-09 21:13:39', '2017-03-09 21:13:39', 1),
(14, 'bilel_belwafi', '852e8e14064983ca058b83303fba19091b13bd4a', 'bilel.belwafi.iit@gmail.com', 'admin', '2017-03-10 09:04:04', '2017-03-10 09:04:04', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `document_categories`
--
ALTER TABLE `document_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `document_customers`
--
ALTER TABLE `document_customers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `document_languages`
--
ALTER TABLE `document_languages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `document_sectors`
--
ALTER TABLE `document_sectors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `social_profiles`
--
ALTER TABLE `social_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actions`
--
ALTER TABLE `actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=176;
--
-- AUTO_INCREMENT pour la table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `document_categories`
--
ALTER TABLE `document_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `document_customers`
--
ALTER TABLE `document_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `document_languages`
--
ALTER TABLE `document_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `document_sectors`
--
ALTER TABLE `document_sectors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `social_profiles`
--
ALTER TABLE `social_profiles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
