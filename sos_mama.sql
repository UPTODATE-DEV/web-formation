-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 09 fév. 2021 à 19:55
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sos_mama`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL,
  `USERNAME` varchar(30) DEFAULT NULL,
  `PHOTO` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `banner`
--

CREATE TABLE `banner` (
  `ID_BANNER` int(11) NOT NULL,
  `TITRE` varchar(30) DEFAULT NULL,
  `TEXT` varchar(200) DEFAULT NULL,
  `PHOTO` varchar(30) DEFAULT NULL,
  `DATE_POSTE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `banner1`
--

CREATE TABLE `banner1` (
  `ID_BANNER1` int(11) NOT NULL,
  `TITRE` varchar(30) DEFAULT NULL,
  `TEXT` varchar(200) DEFAULT NULL,
  `PHOTO` varchar(30) DEFAULT NULL,
  `DATE_POSTE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `banner2`
--

CREATE TABLE `banner2` (
  `ID_BANNER2` int(11) NOT NULL,
  `TITRE` varchar(30) DEFAULT NULL,
  `TEXTE` varchar(200) DEFAULT NULL,
  `NOMBRE` int(11) DEFAULT NULL,
  `NOM_BTN` varchar(20) DEFAULT NULL,
  `DATE_POSTE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `banner3`
--

CREATE TABLE `banner3` (
  `ID_BANNER3` int(11) NOT NULL,
  `TITRE` varchar(30) DEFAULT NULL,
  `TEXTE` varchar(200) DEFAULT NULL,
  `PHOTO` varchar(30) DEFAULT NULL,
  `ICON` varchar(20) DEFAULT NULL,
  `DATE_POSTE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titre` varchar(30) DEFAULT NULL,
  `contenu` text DEFAULT NULL,
  `date_poste` datetime DEFAULT NULL,
  `photo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `ID_IMAGE` int(11) NOT NULL,
  `PHOTO` varchar(20) DEFAULT NULL,
  `DATE_POSTE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `ID_MESSAGE` int(11) NOT NULL,
  `NOM` varchar(30) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `SUJET` varchar(100) DEFAULT NULL,
  `CONTENU_MESSAGE` varchar(300) DEFAULT NULL,
  `DATE_ENVOI` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `titre` varchar(20) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `photo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Index pour la table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ID_BANNER`);

--
-- Index pour la table `banner1`
--
ALTER TABLE `banner1`
  ADD PRIMARY KEY (`ID_BANNER1`);

--
-- Index pour la table `banner2`
--
ALTER TABLE `banner2`
  ADD PRIMARY KEY (`ID_BANNER2`);

--
-- Index pour la table `banner3`
--
ALTER TABLE `banner3`
  ADD PRIMARY KEY (`ID_BANNER3`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`ID_IMAGE`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID_MESSAGE`);

--
-- Index pour la table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `banner`
--
ALTER TABLE `banner`
  MODIFY `ID_BANNER` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `banner1`
--
ALTER TABLE `banner1`
  MODIFY `ID_BANNER1` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `banner2`
--
ALTER TABLE `banner2`
  MODIFY `ID_BANNER2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `banner3`
--
ALTER TABLE `banner3`
  MODIFY `ID_BANNER3` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `ID_IMAGE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `ID_MESSAGE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
