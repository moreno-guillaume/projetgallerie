-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2024 at 06:09 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetgallerie`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonne`
--

DROP TABLE IF EXISTS `abonne`;
CREATE TABLE IF NOT EXISTS `abonne` (
  `IdAbonne` int NOT NULL AUTO_INCREMENT,
  `EmailAbonne` varchar(100) NOT NULL,
  `CreationAbonne` date NOT NULL,
  PRIMARY KEY (`IdAbonne`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `abonne`
--

INSERT INTO `abonne` (`IdAbonne`, `EmailAbonne`, `CreationAbonne`) VALUES
(1, 'premier.abonne@hotmail.fr', '2024-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `activite_artiste`
--

DROP TABLE IF EXISTS `activite_artiste`;
CREATE TABLE IF NOT EXISTS `activite_artiste` (
  `IdActivite` int NOT NULL AUTO_INCREMENT,
  `LibelleActivite` varchar(100) NOT NULL,
  PRIMARY KEY (`IdActivite`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `activite_artiste`
--

INSERT INTO `activite_artiste` (`IdActivite`, `LibelleActivite`) VALUES
(1, 'peintre '),
(2, 'sculpteur'),
(3, 'touche-à-tout'),
(4, 'musicien'),
(6, 'auteur'),
(7, 'dessinateur');

-- --------------------------------------------------------

--
-- Table structure for table `artiste`
--

DROP TABLE IF EXISTS `artiste`;
CREATE TABLE IF NOT EXISTS `artiste` (
  `IdArtiste` int NOT NULL AUTO_INCREMENT,
  `NomArtiste` varchar(100) NOT NULL,
  `PrenomArtiste` varchar(100) NOT NULL,
  `BiographieArtiste` longtext NOT NULL,
  `IdActivite` int NOT NULL,
  `NationaliteArtiste` varchar(200) NOT NULL,
  `DateNaissanceArtiste` date NOT NULL,
  `DateDecesArtiste` date DEFAULT NULL,
  `PhotoArtiste` longtext,
  PRIMARY KEY (`IdArtiste`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `artiste`
--

INSERT INTO `artiste` (`IdArtiste`, `NomArtiste`, `PrenomArtiste`, `BiographieArtiste`, `IdActivite`, `NationaliteArtiste`, `DateNaissanceArtiste`, `DateDecesArtiste`, `PhotoArtiste`) VALUES
(1, 'renoir', 'Pierre-Auguste', 'Pierre-Auguste Renoir dit Auguste Renoir, né le 25 février 1841 à Limoges (Haute-Vienne) et mort le 3 décembre 1919 au domaine des Collettes à Cagnes-sur-Mer, est l\'un des plus célèbres peintres français.', 1, 'Français', '0000-00-00', '0000-00-00', NULL),
(2, 'van Gogh', 'Vincent', 'Vincent van Gogh était un peintre post-impressionniste néerlandais dont les œuvres expressives et émouvantes ont marqué l\'art moderne.', 2, 'anglais', '0000-00-00', '0000-00-00', NULL),
(3, 'da Vinci', 'Leonardo', 'Leonardo da Vinci était un polymathe de la Renaissance, célèbre pour ses peintures emblématiques comme la Joconde et La Cène, ainsi que pour ses talents d\'inventeur et de scientifique.', 3, 'Italien', '0000-00-00', '0000-00-00', NULL),
(4, 'Monet', 'Claude', 'Claude Monet était un chef de file du mouvement impressionniste, connu pour ses paysages lumineux et ses études de la nature.', 4, 'anglais', '0000-00-00', '0000-00-00', NULL),
(5, 'Picasso', 'Pablo', 'Pablo Picasso était un artiste espagnol qui a révolutionné l\'art moderne avec ses œuvres cubistes, surréalistes et symbolistes.', 5, 'Italien', '0000-00-00', '0000-00-00', NULL),
(6, 'van Rijn', 'Rembrandt', 'Rembrandt van Rijn était un peintre et graveur néerlandais du Siècle d\'or, célèbre pour ses portraits saisissants et ses œuvres bibliques.', 1, 'russe', '0000-00-00', '0000-00-00', NULL),
(7, 'Kahlo', 'Frida', 'Frida Kahlo était une artiste mexicaine emblématique, connue pour ses autoportraits expressifs et ses œuvres explorant la douleur, la féminité et l\'identité mexicaine.', 2, 'allemand', '0000-00-00', '0000-00-00', NULL),
(8, 'Vermeer', 'Johannes', 'Johannes Vermeer était un peintre néerlandais de l\'âge d\'or, célèbre pour ses scènes domestiques tranquilles et son utilisation magistrale de la lumière.', 3, 'Italien', '0000-00-00', '0000-00-00', NULL),
(9, 'Buonarroti', 'Michelangelo', 'Michelangelo Buonarroti était un artiste de la Renaissance italienne, célèbre pour ses sculptures monumentales comme David et ses fresques emblématiques comme la Chapelle Sixtine.', 4, 'russe', '0000-00-00', '0000-00-00', NULL),
(10, 'O\'Keeffe', 'Georgia', 'Georgia O\'Keeffe était une artiste américaine connue pour ses peintures de fleurs surdimensionnées, ses paysages du sud-ouest des États-Unis et ses abstractions géométriques.', 5, 'Italien', '0000-00-00', '0000-00-00', NULL),
(11, 'Caravaggio', '(Michelangelo)', 'Caravaggio était un peintre italien du Baroque, célèbre pour ses techniques de clair-obscur dramatiques et ses sujets religieux réalistes.', 1, 'Français', '0000-00-00', '0000-00-00', NULL),
(12, 'Cassatt', 'Mary', 'Mary Cassatt était une peintre américaine impressionniste, connue pour ses portraits et ses scènes intimes de la vie quotidienne, en particulier de la vie des femmes et des enfants.', 2, 'Italien', '0000-00-00', '0000-00-00', NULL),
(13, 'Turner', 'William', 'William Turner était un peintre anglais romantique, célèbre pour ses paysages marins et ses représentations atmosphériques saisissantes qui ont influencé l\'art moderne.', 3, 'anglais', '0000-00-00', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `collaborateur`
--

DROP TABLE IF EXISTS `collaborateur`;
CREATE TABLE IF NOT EXISTS `collaborateur` (
  `IdCollab` int NOT NULL AUTO_INCREMENT,
  `NomCollab` varchar(50) NOT NULL,
  `PrenomCollab` varchar(50) NOT NULL,
  `EmailCollab` varchar(50) NOT NULL,
  `PassCollab` varchar(255) NOT NULL,
  `IdPoste` int NOT NULL,
  PRIMARY KEY (`IdCollab`),
  KEY `COLLABORATEUR_POSTE_FK` (`IdPoste`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `collaborateur`
--

INSERT INTO `collaborateur` (`IdCollab`, `NomCollab`, `PrenomCollab`, `EmailCollab`, `PassCollab`, `IdPoste`) VALUES
(1, 'TAVARD', 'julien', 'contact@grandangle.fr', 'red', 1),
(2, 'Lecourt', 'elodie', 'lecourt@grandangle.fr', 'red', 2),
(3, 'dubrac', 'thomas', 'dubrac@grandangle.fr', 'red', 3),
(4, 'norcov', 'charlene', 'norcov@grandangle.fr', 'red', 4),
(5, 'colto', 'simone', 'colto@grandangle.fr', 'red', 4),
(6, 'banilou', 'valerie', 'banilou@grandangle.fr', 'red', 4),
(7, 'carbole', 'juliette', 'carbole@grandangle.fr', 'red', 4),
(8, 'chalita', 'loic', 'chalita@grandangle.fr', 'red', 6),
(9, 'ponob', 'florian', 'ponob@grandangle.fr', 'red', 6),
(10, 'zershzy', 'jhon', 'zershzy@grandangle.fr', 'red', 6),
(43, 'admin', 'admin', 'admin@admin.admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contenu_multimedia`
--

DROP TABLE IF EXISTS `contenu_multimedia`;
CREATE TABLE IF NOT EXISTS `contenu_multimedia` (
  `IdContenuMultimedia` int NOT NULL AUTO_INCREMENT,
  `CheminContenuMultimedia` varchar(200) NOT NULL,
  `IdContenu` int NOT NULL,
  `IdLangue` int NOT NULL,
  PRIMARY KEY (`IdContenuMultimedia`),
  KEY `CONTENU_MULTIMEDIA_LANGUE_FK` (`IdLangue`),
  KEY `CONTENU_MULTIMEDIA_TYPE_CONTENU_FK` (`IdContenu`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `contenu_multimedia`
--

INSERT INTO `contenu_multimedia` (`IdContenuMultimedia`, `CheminContenuMultimedia`, `IdContenu`, `IdLangue`) VALUES
(1, '/Users/admin/Desktop/COURS/PT7-Grand angle', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `emplacement`
--

DROP TABLE IF EXISTS `emplacement`;
CREATE TABLE IF NOT EXISTS `emplacement` (
  `IdEmplacement` int NOT NULL AUTO_INCREMENT,
  `LibelleEmplacement` varchar(10) NOT NULL,
  PRIMARY KEY (`IdEmplacement`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `emplacement`
--

INSERT INTO `emplacement` (`IdEmplacement`, `LibelleEmplacement`) VALUES
(1, 'A26');

-- --------------------------------------------------------

--
-- Table structure for table `espace`
--

DROP TABLE IF EXISTS `espace`;
CREATE TABLE IF NOT EXISTS `espace` (
  `IdEspace` int NOT NULL AUTO_INCREMENT,
  `LibelleEspace` varchar(50) NOT NULL,
  PRIMARY KEY (`IdEspace`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `espace`
--

INSERT INTO `espace` (`IdEspace`, `LibelleEspace`) VALUES
(1, 'Espace 1'),
(2, 'Espace 2'),
(3, 'Espace 3');

-- --------------------------------------------------------

--
-- Table structure for table `exposition`
--

DROP TABLE IF EXISTS `exposition`;
CREATE TABLE IF NOT EXISTS `exposition` (
  `IdExpo` int NOT NULL AUTO_INCREMENT,
  `LibelleExpo` varchar(100) NOT NULL,
  `ImageExpo` text,
  `PlanExpo` text,
  `DateDebutExpo` date NOT NULL,
  `DateFinExpo` date NOT NULL,
  `DescriptionExpo` longtext NOT NULL,
  `NombreOeuvresExpo` int DEFAULT NULL,
  `NombreVisiteursExpo` int DEFAULT NULL,
  `IdStatutExpo` int NOT NULL,
  `IdThemeExpo` int NOT NULL,
  `IdPdf` int DEFAULT NULL,
  PRIMARY KEY (`IdExpo`),
  KEY `EXPOSITION_STATUT_EXPO_FK` (`IdStatutExpo`),
  KEY `EXPOSITION_THEME_EXPO` (`IdThemeExpo`),
  KEY `EXPOSITION_PDF_FK` (`IdPdf`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `exposition`
--

INSERT INTO `exposition` (`IdExpo`, `LibelleExpo`, `ImageExpo`, `PlanExpo`, `DateDebutExpo`, `DateFinExpo`, `DescriptionExpo`, `NombreOeuvresExpo`, `NombreVisiteursExpo`, `IdStatutExpo`, `IdThemeExpo`, `IdPdf`) VALUES
(3, 'Première espace', './assets/img/expos/front/espace.jpg', './assets/img/expos/plan/espace.jpg', '2024-02-28', '2024-03-06', 'Bienvenue à l\'exposition \"Au-delà des Étoiles : Exploration de l\'Infini\" ! Plongez dans un voyage artistique captivant qui explore l\'univers mystérieux de l\'espace à travers une collection éclectique d\'œuvres contemporaines et classiques. En parcourant les galeries, vous serez transporté au-delà des frontières de notre planète, découvrant des paysages extraterrestres, des constellations scintillantes et des visions futuristes de l\'univers.\r\n\r\nLes visiteurs seront émerveillés par une variété de médiums, allant de la peinture à l\'huile à la sculpture en passant par la photographie numérique, chacun capturant l\'essence de la cosmos d\'une manière unique et stimulante. Des artistes établis et émergents du monde entier ont contribué à cette exposition, offrant une diversité d\'interprétations sur le thème de l\'espace.\r\n\r\nPlongez dans les abysses infinis à travers des œuvres qui explorent non seulement la beauté visuelle de l\'espace, mais aussi les concepts philosophiques et scientifiques qui l\'entourent. Des installations interactives invitent les visiteurs à s\'immerger pleinement dans cet univers extraordinaire, stimulant à la fois l\'imagination et la réflexion.\r\n\r\nQue vous soyez passionné par l\'astronomie, l\'art ou simplement en quête d\'une expérience visuelle inspirante, \"Au-delà des Étoiles : Exploration de l\'Infini\" promet une aventure inoubliable à travers les galaxies lointaines et les confins de l\'univers. Ne manquez pas cette opportunité de découvrir la magie et la grandeur de l\'espace à travers les yeux des artistes contemporains les plus talentueux de notre époque.\r\n\r\n\r\n\r\n\r\n\r\n', NULL, NULL, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image_oeuvre`
--

DROP TABLE IF EXISTS `image_oeuvre`;
CREATE TABLE IF NOT EXISTS `image_oeuvre` (
  `IdImageOeuvre` int NOT NULL AUTO_INCREMENT,
  `CheminImage` varchar(200) NOT NULL,
  PRIMARY KEY (`IdImageOeuvre`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `image_oeuvre`
--

INSERT INTO `image_oeuvre` (`IdImageOeuvre`, `CheminImage`) VALUES
(1, 'Mona_Lisa,_by_Leonardo_da_Vinci,_from_C2RMF_retouched.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `langue`
--

DROP TABLE IF EXISTS `langue`;
CREATE TABLE IF NOT EXISTS `langue` (
  `IdLangue` int NOT NULL,
  `NomLangue` varchar(10) NOT NULL,
  PRIMARY KEY (`IdLangue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `langue`
--

INSERT INTO `langue` (`IdLangue`, `NomLangue`) VALUES
(1, 'Français'),
(2, 'Anglais'),
(3, 'Allemand'),
(4, 'Russe'),
(5, 'Chinois');

-- --------------------------------------------------------

--
-- Table structure for table `oeuvre`
--

DROP TABLE IF EXISTS `oeuvre`;
CREATE TABLE IF NOT EXISTS `oeuvre` (
  `IdOeuvre` int NOT NULL AUTO_INCREMENT,
  `LibelleOeuvre` varchar(280) NOT NULL,
  `DescriptionOeuvre` longtext,
  `AnneeCreationOeuvre` date NOT NULL,
  `QrcodeOeuvre` varchar(280) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `LargeurOeuvre` decimal(5,2) DEFAULT NULL,
  `LongueurOeuvre` decimal(5,2) DEFAULT NULL,
  `ProfondeurOeuvre` decimal(5,2) DEFAULT NULL,
  `PoidsOeuvre` decimal(5,2) DEFAULT NULL,
  `IdImageOeuvre` int DEFAULT NULL,
  `IdTypeOeuvre` int NOT NULL,
  `IdExpo` int NOT NULL,
  `IdArtiste` int DEFAULT NULL,
  `IdStatutOeuvre` int NOT NULL,
  `IdContenuMultimedia` int DEFAULT NULL,
  `IdEspace` int NOT NULL,
  `IdEmplacement` int NOT NULL,
  PRIMARY KEY (`IdOeuvre`),
  KEY `OEUVRE_IMAGE_OEUVRE_FK` (`IdImageOeuvre`),
  KEY `OEUVRE_TYPE_OEUVRE_FK` (`IdTypeOeuvre`),
  KEY `OEUVRE_EXPOSITION_FK` (`IdExpo`),
  KEY `OEUVRE_ARTISTE_FK` (`IdArtiste`),
  KEY `OEUVRE_STATUT_OEUVRE_FK` (`IdStatutOeuvre`),
  KEY `OEUVRE_CONTENU_MULTIMEDIA_FK` (`IdContenuMultimedia`),
  KEY `OEUVRE_ESPACE_FK` (`IdEspace`),
  KEY `OEUVRE_EMPLACEMENT_FK` (`IdEmplacement`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `oeuvre`
--

INSERT INTO `oeuvre` (`IdOeuvre`, `LibelleOeuvre`, `DescriptionOeuvre`, `AnneeCreationOeuvre`, `QrcodeOeuvre`, `LargeurOeuvre`, `LongueurOeuvre`, `ProfondeurOeuvre`, `PoidsOeuvre`, `IdImageOeuvre`, `IdTypeOeuvre`, `IdExpo`, `IdArtiste`, `IdStatutOeuvre`, `IdContenuMultimedia`, `IdEspace`, `IdEmplacement`) VALUES
(4, 'cosmos infinitus', 'Dans cette peinture intitulée \"Cosmos Infinitus\", l\'artiste nous transporte au cœur de l\'espace intersidéral avec une vision époustouflante. Sur une toile vaste et sombre, des éclats d\'étoiles chatoyantes dansent comme des diamants dans la nuit éternelle. Au premier plan, une nébuleuse tourbillonne avec des nuances éthérées de pourpre, de turquoise et d\'émeraude, créant un spectacle hypnotique et mystique.\r\n\r\nDes galaxies lointaines s\'étirent dans l\'infini, leurs bras spirales étincelants comme des rubans de lumière. Des planètes aux couleurs vives flottent comme des joyaux solitaires dans l\'immensité de l\'espace, chacune racontant son propre récit cosmique. Des comètes filent à travers le ciel, laissant derrière elles une traînée de lumière étincelante, tandis que des astéroïdes semblent danser dans une danse céleste éternelle.\r\n\r\nAu centre de la composition, une étoile massive brille d\'une lueur éblouissante, illuminant son environnement avec une énergie ardente. Autour d\'elle, des nuages de gaz et de poussière semblent s\'animer, tourbillonnant et se formant en de nouvelles étoiles et systèmes solaires. C\'est un tableau qui capture à la fois la majesté et la fragilité de l\'univers, nous rappelant notre humble place dans ce vaste cosmos.\r\n\r\n\r\n\r\n', '2024-02-14', NULL, 1.50, 2.50, 0.50, 4.00, NULL, 1, 3, 1, 1, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pdf`
--

DROP TABLE IF EXISTS `pdf`;
CREATE TABLE IF NOT EXISTS `pdf` (
  `IdPdf` int NOT NULL AUTO_INCREMENT,
  `LibellePdf` varchar(100) NOT NULL,
  `CheminFichierPdf` varchar(255) NOT NULL,
  PRIMARY KEY (`IdPdf`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `pdf`
--

INSERT INTO `pdf` (`IdPdf`, `LibellePdf`, `CheminFichierPdf`) VALUES
(1, 'NomExposition', '/Users/admin/Desktop/COURS/PT7-Grand angle.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `poste`
--

DROP TABLE IF EXISTS `poste`;
CREATE TABLE IF NOT EXISTS `poste` (
  `IdPoste` int NOT NULL AUTO_INCREMENT,
  `LibellePoste` varchar(100) NOT NULL,
  PRIMARY KEY (`IdPoste`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `poste`
--

INSERT INTO `poste` (`IdPoste`, `LibellePoste`) VALUES
(1, 'Directeur'),
(2, 'Responsable Communication'),
(3, 'Responsable Technique'),
(4, 'Assistante'),
(5, 'Technicien'),
(6, 'Chargé de Communication'),
(7, 'Traducteur');

-- --------------------------------------------------------

--
-- Table structure for table `statut_expo`
--

DROP TABLE IF EXISTS `statut_expo`;
CREATE TABLE IF NOT EXISTS `statut_expo` (
  `IdStatutExpo` int NOT NULL AUTO_INCREMENT,
  `LibelleStatutExpo` varchar(100) NOT NULL,
  PRIMARY KEY (`IdStatutExpo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `statut_expo`
--

INSERT INTO `statut_expo` (`IdStatutExpo`, `LibelleStatutExpo`) VALUES
(1, 'En attente'),
(2, 'En cours'),
(3, 'Terminée'),
(4, 'Annulée'),
(5, 'A planifier');

-- --------------------------------------------------------

--
-- Table structure for table `statut_oeuvre`
--

DROP TABLE IF EXISTS `statut_oeuvre`;
CREATE TABLE IF NOT EXISTS `statut_oeuvre` (
  `IdStatutOeuvre` int NOT NULL,
  `LibelleStatutOeuvre` varchar(50) NOT NULL,
  PRIMARY KEY (`IdStatutOeuvre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `statut_oeuvre`
--

INSERT INTO `statut_oeuvre` (`IdStatutOeuvre`, `LibelleStatutOeuvre`) VALUES
(1, 'En attente de livraison'),
(2, 'Livrée'),
(3, 'Placée'),
(4, 'En préparation de départ'),
(5, 'Renvoyée');

-- --------------------------------------------------------

--
-- Table structure for table `theme_expo`
--

DROP TABLE IF EXISTS `theme_expo`;
CREATE TABLE IF NOT EXISTS `theme_expo` (
  `IdThemeExpo` int NOT NULL,
  `LibelleThemeExpo` varchar(50) NOT NULL,
  PRIMARY KEY (`IdThemeExpo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `theme_expo`
--

INSERT INTO `theme_expo` (`IdThemeExpo`, `LibelleThemeExpo`) VALUES
(1, 'Le monde'),
(2, 'La musique'),
(3, 'Les cultures'),
(4, 'Le sport');

-- --------------------------------------------------------

--
-- Table structure for table `traductions`
--

DROP TABLE IF EXISTS `traductions`;
CREATE TABLE IF NOT EXISTS `traductions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_source` int DEFAULT NULL,
  `type_source` enum('oeuvre','artiste','exposition') DEFAULT NULL,
  `langue_source` varchar(50) DEFAULT NULL,
  `description_source` text,
  `langue_destination` varchar(50) DEFAULT NULL,
  `description_traduite` text,
  PRIMARY KEY (`id`),
  KEY `id_source` (`id_source`,`type_source`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `traductions`
--

INSERT INTO `traductions` (`id`, `id_source`, `type_source`, `langue_source`, `description_source`, `langue_destination`, `description_traduite`) VALUES
(1, 3, 'oeuvre', 'fr', 'Bienvenue à l\'exposition \"Au-delà des Étoiles : Exploration de l\'Infini\" ! Plongez dans un voyage artistique captivant qui explore l\'univers mystérieux de l\'espace à travers une collection éclectique d\'œuvres contemporaines et classiques. En parcourant les galeries, vous serez transporté au-delà des frontières de notre planète, découvrant des paysages extraterrestres, des constellations scintillantes et des visions futuristes de l\'univers.\r\n\r\nLes visiteurs seront émerveillés par une variété de médiums, allant de la peinture à l\'huile à la sculpture en passant par la photographie numérique, chacun capturant l\'essence de la cosmos d\'une manière unique et stimulante. Des artistes établis et émergents du monde entier ont contribué à cette exposition, offrant une diversité d\'interprétations sur le thème de l\'espace.\r\n\r\nPlongez dans les abysses infinis à travers des œuvres qui explorent non seulement la beauté visuelle de l\'espace, mais aussi les concepts philosophiques et scientifiques qui l\'entourent. Des installations interactives invitent les visiteurs à s\'immerger pleinement dans cet univers extraordinaire, stimulant à la fois l\'imagination et la réflexion.\r\n\r\nQue vous soyez passionné par l\'astronomie, l\'art ou simplement en quête d\'une expérience visuelle inspirante, \"Au-delà des Étoiles : Exploration de l\'Infini\" promet une aventure inoubliable à travers les galaxies lointaines et les confins de l\'univers. Ne manquez pas cette opportunité de découvrir la magie et la grandeur de l\'espace à travers les yeux des artistes contemporains les plus talentueux de notre époque.\r\n', 'allemand', 'Willkommen zur Ausstellung „Beyond the Stars: Exploring the Infinite“! Tauchen Sie ein in eine fesselnde künstlerische Reise, die das geheimnisvolle Universum des Weltraums anhand einer vielseitigen Sammlung zeitgenössischer und klassischer Werke erkundet. Während Sie durch die Galerien schlendern, werden Sie über die Grenzen unseres Planeten hinausgetragen und entdecken fremde Landschaften, schimmernde Sternbilder und futuristische Visionen des Universums.\r\n\r\nBesucher werden eine Vielzahl von Medien bestaunen, von Ölgemälden über Skulpturen bis hin zu digitaler Fotografie, von denen jedes die Essenz des Kosmos auf einzigartige und zum Nachdenken anregende Weise einfängt. Zu dieser Ausstellung trugen etablierte und aufstrebende Künstler aus der ganzen Welt bei und boten vielfältige Interpretationen zum Thema Raum.\r\n\r\nTauchen Sie ein in die unendlichen Abgründe durch Werke, die nicht nur die visuelle Schönheit des Raums erforschen, sondern auch die ihn umgebenden philosophischen und wissenschaftlichen Konzepte. Interaktive Installationen laden die Besucher ein, vollständig in dieses außergewöhnliche Universum einzutauchen und regen sowohl die Fantasie als auch das Nachdenken an.\r\n\r\nEgal, ob Sie sich für Astronomie oder Kunst begeistern oder einfach nur auf der Suche nach einem inspirierenden visuellen Erlebnis sind: „Beyond the Stars: Exploring the Infinite“ verspricht ein unvergessliches Abenteuer durch ferne Galaxien und die Weiten des Universums. Verpassen Sie nicht diese Gelegenheit, die Magie und Erhabenheit des Weltraums durch die Augen der talentiertesten zeitgenössischen Künstler unserer Zeit zu entdecken.'),
(2, 3, 'exposition', 'fr', 'Bienvenue à l\'exposition \"Au-delà des Étoiles : Exploration de l\'Infini\" ! Plongez dans un voyage artistique captivant qui explore l\'univers mystérieux de l\'espace à travers une collection éclectique d\'œuvres contemporaines et classiques. En parcourant les galeries, vous serez transporté au-delà des frontières de notre planète, découvrant des paysages extraterrestres, des constellations scintillantes et des visions futuristes de l\'univers.\r\n\r\nLes visiteurs seront émerveillés par une variété de médiums, allant de la peinture à l\'huile à la sculpture en passant par la photographie numérique, chacun capturant l\'essence de la cosmos d\'une manière unique et stimulante. Des artistes établis et émergents du monde entier ont contribué à cette exposition, offrant une diversité d\'interprétations sur le thème de l\'espace.\r\n\r\nPlongez dans les abysses infinis à travers des œuvres qui explorent non seulement la beauté visuelle de l\'espace, mais aussi les concepts philosophiques et scientifiques qui l\'entourent. Des installations interactives invitent les visiteurs à s\'immerger pleinement dans cet univers extraordinaire, stimulant à la fois l\'imagination et la réflexion.\r\n\r\nQue vous soyez passionné par l\'astronomie, l\'art ou simplement en quête d\'une expérience visuelle inspirante, \"Au-delà des Étoiles : Exploration de l\'Infini\" promet une aventure inoubliable à travers les galaxies lointaines et les confins de l\'univers. Ne manquez pas cette opportunité de découvrir la magie et la grandeur de l\'espace à travers les yeux des artistes contemporains les plus talentueux de notre époque.\r\n', 'allemand', 'Willkommen zur Ausstellung „Beyond the Stars: Exploring the Infinite“! Tauchen Sie ein in eine fesselnde künstlerische Reise, die das geheimnisvolle Universum des Weltraums anhand einer vielseitigen Sammlung zeitgenössischer und klassischer Werke erkundet. Während Sie durch die Galerien schlendern, werden Sie über die Grenzen unseres Planeten hinausgetragen und entdecken fremde Landschaften, schimmernde Sternbilder und futuristische Visionen des Universums.\r\n\r\nBesucher werden eine Vielzahl von Medien bestaunen, von Ölgemälden über Skulpturen bis hin zu digitaler Fotografie, von denen jedes die Essenz des Kosmos auf einzigartige und zum Nachdenken anregende Weise einfängt. Zu dieser Ausstellung trugen etablierte und aufstrebende Künstler aus der ganzen Welt bei und boten vielfältige Interpretationen zum Thema Raum.\r\n\r\nTauchen Sie ein in die unendlichen Abgründe durch Werke, die nicht nur die visuelle Schönheit des Raums erforschen, sondern auch die ihn umgebenden philosophischen und wissenschaftlichen Konzepte. Interaktive Installationen laden die Besucher ein, vollständig in dieses außergewöhnliche Universum einzutauchen und regen sowohl die Fantasie als auch das Nachdenken an.\r\n\r\nEgal, ob Sie sich für Astronomie oder Kunst begeistern oder einfach nur auf der Suche nach einem inspirierenden visuellen Erlebnis sind: „Beyond the Stars: Exploring the Infinite“ verspricht ein unvergessliches Abenteuer durch ferne Galaxien und die Weiten des Universums. Verpassen Sie nicht diese Gelegenheit, die Magie und Erhabenheit des Weltraums durch die Augen der talentiertesten zeitgenössischen Künstler unserer Zeit zu entdecken.'),
(3, 1, 'exposition', 'fr', NULL, 'allemand', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_contenu`
--

DROP TABLE IF EXISTS `type_contenu`;
CREATE TABLE IF NOT EXISTS `type_contenu` (
  `IdContenu` int NOT NULL,
  `LibelleContenu` varchar(20) NOT NULL,
  PRIMARY KEY (`IdContenu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `type_contenu`
--

INSERT INTO `type_contenu` (`IdContenu`, `LibelleContenu`) VALUES
(1, 'Audio'),
(2, 'Vidéo'),
(3, 'Papier');

-- --------------------------------------------------------

--
-- Table structure for table `type_oeuvre`
--

DROP TABLE IF EXISTS `type_oeuvre`;
CREATE TABLE IF NOT EXISTS `type_oeuvre` (
  `IdTypeOeuvre` int NOT NULL AUTO_INCREMENT,
  `LibelleTypeOeuvre` varchar(50) NOT NULL,
  PRIMARY KEY (`IdTypeOeuvre`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `type_oeuvre`
--

INSERT INTO `type_oeuvre` (`IdTypeOeuvre`, `LibelleTypeOeuvre`) VALUES
(1, 'Tableau'),
(2, 'Sculpture'),
(3, 'Maquette');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collaborateur`
--
ALTER TABLE `collaborateur`
  ADD CONSTRAINT `COLLABORATEUR_POSTE_FK` FOREIGN KEY (`IdPoste`) REFERENCES `poste` (`IdPoste`);

--
-- Constraints for table `contenu_multimedia`
--
ALTER TABLE `contenu_multimedia`
  ADD CONSTRAINT `CONTENU_MULTIMEDIA_LANGUE_FK` FOREIGN KEY (`IdLangue`) REFERENCES `langue` (`IdLangue`),
  ADD CONSTRAINT `CONTENU_MULTIMEDIA_TYPE_CONTENU_FK` FOREIGN KEY (`IdContenu`) REFERENCES `type_contenu` (`IdContenu`);

--
-- Constraints for table `exposition`
--
ALTER TABLE `exposition`
  ADD CONSTRAINT `EXPOSITION_PDF_FK` FOREIGN KEY (`IdPdf`) REFERENCES `pdf` (`IdPdf`),
  ADD CONSTRAINT `EXPOSITION_STATUT_EXPO_FK` FOREIGN KEY (`IdStatutExpo`) REFERENCES `statut_expo` (`IdStatutExpo`),
  ADD CONSTRAINT `EXPOSITION_THEME_EXPO` FOREIGN KEY (`IdThemeExpo`) REFERENCES `theme_expo` (`IdThemeExpo`);

--
-- Constraints for table `oeuvre`
--
ALTER TABLE `oeuvre`
  ADD CONSTRAINT `OEUVRE_ARTISTE_FK` FOREIGN KEY (`IdArtiste`) REFERENCES `artiste` (`IdArtiste`),
  ADD CONSTRAINT `OEUVRE_CONTENU_MULTIMEDIA_FK` FOREIGN KEY (`IdContenuMultimedia`) REFERENCES `contenu_multimedia` (`IdContenuMultimedia`),
  ADD CONSTRAINT `OEUVRE_EMPLACEMENT_FK` FOREIGN KEY (`IdEmplacement`) REFERENCES `emplacement` (`IdEmplacement`),
  ADD CONSTRAINT `OEUVRE_ESPACE_FK` FOREIGN KEY (`IdEspace`) REFERENCES `espace` (`IdEspace`),
  ADD CONSTRAINT `OEUVRE_EXPOSITION_FK` FOREIGN KEY (`IdExpo`) REFERENCES `exposition` (`IdExpo`),
  ADD CONSTRAINT `OEUVRE_IMAGE_OEUVRE_FK` FOREIGN KEY (`IdImageOeuvre`) REFERENCES `image_oeuvre` (`IdImageOeuvre`),
  ADD CONSTRAINT `OEUVRE_STATUT_OEUVRE_FK` FOREIGN KEY (`IdStatutOeuvre`) REFERENCES `statut_oeuvre` (`IdStatutOeuvre`),
  ADD CONSTRAINT `OEUVRE_TYPE_OEUVRE_FK` FOREIGN KEY (`IdTypeOeuvre`) REFERENCES `type_oeuvre` (`IdTypeOeuvre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
