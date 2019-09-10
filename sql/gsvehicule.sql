-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 10 sep. 2019 à 17:13
-- Version du serveur :  5.7.26
-- Version de PHP :  7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gsvehicule`
--

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

DROP TABLE IF EXISTS `devis`;
CREATE TABLE IF NOT EXISTS `devis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `date` date NOT NULL,
  `data` text NOT NULL,
  `envoye` tinyint(1) NOT NULL,
  `error` tinyint(1) NOT NULL,
  `type_id` int(11) NOT NULL DEFAULT '1',
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `etat_de_commande` tinyint(1) DEFAULT NULL,
  `referance` text,
  `motifs` text,
  `version` varchar(10) NOT NULL,
  `num_version` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `type` (`type_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=363 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `devis`
--

INSERT INTO `devis` (`id`, `nom`, `date`, `data`, `envoye`, `error`, `type_id`, `user_id`, `etat_de_commande`, `referance`, `motifs`, `version`, `num_version`) VALUES
(359, 'F22715191017_C9_64125_001_01_KRA_20170426_175710.pdf', '2018-04-12', '[{\"Dossier de l\'op\\u00e9rateur\":\"FREE INFRASTRUCTURE\",\"Sous-traitant de l\\u2019Op\\u00e9rateur\":\"SPIE CITYNETWORKS\",\"R\\u00e9f\\u00e9rence Orange de la Commande d\'Acc\\u00e8s\":\"F22715191017\",\"Commune ou arrondissement concern\\u00e9\":\"BIDART\",\"R\\u00e9f\\u00e9rence Orange de la commande de plans itin\\u00e9raires\":\"sans objet\"},{\"Travaux accept\\u00e9s par Orange\":\"\\u00a0\\tSans objet\",\"Montant des travaux (\\u20ac HT)\":\"\"},{\"Travaux accept\\u00e9s par Orange\":\"Sans objet\",\"Montant des travaux (\\u20ac HT) \":\"\"},{\"Travaux accept\\u00e9s par Orange\":\"Sans objet\",\"Montant des travaux (\\u20ac HT) \":\"\"},{\"N\\u00b0 de la commande Novae\":\"Sans objet\",\"Montant total des travaux accept\\u00e9 par Orange (\\u20ac HT)\":\"\\u00a0\"}]', 1, 0, 1, 1, 0, 'F22715191017', '{\"title\":\"Non-conformit\\u00e9 des r\\u00e8gles d\\u2019ing\\u00e9nierie. Voir d\\u00e9tail dans l\\u2019annexe de refus. \",\"motifs\":{\"B37\":\"<strong>B3<\\/strong> : Fournir la fiche de chambre avec le taux  d\'occupation et le type de cable pour toutes les alv\\u00e9oles du masque logique utilis\\u00e9.\\n (r\\u00e9f\\u00e9rance chambre : 64125\\/319 )\",\"Q44\":\"<strong>oui percement petit pied droit<\\/strong> : Refus pour non respect de la distance de 3 cm entre les alv\\u00e9oles\\n (r\\u00e9f\\u00e9rance chambre : 64125\\/17 )\"}}', 'V1', 1),
(360, 'F32772050117_C9_01238_001_01_CPI.pdf', '2018-04-12', '[{\"Dossier de l\'op\\u00e9rateur\":\"FREE INFRASTRUCTURE\",\"Sous-traitant de l\\u2019Op\\u00e9rateur\":\"CIRCET\",\"R\\u00e9f\\u00e9rence Orange de la Commande d\'Acc\\u00e8s\":\"F32772050117\",\"Commune ou arrondissement concern\\u00e9\":\"MASSIEUX\",\"R\\u00e9f\\u00e9rence Orange de la commande de plans itin\\u00e9raires\":\"sans objet\"},{\"Travaux accept\\u00e9s par Orange\":\"\\u00a0\\tSans objet\",\"Montant des travaux (\\u20ac HT)\":\"\"},{\"Travaux accept\\u00e9s par Orange\":\"Sans objet\",\"Montant des travaux (\\u20ac HT) \":\"\"},{\"Travaux accept\\u00e9s par Orange\":\"Sans objet\",\"Montant des travaux (\\u20ac HT) \":\"\"},{\"N\\u00b0 de la commande Novae\":\"Sans objet\",\"Montant total des travaux accept\\u00e9 par Orange (\\u20ac HT)\":\"\\u00a0\"}]', 1, 0, 1, 1, 0, 'F32772050117', '{\"title\":\"L\\u2019annexe et\\/ou les fichiers cartographiques DXF transmis ne sont pas coh\\u00e9rents. Si l\\u2019annexe est erron\\u00e9e suite \\u00e0 des \\u00e9l\\u00e9ments non ou mal saisis (d\\u00e9tails visibles par colorisation des \\u00e9l\\u00e9ments en d\\u00e9faut), vous pouvez consulter l\'aide au remplissage pour vous aider dans la compl\\u00e9tude.\",\"motifs\":[]}', 'V1', 1),
(361, 'F47414010617_C9_01014_001_01_CPI_20170104_143738.pdf', '2018-04-12', '[{\"Dossier de l\'op\\u00e9rateur\":\"FREE INFRASTRUCTURE\",\"Sous-traitant de l\\u2019Op\\u00e9rateur\":\"EIFFAGE ENERGIE TELECOM\",\"R\\u00e9f\\u00e9rence Orange de la Commande d\'Acc\\u00e8s\":\"F47414010617\",\"Commune ou arrondissement concern\\u00e9\":\"OYONNAX\",\"R\\u00e9f\\u00e9rence Orange de la commande de plans itin\\u00e9raires\":\"sans objet\"},{\"Travaux accept\\u00e9s par Orange\":\"\\u00a0\\tSans objet\",\"Montant des travaux (\\u20ac HT)\":\"\"},{\"Travaux accept\\u00e9s par Orange\":\"Sans objet\",\"Montant des travaux (\\u20ac HT) \":\"\"},{\"Travaux accept\\u00e9s par Orange\":\"Sans objet\",\"Montant des travaux (\\u20ac HT) \":\"\"},{\"N\\u00b0 de la commande Novae\":\"Sans objet\",\"Montant total des travaux accept\\u00e9 par Orange (\\u20ac HT)\":\"\\u00a0\"}]', 1, 0, 1, 1, 0, 'F47414010617', '{\"title\":\"Document livr\\u00e9 non conforme au r\\u00e9alis\\u00e9 terrain.\",\"motifs\":{\"F39\":\"<strong>01014\\/165<\\/strong> : voir compte rendu\\n (r\\u00e9f\\u00e9rance chambre : 01014\\/165 )\",\"F40\":\"<strong>01014\\/130<\\/strong> : voir compte rendu\\n (r\\u00e9f\\u00e9rance chambre : 01014\\/130 )\",\"F41\":\"<strong>01014\\/1682<\\/strong> : voir compte rendu\\n (r\\u00e9f\\u00e9rance chambre : 01014\\/1682 )\",\"F42\":\"<strong>01014\\/133<\\/strong> : voir compte rendu\\n (r\\u00e9f\\u00e9rance chambre : 01014\\/133 )\",\"F49\":\"<strong>01014\\/353<\\/strong> : voir compte rendu\\n (r\\u00e9f\\u00e9rance chambre : 01014\\/353 )\",\"F50\":\"<strong>01014\\/550<\\/strong> : voir compte rendu\\n (r\\u00e9f\\u00e9rance chambre : 01014\\/550 )\"}}', 'V1bis', 1),
(362, 'F22726191017_C9_67222_002_01_NMA_20171002_163433.pdf', '2018-10-04', '[{\"Dossier de l\'op\\u00e9rateur\":\"FREE INFRASTRUCTURE\",\"Sous-traitant de l\\u2019Op\\u00e9rateur\":\"AXIANS FIBRE EST\",\"R\\u00e9f\\u00e9rence Orange de la Commande d\'Acc\\u00e8s\":\"F22726191017\",\"Commune ou arrondissement concern\\u00e9\":\"INGWILLER\",\"R\\u00e9f\\u00e9rence Orange de la commande de plans itin\\u00e9raires\":\"sans objet\"},{\"Travaux accept\\u00e9s par Orange\":\"\\u00a0\\tOui\",\"Montant des travaux (\\u20ac HT)\":\"1323.19\"},{\"Travaux accept\\u00e9s par Orange\":\"Sans objet\",\"Montant des travaux (\\u20ac HT) \":\"\"},{\"Travaux accept\\u00e9s par Orange\":\"Sans objet\",\"Montant des travaux (\\u20ac HT) \":\"\"},{\"N\\u00b0 de la commande Novae\":\"AA00130525\",\"Montant total des travaux accept\\u00e9 par Orange (\\u20ac HT)\":\"\\u00a0\\t1323.19\"}]', 1, 0, 1, 1, 1, 'F22726191017', NULL, 'NOVAE (1)', 1);

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'gestn', 'gestionnaires'),
(3, 'tech', 'techniciens');

-- --------------------------------------------------------

--
-- Structure de la table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note` varchar(255) DEFAULT NULL,
  `id_user` int(255) NOT NULL,
  `id_operation` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`id`, `note`, `id_user`, `id_operation`) VALUES
