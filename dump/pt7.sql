-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 04, 2024 at 09:42 AM
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
-- Database: `pt7`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonne`
--

DROP TABLE IF EXISTS `abonne`;
CREATE TABLE IF NOT EXISTS `abonne` (
  `idAbonne` int NOT NULL,
  `mailAbonne` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`idAbonne`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artiste`
--

DROP TABLE IF EXISTS `artiste`;
CREATE TABLE IF NOT EXISTS `artiste` (
  `idArtiste` int NOT NULL,
  `nomArtiste` varchar(50) DEFAULT NULL,
  `prenomArtiste` varchar(50) DEFAULT NULL,
  `bioArtiste` varchar(500) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `dateDeces` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idArtiste`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `collaborateur`
--

DROP TABLE IF EXISTS `collaborateur`;
CREATE TABLE IF NOT EXISTS `collaborateur` (
  `idCollab` int NOT NULL,
  `nomCollab` varchar(50) DEFAULT NULL,
  `prenomCollab` varchar(50) DEFAULT NULL,
  `adresseCollab` varchar(300) DEFAULT NULL,
  `cpCollab` int DEFAULT NULL,
  `villeCollab` varchar(50) DEFAULT NULL,
  `telCollab` int DEFAULT NULL,
  `mailCollab` varchar(250) DEFAULT NULL,
  `usernameCollab` varchar(50) DEFAULT NULL,
  `mdpCollab` varchar(255) DEFAULT NULL,
  `idPoste` int NOT NULL,
  PRIMARY KEY (`idCollab`),
  KEY `idPoste` (`idPoste`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contenu_multimedia`
--

DROP TABLE IF EXISTS `contenu_multimedia`;
CREATE TABLE IF NOT EXISTS `contenu_multimedia` (
  `idContenu` int NOT NULL,
  `cheminContenu` varchar(300) DEFAULT NULL,
  `idOeuvre` int NOT NULL,
  `idTypeContenu` int NOT NULL,
  PRIMARY KEY (`idContenu`),
  KEY `idOeuvre` (`idOeuvre`),
  KEY `idTypeContenu` (`idTypeContenu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `espace`
--

DROP TABLE IF EXISTS `espace`;
CREATE TABLE IF NOT EXISTS `espace` (
  `idEspace` int NOT NULL,
  `libelleEspace` int DEFAULT NULL,
  PRIMARY KEY (`idEspace`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exposition`
--

DROP TABLE IF EXISTS `exposition`;
CREATE TABLE IF NOT EXISTS `exposition` (
  `idExpo` int NOT NULL,
  `libelleExpo` varchar(100) DEFAULT NULL,
  `dateDebut` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `descriptionExpo` varchar(500) DEFAULT NULL,
  `nombreOeuvres` int DEFAULT NULL,
  `nombreVisiteurs` int DEFAULT NULL,
  `idCollab` int NOT NULL,
  `idStatutExpo` int NOT NULL,
  `idThemeExpo` int NOT NULL,
  PRIMARY KEY (`idExpo`),
  KEY `idCollab` (`idCollab`),
  KEY `idStatutExpo` (`idStatutExpo`),
  KEY `idThemeExpo` (`idThemeExpo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_oeuvre`
--

DROP TABLE IF EXISTS `image_oeuvre`;
CREATE TABLE IF NOT EXISTS `image_oeuvre` (
  `idImage` int NOT NULL,
  `cheminImage` varchar(300) DEFAULT NULL,
  `idOeuvre` int NOT NULL,
  PRIMARY KEY (`idImage`),
  KEY `idOeuvre` (`idOeuvre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `langue`
--

DROP TABLE IF EXISTS `langue`;
CREATE TABLE IF NOT EXISTS `langue` (
  `idLangue` varchar(2) NOT NULL,
  `nomLangue` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idLangue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oeuvre`
--

DROP TABLE IF EXISTS `oeuvre`;
CREATE TABLE IF NOT EXISTS `oeuvre` (
  `idOeuvre` int NOT NULL,
  `libelleOeuvre` varchar(300) DEFAULT NULL,
  `anneeCrea` date DEFAULT NULL,
  `qrCodeOeuvre` varchar(50) DEFAULT NULL,
  `largeurOeuvre` decimal(5,2) DEFAULT NULL,
  `longueurOeuvre` decimal(5,2) DEFAULT NULL,
  `profondeurOeuvre` decimal(5,2) DEFAULT NULL,
  `idArtiste` int NOT NULL,
  `idExpo` int NOT NULL,
  `idEspace` int NOT NULL,
  `idStatutOeuvre` int NOT NULL,
  `idTypeOeuvre` int NOT NULL,
  PRIMARY KEY (`idOeuvre`),
  KEY `idArtiste` (`idArtiste`),
  KEY `idExpo` (`idExpo`),
  KEY `idEspace` (`idEspace`),
  KEY `idStatutOeuvre` (`idStatutOeuvre`),
  KEY `idTypeOeuvre` (`idTypeOeuvre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pdf`
--

DROP TABLE IF EXISTS `pdf`;
CREATE TABLE IF NOT EXISTS `pdf` (
  `idPdf` int NOT NULL,
  `libellePdf` varchar(50) DEFAULT NULL,
  `cheminFichier` varchar(255) DEFAULT NULL,
  `idExpo` int NOT NULL,
  PRIMARY KEY (`idPdf`),
  KEY `idExpo` (`idExpo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poste`
--

DROP TABLE IF EXISTS `poste`;
CREATE TABLE IF NOT EXISTS `poste` (
  `idPoste` int NOT NULL,
  `libellePoste` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idPoste`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statut_expo`
--

DROP TABLE IF EXISTS `statut_expo`;
CREATE TABLE IF NOT EXISTS `statut_expo` (
  `idStatutExpo` int NOT NULL,
  `libelleStatutExpo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idStatutExpo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statut_oeuvre`
--

DROP TABLE IF EXISTS `statut_oeuvre`;
CREATE TABLE IF NOT EXISTS `statut_oeuvre` (
  `idStatutOeuvre` int NOT NULL,
  `libelleStatutOeuvre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idStatutOeuvre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theme_expo`
--

DROP TABLE IF EXISTS `theme_expo`;
CREATE TABLE IF NOT EXISTS `theme_expo` (
  `idThemeExpo` int NOT NULL,
  `libelleThemeExpo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idThemeExpo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `traduire2`
--

DROP TABLE IF EXISTS `traduire2`;
CREATE TABLE IF NOT EXISTS `traduire2` (
  `idArtiste` int NOT NULL,
  `idLangue` varchar(2) NOT NULL,
  `bioTraduite` text,
  PRIMARY KEY (`idArtiste`,`idLangue`),
  KEY `idLangue` (`idLangue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `traduirecontenu`
--

DROP TABLE IF EXISTS `traduirecontenu`;
CREATE TABLE IF NOT EXISTS `traduirecontenu` (
  `idContenu` int NOT NULL,
  `idLangue` varchar(2) NOT NULL,
  `contenuTraduit` text,
  PRIMARY KEY (`idContenu`,`idLangue`),
  KEY `idLangue` (`idLangue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_contenu`
--

DROP TABLE IF EXISTS `type_contenu`;
CREATE TABLE IF NOT EXISTS `type_contenu` (
  `idTypeContenu` int NOT NULL,
  `libelleContenu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idTypeContenu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_oeuvre`
--

DROP TABLE IF EXISTS `type_oeuvre`;
CREATE TABLE IF NOT EXISTS `type_oeuvre` (
  `idTypeOeuvre` int NOT NULL,
  `libelleTypeOeuvre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idTypeOeuvre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
