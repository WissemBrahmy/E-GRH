-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 16 avr. 2018 à 16:57
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pfa`
--

-- --------------------------------------------------------

--
-- Structure de la table `absences`
--

CREATE TABLE `absences` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `heures` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `masque` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `absences`
--

INSERT INTO `absences` (`id`, `date`, `heures`, `user_id`, `masque`) VALUES
(16, '2018-03-08', 2, 6, 0),
(28, '2018-03-05', 1, 6, 1),
(31, '2018-03-05', 5, 6, 1),
(32, '2018-03-05', 5, 6, 1),
(33, '2018-03-05', 1, 6, 1),
(34, '2018-03-05', 6, 11, 1),
(35, '2018-03-05', 9, 14, 1),
(36, '2018-04-14', 8, 6, 0),
(37, '2018-04-16', 8, 6, 1),
(38, '2018-04-16', 8, 6, 1),
(39, '2018-04-16', 8, 6, 1),
(40, '2018-04-16', 8, 6, 1),
(41, '2018-04-16', 8, 6, 1),
(42, '2018-04-16', 8, 6, 1),
(43, '2018-04-16', 8, 6, 1),
(44, '2018-04-16', 8, 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `attestation_p`
--

CREATE TABLE `attestation_p` (
  `id` int(11) NOT NULL,
  `raison` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `verif` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `attestation_p`
--

INSERT INTO `attestation_p` (`id`, `raison`, `user_id`, `date`, `verif`) VALUES
(1, 'rtrreee', 6, '2018-03-29 22:05:24', 0),
(2, 'azert', 11, '2018-03-30 00:20:34', 1),
(3, 'ererer', 6, '2018-03-31 15:11:05', 0),
(4, '566', 6, '2018-04-13 00:12:28', 1);

-- --------------------------------------------------------

--
-- Structure de la table `avances`
--

CREATE TABLE `avances` (
  `id` int(11) NOT NULL,
  `montant` double NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `verif` tinyint(1) NOT NULL DEFAULT '0',
  `attente` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avances`
--