(1, 'qsjxgb', 35, 0),
(2, 'qskx', 35, 0),
(3, 'sxwjk;n', 35, 0),
(4, 'sxwjk;n', 35, 0),
(5, 'sqskj', 35, 0),
(6, 'hcgvn', 35, 0),
(7, 'sqc', 35, 0),
(8, 'uazjbhqck', 35, 1),
(9, 'zshu', 35, 1),
(10, 'zshu', 35, 3),
(11, 'eaf', 35, 1),
(12, 'ahmed', 35, 1);

-- --------------------------------------------------------

--
-- Structure de la table `operation`
--

DROP TABLE IF EXISTS `operation`;
CREATE TABLE IF NOT EXISTS `operation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `id_vehicule` int(11) NOT NULL,
  `image` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `operation`
--

INSERT INTO `operation` (`id`, `id_user`, `date_debut`, `date_fin`, `sujet`, `description`, `id_vehicule`, `image`) VALUES
(1, 35, '2019-09-06', '2019-09-14', 'operation 2', 'operation test', 3, NULL),
(2, 35, '2019-09-04', '2019-09-14', 'sqkjd', 'qskdh', 3, NULL),
(3, 35, '2019-09-04', '2019-09-13', 'hgbh', 'hgjbhk', 2, NULL),
(4, 35, '2019-09-03', '2019-09-13', 'xwb', 'qsxwjnklsckln', 3, NULL),
(5, 35, '2019-09-09', '2019-09-12', 'rrrrr', 'ppimouyiukj', 3, NULL),
(6, 35, '2019-09-10', '2019-09-12', 'sqkjd', 'teste', 3, NULL),
(7, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(8, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(9, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(10, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(11, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(12, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(13, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(14, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(15, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(16, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(17, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(18, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(19, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(20, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(21, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(22, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(23, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(24, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(25, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(26, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(27, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, NULL),
(28, 35, '2019-09-10', '2019-09-20', 'sqkjd', 'teste', 3, 'Untitled.png'),
(29, 35, '2019-09-09', '2019-09-25', 'sqkjd', 'ggjh', 3, 'Untitled.png'),
(30, 35, '2019-09-10', '2019-09-13', 'operation 1', 'operation annuelle', 4, '');

-- --------------------------------------------------------

--
-- Structure de la table `types_vehic`
--

DROP TABLE IF EXISTS `types_vehic`;
CREATE TABLE IF NOT EXISTS `types_vehic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_vehic` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `types_vehic`
--

INSERT INTO `types_vehic` (`id`, `type_vehic`) VALUES
(1, 'auto'),
(2, 'car');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'LkJilUnsCrU5PFPFi.HKlO', 1268889823, 1568120325, 1, 'Adminn', 'istrator', 'ADMIN', '0'),
(31, '::1', 'newuj', '$2y$08$qVFChqmq745VChNdSr/dAeqGrLt70oP/MwA7mdqpVUTtiZ0TKiAbm', NULL, 'admin2@admin.com', NULL, NULL, NULL, 'C0C6VZpb7cZOH2KU2CDife', 1517485637, 1518621287, 1, 'teste', 'aaaaa', NULL, NULL),
(32, '::1', 'admin@rc2k.com', '$2y$08$XX3E7oSAAKiYKmSRxjxkvuOKynw8Yiknn9n3bp4q8Ts40gGrRpwYq', NULL, 'admin@rc2k.com', NULL, NULL, NULL, NULL, 1567603458, 1568115064, 1, 'abdellatif', 'Eddib', NULL, NULL),
(33, '::1', 'fatah@gmail.com', '$2y$08$g36pg3P2fwB5kOe3E9zMYO39pt4v90Z8ROxsAYUZ6W/oF9i7UWNNm', NULL, 'fatah@gmail.com', NULL, NULL, NULL, NULL, 1567617915, NULL, 1, 'fatah', 'karchal', NULL, NULL),
(34, '::1', 'ahmed@gmail.com', '$2y$08$kjbGcAZHrIkSAdzxXoIWcuz6MSp8PNFlEQmA2B3WUC6cKOQ1733Pq', NULL, 'ahmed@gmail.com', NULL, NULL, NULL, NULL, 1567618051, NULL, 1, 'ahmed', 'dorhmi', NULL, NULL),
(35, '::1', 'rc2k@admin.com', '$2y$08$AsZZaCTLBS/2ifi9uYiAyObsssoaOfnJWjHYFKx/vp3FM2HguzPK2', NULL, 'rc2k@admin.com', NULL, NULL, NULL, NULL, 1567639305, 1568115620, 1, 'abdellatif', 'Eddib', NULL, NULL),
(36, '::1', 'admin@555.com', '$2y$08$PLiYcdLgw5/MLsudMUECn.WBxLi30qLPxgX8ySILacOaF08Mw1NMC', NULL, 'admin@555.com', NULL, NULL, NULL, NULL, 1567639753, NULL, 1, 'abdellatif', 'Eddib', NULL, NULL),
(37, '::1', 'admin@555j.com', '$2y$08$CHn40GNmYkllbFMmcJ..HOVQbRbXtZ.OgLyXGBPH1q0uM22ltol22', NULL, 'admin@555j.com', NULL, NULL, NULL, NULL, 1567639768, NULL, 1, 'abdellatif', 'Eddib', NULL, NULL),
(38, '::1', 'admin@55455j.com', '$2y$08$GQjkb7S5Du00oSvtST/SyeC8nvrkmWz.wtIlaFXuQzCFGpxJWHMGG', NULL, 'admin@55455j.com', NULL, NULL, NULL, NULL, 1567639801, NULL, 1, 'abdellatif', 'Eddib', NULL, NULL),
(39, '::1', 'admin@ygjhb.com', '$2y$08$JZp8FJTgNTi8YGXf8tL4jusS//QBamAyq3jJFU/rdqJ6mAiuDpNYC', NULL, 'admin@ygjhb.com', NULL, NULL, NULL, NULL, 1567639865, NULL, 1, 'aaaa', 'aaaa', NULL, NULL),
(41, '::1', 'fcggv@admijn.com', '$2y$08$dt/Ka9yVTEL84ulD7Va.ae2AHATCUlwTjqciS0guIB6El.qhzHAIi', NULL, 'fcggv@admijn.com', NULL, NULL, NULL, NULL, 1567639922, NULL, 1, 'fxdcgb', 'xdfcgbn', NULL, NULL),
(42, '::1', 'admin@fhcvgn.com', '$2y$08$dthO0Cn0mTxZiSh221ydSedDasLtyvlnAqxSn6LGKBqyP0UqiUjv2', NULL, 'admin@fhcvgn.com', NULL, NULL, NULL, NULL, 1567640400, NULL, 1, 'abdellatif', 'Eddib', NULL, NULL),
(43, '::1', 'admin@jhb.com', '$2y$08$cpqicBMnQ9Z9BSciUwu5W.e4SXEYt.avmF/AfCJSM3JdOrvfdE5Ge', NULL, 'admin@jhb.com', NULL, NULL, NULL, NULL, 1567640445, NULL, 1, 'abdellatif', 'Eddib', NULL, NULL),
(44, '::1', 'admin@lklk.com', '$2y$08$Dmr7lU2Go2IBAw3YLnMDUOgAXUDbkQOkiLz8/JnGq3hOQTDC1ws3C', NULL, 'admin@lklk.com', NULL, NULL, NULL, NULL, 1567640511, NULL, 1, 'abdellatif', 'Eddib', NULL, NULL),
(45, '::1', 'admin@llklk.com', '$2y$08$0C8DsGAf21SRvNvaHWEezOe.j8YOYUz0mZnhlgVVaCezXqBrps6cG', NULL, 'admin@llklk.com', NULL, NULL, NULL, NULL, 1567640553, NULL, 1, 'abdellatif', 'Eddib', NULL, NULL),
(46, '::1', 'ad4min@llklk.com', '$2y$08$mRW2efPZrcqqs6oi2dO6/uLkLv5Sc0/O3sIgD465HhzuExy3O4M/S', NULL, 'ad4min@llklk.com', NULL, NULL, NULL, NULL, 1567640577, NULL, 1, 'abdellatif', 'Eddib', NULL, NULL),
(47, '::1', 'admin@adllllmin.com', '$2y$08$WR77Kj84ek65nHTP6PQk5.9WFbQTvXbVP/sDq3HILrg9uGJQ0aEay', NULL, 'admin@adllllmin.com', NULL, NULL, NULL, NULL, 1567640605, NULL, 1, 'abdellatif', 'Eddib', NULL, NULL),
(48, '::1', 'admin@ad553nmin.com', '$2y$08$jZZW7NjbemKuENjA20RWke6C27Pmmcsd9.2vd0z0WKlvXnxWpAP4y', NULL, 'admin@ad553nmin.com', NULL, NULL, NULL, NULL, 1567640672, NULL, 1, 'abdellatif', 'Eddib', NULL, NULL),
(49, '::1', 'admin@ad55in.com', '$2y$08$m.n8m.KSm7PqgF1Mn1GBB.coAKriYDIp8Qq2pxxzBKiGSjf00idz.', NULL, 'admin@ad55in.com', NULL, NULL, NULL, NULL, 1567641217, NULL, 1, 'abdellatif', 'Eddib', NULL, NULL),
(50, '::1', 'admin@admltfgjhjin.com', '$2y$08$OxT7g1K5iJv.Vc9PqbKl3.itjBN/SvJrcP788/zIoJajwIXF3pZYm', NULL, 'admin@admltfgjhjin.com', NULL, NULL, NULL, NULL, 1567641361, NULL, 1, 'abdellatif', 'Eddib', NULL, NULL),
(51, '::1', 'adm13in@admin.com', '$2y$08$SSQLSuNwZ1C4K3u9R4mAX.g4mL/Jb41/TZBakMwaoQbIKuxi8pSKW', NULL, 'adm13in@admin.com', NULL, NULL, NULL, NULL, 1567641420, NULL, 1, 'abdellatif', 'Eddib', NULL, NULL),
(52, '::1', 'dvqqqqqq@vsd.com', '$2y$08$YzY6/2Ea7/lu0LHA1a6D.OYGLzcXr5QUraNqmA.mvKdx79JAQUZym', NULL, 'dvqqqqqq@vsd.com', NULL, NULL, NULL, NULL, 1567694870, NULL, 1, 'dsfxv', 'dqfv', NULL, NULL),
(53, '::1', 'dvqqqqq@vsd.com', '$2y$08$pKAE.q8cYQM3df5oBgh.v.YIahM8cVrOkA2gjtDQ5exyC.HxVosjm', NULL, 'dvqqqqq@vsd.com', NULL, NULL, NULL, NULL, 1567694901, NULL, 1, 'dsfxv', 'dqfv', NULL, NULL),
(54, '::1', 'abdellatifeddib@ghjmail.com', '$2y$08$OS2g/ZzYWFYeG7Gjzt2zdOBr.qM6omn0CKwwxs28Xw8iVBrxwTgE6', NULL, 'abdellatifeddib@ghjmail.com', NULL, NULL, NULL, NULL, 1567712939, NULL, 1, 'abdellatif', 'Eddib', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(29, 31, 2),
(30, 32, 2),
(31, 33, 2),
(32, 34, 3),
(33, 35, 3),
(34, 36, 3),
(35, 37, 3),
(36, 38, 3),
(37, 39, 2),
(39, 41, 3),
(40, 42, 3),
(41, 43, 3),
(42, 44, 3),
(43, 45, 3),
(44, 46, 3),
(45, 47, 3),
(46, 48, 3),
(47, 49, 3),
(48, 50, 3),
(49, 51, 3),
(50, 52, 3),
(51, 53, 3),
(52, 54, 3);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

DROP TABLE IF EXISTS `vehicule`;
CREATE TABLE IF NOT EXISTS `vehicule` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) DEFAULT NULL,
  `marque` varchar(20) DEFAULT NULL,
  `carburant` varchar(20) DEFAULT NULL,
  `num_matricule` int(255) DEFAULT NULL,
  `date_achat` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `nom`, `marque`, `carburant`, `num_matricule`, `date_achat`) VALUES
(3, 'c3', 'citroenn', 'diesell', 6464, '2019-09-15'),
(4, '3008', 'citroen', 'Relish', 46316453, '2019-05-14'),
(5, 'gry', 'mkljk', 'essence', 6543354, '2019-09-09');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `devis`
--
ALTER TABLE `devis`
  ADD CONSTRAINT `devis_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