INSERT INTO `avances` (`id`, `montant`, `user_id`, `date`, `verif`, `attente`) VALUES
(5, 400, 6, '2018-03-22 20:48:26', 0, 1),
(6, 122, 6, '2018-03-22 20:50:26', 1, 1),
(7, 500, 6, '2018-03-22 21:15:38', 0, 0),
(8, 240, 11, '2018-03-22 21:25:06', 1, 1),
(9, 700, 6, '2018-03-23 09:01:14', 1, 1),
(10, 966, 6, '2018-03-23 11:50:51', 1, 1),
(11, 400, 14, '2018-03-27 18:28:18', 1, 1),
(12, 80, 11, '2018-03-28 15:58:08', 0, 0),
(13, 800, 14, '2018-04-12 19:14:37', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `code`
--

CREATE TABLE `code` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `serie` int(13) NOT NULL,
  `code_sortie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `code`
--

INSERT INTO `code` (`id`, `code`, `serie`, `code_sortie`) VALUES
(13, '98466867691250', 65303314, 56487522),
(15, '0396178839925', 22533012, 11235833),
(16, '3751305458000', 789225470, 78955462),
(17, '899328333207', 8974452, 879963224),
(18, '77673343492000', 7784452, 231445700),
(19, '12319037680225', 2557250, 88799554),
(20, '52380404824', 2550628, 879633025),
(21, '158628942622', 2550818, 789945662),
(24, '0', 2551110, 0),
(25, '0', 2550302, 0);

-- --------------------------------------------------------

--
-- Structure de la table `conges`
--

CREATE TABLE `conges` (
  `id` int(11) NOT NULL,
  `date_deb` date NOT NULL,
  `date_fin` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_demande` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `verif` int(1) NOT NULL DEFAULT '0',
  `type` varchar(100) DEFAULT NULL,
  `attente` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `conges`
--

INSERT INTO `conges` (`id`, `date_deb`, `date_fin`, `user_id`, `date_demande`, `verif`, `type`, `attente`) VALUES
(2, '2018-03-07', '2018-03-21', 4, '2018-03-02 00:00:00', 0, NULL, NULL),
(3, '2018-03-23', '2018-03-29', 11, '2018-03-17 00:00:00', 0, NULL, NULL),
(6, '2017-12-15', '2018-01-17', 11, '2018-03-19 00:00:00', 0, NULL, NULL),
(10, '2018-05-07', '2018-03-11', 11, '2018-03-20 18:43:11', 0, NULL, NULL),
(11, '2018-01-08', '2018-03-21', 6, '2018-03-22 18:14:19', 0, NULL, NULL),
(16, '2018-05-15', '2018-05-17', 6, '2018-03-23 10:15:54', 0, NULL, 1),
(28, '2018-03-28', '2018-03-29', 6, '2018-03-23 12:01:07', 1, NULL, 0),
(30, '2018-03-19', '2018-03-20', 6, '2018-03-24 04:47:47', 1, NULL, 0),
(31, '2018-10-17', '2018-10-18', 6, '2018-03-25 14:31:19', 0, NULL, 0),
(32, '2018-03-15', '2018-03-16', 11, '2018-03-27 16:37:40', 0, NULL, 0),
(33, '2018-03-12', '2018-03-13', 14, '2018-03-27 23:29:49', 1, NULL, 0),
(34, '2018-03-11', '2018-03-11', 6, '2018-03-29 09:36:56', 1, NULL, 0),
(35, '2018-03-19', '2018-03-20', 6, '2018-03-29 09:37:37', 1, NULL, 0),
(36, '2018-03-18', '2018-03-19', 6, '2018-03-29 20:38:58', 0, ' Conge longue duree ', 0),
(37, '2018-03-19', '2018-03-20', 6, '2018-03-29 20:41:18', 0, ' Conge paternite', 0),
(38, '2017-10-09', '2017-11-05', 14, '2018-03-29 20:42:46', 0, 'Conge maternite ', 0),
(40, '2018-04-16', '2018-04-17', 16, '2018-04-11 12:24:02', 0, ' Autres ', 0);

-- --------------------------------------------------------

--
-- Structure de la table `deplacements`
--

CREATE TABLE `deplacements` (
  `id` int(11) NOT NULL,
  `objet_mission` varchar(500) DEFAULT NULL,
  `fonction` varchar(1000) DEFAULT NULL,
  `lieu` varchar(50) NOT NULL,
  `prime` int(11) NOT NULL,
  `date_depart` date DEFAULT NULL,
  `date_retour` date DEFAULT NULL,
  `moyen_transport` varchar(50) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `deplacements`
--

INSERT INTO `deplacements` (`id`, `objet_mission`, `fonction`, `lieu`, `prime`, `date_depart`, `date_retour`, `moyen_transport`, `user_id`, `date`) VALUES
(4, 'apprendre', 'etuder les besoins des clients', 'Sousse', 210, '2018-04-10', '2018-04-12', 'vehicule professionnel', 6, '2017-12-10 08:21:34'),
(7, 'maintenance', 'maintenir les materiels informatiques de notre partenaire', 'sfax', 80, '2018-04-22', '2018-04-24', 'vehicule professionnel', 6, '2018-03-10 12:36:18'),
(9, ' ordre de mission ', 'Réaliser l\'étude quantitative:\r\nla méthode que vous comptez employer : collecte dans la rue.\r\nla façon dont vous allez présenter votre offre : flyer, questionnaire, démonstration\r\n', 'Monastir', 320, '2018-03-07', '2018-03-06', 'véhicule personnel', 6, '2018-03-29 12:22:10'),
(10, 'aaa', 'aaaaaaaaa \r\n', 'gabes', 70, '2018-04-12', '2018-04-13', 'vehicule personnel', 6, '2018-04-12 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `sujet` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `titre`, `sujet`, `date`) VALUES
(2, 'azertyuiop', 'crise economique mondial et ses   sur notre societecrise economique e', '2018-04-17'),
(4, 'crise ', 'crise economique mondial et ses effets sur notre societe', '2018-04-17'),
(5, 'fffffffffff', 'crise economique mondial et ses effets sur notre societe', '2018-04-17'),
(6, 'azer', 'crise economique mondial et ses effets sur notre societe', '2018-04-17'),
(7, 'azerty', 'crise economique mondial et ses effets sur notre societe', '2018-04-17'),
(9, 'jhj', 'hjgv', '2018-04-19');

-- --------------------------------------------------------

--
-- Structure de la table `jours_feriers`
--

CREATE TABLE `jours_feriers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jours_feriers`
--

INSERT INTO `jours_feriers` (`id`, `name`, `date`) VALUES
(2, 'greve', '2018-03-09'),
(3, '3id', '2018-03-14'),
(4, 'erdf', '2018-04-11');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `titre`, `message`, `user_id`, `date`) VALUES
(4, 'eeeee', 'eeeeeeeeeee', 5, '2018-03-19 19:49:18'),
(15, 'youuu', 'youuuuuuuu\r\naaaaaeaaaaaaaaaa', 11, '2018-03-22 15:09:35'),
(17, 'ahla', 'wsahla\r\n', 11, '2018-03-22 14:33:49'),
(18, 'winek', 'labes', 11, '2018-03-22 14:34:00'),
(19, 'rrr', 'ffffffffff', 2, '2018-03-22 14:41:59'),
(20, 'ed', 'aazzz\r\nnnnnnnnnnnnnniiiiiiiiiiiii', 2, '2018-03-22 15:09:47'),
(21, 'rqqqq', 'ggg', 2, '2018-03-22 15:23:46'),
(22, 'ahla ', 'winek cv??\r\n', 6, '2018-03-23 10:52:07'),
(23, 'sooo', 'sooooooooooooo', 6, '2018-03-23 13:34:40'),
(25, 'bnj', 'bonjouuuuuur', 11, '2018-03-28 13:52:33'),
(26, '8888', '7777', 6, '2018-04-11 10:53:03'),
(27, 'mmmm', 'mmmmm', 16, '2018-04-11 10:53:28');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `titre` varchar(50) NOT NULL,
  `note` varchar(1000) NOT NULL,
  `id_user` int(11) NOT NULL,
  `masque` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id`, `date`, `titre`, `note`, `id_user`, `masque`) VALUES
(10, '2018-06-12', 'cccccccc', 'ÿÜŽ&Çò(ýC‘…ž£~c¬Iå\'‡ýã#f´?®–h', 6, 0),
(11, '2018-03-04', 'lllaauuta', 'ayyhekkkkkkzhzgzttztaaaaaa', 6, 1),
(12, '2018-03-13', 'dddq', 'wissem', 6, 1),
(14, '2018-03-08', 'ty', 'retttttttttttttttt', 6, 1),
(15, '2018-03-02', 'tk', 'tikt', 6, 0),
(16, '2018-03-02', 'tk', 'tikt', 6, 0),
(17, '2018-03-09', 'rkrkkr', 'rekr', 6, 0);

-- --------------------------------------------------------

--
-- Structure de la table `piece_justif`
--

CREATE TABLE `piece_justif` (
  `id` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  `date_absence` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `piece_justif`
--

INSERT INTO `piece_justif` (`id`, `path`, `date_absence`, `user_id`, `date`) VALUES
(3, '1521898830OracleSQL.pdf', '0000-00-00', 6, '2018-03-24 14:40:30'),
(4, '1521898888OracleSQL.pdf', '2014-03-05', 6, '2018-03-24 14:41:28'),
(5, '1522663566Certificat-medical.jpg', '2018-04-19', 6, '2018-04-02 12:06:06');

-- --------------------------------------------------------

--
-- Structure de la table `pointage`
--

CREATE TABLE `pointage` (
  `id` int(11) NOT NULL,
  `chekin` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` int(11) NOT NULL,
  `code` int(20) NOT NULL,
  `checkout` int(11) NOT NULL DEFAULT '0',
  `code_sortie` int(11) NOT NULL DEFAULT '12345',
  `heure` time NOT NULL,
  `datep` date DEFAULT NULL,
  `date_sortie` date NOT NULL DEFAULT '0000-00-00',
  `heure_sortie` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pointage`
--

INSERT INTO `pointage` (`id`, `chekin`, `user_id`, `code`, `checkout`, `code_sortie`, `heure`, `datep`, `date_sortie`, `heure_sortie`) VALUES
(20, 1, 14, 0, 0, 12345, '14:55:46', '0000-00-00', '0000-00-00', '0000-00-00'),
(21, 1, 14, 0, 0, 12345, '14:59:31', '0000-00-00', '0000-00-00', '0000-00-00'),
(22, 1, 14, 0, 0, 12345, '15:17:35', '0000-00-00', '0000-00-00', '0000-00-00'),
(23, 1, 14, 0, 0, 12345, '15:21:48', '0000-00-00', '0000-00-00', '0000-00-00'),
(24, 1, 14, 0, 0, 12345, '15:21:54', '0000-00-00', '0000-00-00', '0000-00-00'),
(25, 1, 6, 0, 1, 78820115, '22:04:52', '2018-03-28', '2018-04-16', '0000-00-00'),
(27, 1, 6, 2147483647, 1, 78820115, '11:50:45', '2018-04-16', '2018-04-16', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `diplome` varchar(200) NOT NULL,
  `experience` varchar(500) NOT NULL,
  `langue` varchar(100) NOT NULL,
  `stage` varchar(100) NOT NULL,
  `competence` varchar(1000) NOT NULL,
  `centre_interet` varchar(1000) NOT NULL,
  `autre_formation` varchar(1000) NOT NULL,
  `niveau_etude` varchar(100) NOT NULL,
  `etat_civil` varchar(50) NOT NULL,
  `association` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`id`, `diplome`, `experience`, `langue`, `stage`, `competence`, `centre_interet`, `autre_formation`, `niveau_etude`, `etat_civil`, `association`, `user_id`) VALUES
(1, 'licence fondamentale en informatique de gestion\r\ndiplome national d\'ingenieur en informatique', '2 ans:\r\nDéveloppement d’une application gestion pour une école privé\r\nConception et implémentation d’une application de gestion d’une entreprise (PME)\r\nGestion des clients, Gestion des fournisseurs, Gestion de caisse, Gestion de stock…\r\nConception et réalisation d’une application de vente aux enchères des immobiliers en Tunisie', 'francais-anglais-arab', '2017 : stage ouvrier à Société EXTUN SUARL\r\n2015 : stage professionnel à STBI NABEUL', 'Langages informatique : PHP, JAVA(Swing, JAVAFX), ANDROID, C/C++, SQL/PLSQL, CSS, HTML, ANGULAR JS, PASCAL, VB, J2EE\r\nModélisation: UML, MERISE \r\nGestion de projet: la méthode AGILE SCRUM\r\nDesign patterns: DAO, MVC\r\nOutils bureautique : Niveau avancé MS Word, MS Excel, MS Access, open office…\r\nSystèmes de gestion des bases de données : (Oracle 10g 11g, MySQL, SQL Server , PostgreSQL, NOSQL)\r\nSystèmes: Linux (Ubuntu),  Windows (XP,7 ,8,10,VISTA,SUITE), MS-DOS\r\nAudio-Visuel & Montage : (Adobe Première, CAMTASIA)\r\nGraphisme et multimedia  \r\nRéseaux informatiques: modèle OSI, TCP/IP, Réseaux locaux, Réseau Publique, Intranet, Administration réseaux\r\n', ',  Lecture, jeux de réflexions, réseaux sociaux, Photographie, Philosophie, histoire', 'cerif ccna1- certif c#- Diplôme du BACCALAURÉAT informatique- attestation de formation PHP5', 'bac+6', 'cilibataire', 'non', 6);

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

CREATE TABLE `rapport` (
  `id` int(11) NOT NULL,
  `path` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rapport`
--

INSERT INTO `rapport` (`id`, `path`, `user_id`, `date`) VALUES
(11, '15215583359-servlets-1.pdf', 11, '2018-03-20 16:05:35'),
(13, '152161782210-JSP.pdf', 6, '2018-03-21 08:37:02'),
(25, '1521884777corrigesExos.pdf', 6, '2018-03-24 10:46:17'),
(29, '1521969757COMPTE RENDU.pdf', 6, '2018-03-25 11:22:37');

-- --------------------------------------------------------

--
-- Structure de la table `salaire`
--

CREATE TABLE `salaire` (
  `id` int(11) NOT NULL,
  `salaire` int(11) NOT NULL,
  `prime_rend` int(11) DEFAULT '0',
  `prime_ancien` int(11) DEFAULT '0',
  `prime_presence` int(11) DEFAULT '0',
  `prime` int(11) DEFAULT '0',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salaire`
--

INSERT INTO `salaire` (`id`, `salaire`, `prime_rend`, `prime_ancien`, `prime_presence`, `prime`, `user_id`) VALUES
(15, 4997, 0, 8, 15, 7, 6),
(16, 1700, 100, 0, 0, 25, 14),
(25, 850, 25, 60, 80, 0, 16);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `code` int(11) NOT NULL,
  `libele` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`code`, `libele`) VALUES
(55552, 'informatique'),
(93441504, '');

-- --------------------------------------------------------

--
-- Structure de la table `stagiaire`
--

CREATE TABLE `stagiaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `cin` int(11) NOT NULL,
  `matricule` varchar(20) NOT NULL,
  `specialite` varchar(100) NOT NULL,
  `mission` varchar(100) NOT NULL,
  `date_deb` date NOT NULL,
  `date_fin` date NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `masque` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `stagiaire`
--

INSERT INTO `stagiaire` (`id`, `nom`, `prenom`, `cin`, `matricule`, `specialite`, `mission`, `date_deb`, `date_fin`, `sexe`, `masque`) VALUES
(3, 'ytu', 'hjg', 4876, 'rr58', 'inf', 'dev', '2018-04-18', '2018-04-12', 'HOMME', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `cin` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `date_naissance` date NOT NULL,
  `tel` int(11) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `fonction` varchar(100) DEFAULT NULL,
  `sexe` varchar(10) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `service` varchar(110) DEFAULT NULL,
  `contrat` varchar(50) DEFAULT NULL,
  `date` date NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `password` char(50) CHARACTER SET utf8 NOT NULL,
  `role` int(11) DEFAULT NULL,
  `actif` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `matricule`, `cin`, `nom`, `prenom`, `date_naissance`, `tel`, `grade`, `fonction`, `sexe`, `adresse`, `ville`, `service`, `contrat`, `date`, `photo`, `login`, `password`, `role`, `actif`) VALUES
(1, '1255yy', 14226889, 'wissem', 'brahmi', '2018-02-14', 20225544, '2', NULL, 'm', '', '', '0', NULL, '0000-00-00', NULL, 'admin', 'admin', 1, 1),
(2, '11e', 14226889, 'sirine', 'ayouub', '2018-03-01', 20332112, 'ingenieur informatiq', NULL, 'f', '', '', '0', 'CDI', '0000-00-00', NULL, '', '', NULL, 0),
(3, 'ssd', 1245, 'IBRAHMI', 'Wissem', '2018-03-13', 20115845, 'adm', NULL, 'm', '', '', '0', NULL, '0000-00-00', NULL, 'aaaa', '4a7d1ed414474e4033ac29ccb8653d9b', 1, 1),
(4, '557', 14226889, 'wissem', 'brahimi', '2018-03-16', 20269248, 'ing', NULL, 'm', '', '', '0', NULL, '0000-00-00', NULL, '', '', NULL, 0),
(5, '552k', 1255655, 'saly', 'bernard', '2018-03-13', 21554885, 'tech', NULL, 'f', '', '', '0', NULL, '0000-00-00', NULL, 'solo', 'solo', 1, 1),
(6, 'tt78', 9968332, 'wissem', 'brahmi', '2018-03-30', 25889111, 'ingenieur info', NULL, 'm', 'monastir -city riadh 5000', 'SIDI BOUZID', 'informatique', 'CDI', '2018-04-03', '1521969584profil.jpg', 'ali', '86318e52f5ed4801abe1d13d509443de', NULL, 1),
(7, '1455wiss', 14226889, 'brahmi', 'wissem', '1993-10-15', 20269248, 'administrateur', NULL, 'm', '', '', '0', NULL, '0000-00-00', NULL, 'wissem', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
(11, '001122', 123456, 'sirine', 'ayoub', '1999-03-16', 28447889, 'etudiante', NULL, 'FEMME', 'teboulba-monastir', '', '0', 'CDD', '0000-00-00', '1521962736ddd.jpg', 'sirine', '25ae1b3ee9c85bbfa4da149f286b20f2', NULL, 0),
(14, 'ar99', 9887215, 'basma', 'brahmi', '1992-07-01', 26654354, 'TECHNITIENNE', NULL, 'F', 'SIDI BOUZID', 'SFAX', 'administratif', 'CDI', '2018-04-15', '1522168080basma.jpg', 'basma', '6b20978758b686e177f8c7dd3adcbfc5', NULL, 1),
(16, '445', 215588, 'sirine', 'ayoub', '2018-04-11', 20554799, 'chef agent', NULL, 'FEMME', ' teboulba', '', 'Electrique', NULL, '0000-00-00', NULL, 'ayoub', '25ae1b3ee9c85bbfa4da149f286b20f2', NULL, 0),
(17, '789', 12445887, 'ali', 'ali', '2018-04-18', 55448799, 'ouvrier', NULL, 'FEMME', ' sidi bouzid', 'SOUSSE', 'Informatique', 'CDI', '2018-04-25', NULL, 'ali', 'aafe26449a364e5d6b5db7dc565a9b6a', NULL, 0),
(18, '4887', 2155493, 'wafa', 'brahmi', '2018-04-13', 58447125, 'controleur', NULL, 'FEMME', 'paris', '', 'Informatique', 'CDD', '0000-00-00', '1523020424Logotransparente.png', 'wafa', '1f32aa4c9a1d2ea010adcf2348166a04', NULL, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `absences`
--
ALTER TABLE `absences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `attestation_p`
--
ALTER TABLE `attestation_p`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `avances`
--
ALTER TABLE `avances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `conges`
--
ALTER TABLE `conges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `deplacements`
--
ALTER TABLE `deplacements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jours_feriers`
--
ALTER TABLE `jours_feriers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `piece_justif`
--
ALTER TABLE `piece_justif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `pointage`
--
ALTER TABLE `pointage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `rapport`
--
ALTER TABLE `rapport`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `salaire`
--
ALTER TABLE `salaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`code`);

--
-- Index pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `absences`
--
ALTER TABLE `absences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `attestation_p`
--
ALTER TABLE `attestation_p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `avances`
--
ALTER TABLE `avances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `code`
--
ALTER TABLE `code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `conges`
--
ALTER TABLE `conges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `deplacements`
--
ALTER TABLE `deplacements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `jours_feriers`
--
ALTER TABLE `jours_feriers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `piece_justif`
--
ALTER TABLE `piece_justif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `pointage`
--
ALTER TABLE `pointage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `rapport`
--
ALTER TABLE `rapport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `salaire`
--
ALTER TABLE `salaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `absences`
--
ALTER TABLE `absences`
  ADD CONSTRAINT `absences_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `attestation_p`
--
ALTER TABLE `attestation_p`
  ADD CONSTRAINT `attestation_p_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `avances`
--
ALTER TABLE `avances`
  ADD CONSTRAINT `avances_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `conges`
--
ALTER TABLE `conges`
  ADD CONSTRAINT `conges_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `deplacements`
--
ALTER TABLE `deplacements`
  ADD CONSTRAINT `deplacements_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `piece_justif`
--
ALTER TABLE `piece_justif`
  ADD CONSTRAINT `piece_justif_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `pointage`
--
ALTER TABLE `pointage`
  ADD CONSTRAINT `pointage_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `profil_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `salaire`
--
ALTER TABLE `salaire`
  ADD CONSTRAINT `salaire_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
