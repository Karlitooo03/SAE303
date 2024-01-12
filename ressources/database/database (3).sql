-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 12 jan. 2024 à 18:22
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `database`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherents`
--

CREATE TABLE `adherents` (
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `tel` int(10) NOT NULL,
  `charge` int(11) NOT NULL,
  `situation` varchar(255) NOT NULL,
  `datedenaissance` date DEFAULT NULL,
  `ville` varchar(30) NOT NULL,
  `codepostal` int(5) NOT NULL,
  `civilite` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `adherents`
--

INSERT INTO `adherents` (`nom`, `prenom`, `mdp`, `mail`, `adresse`, `tel`, `charge`, `situation`, `datedenaissance`, `ville`, `codepostal`, `civilite`) VALUES
('', '', '', '', '', 0, 0, '', '0000-00-00', '', 0, ''),
('nono', 'adriel', '$2y$10$mtz0nReYJq8FYg7jreaoquGy7HEIfB.0XZOQguugQiC', 'ad@no', 'efd1', 1616262626, 1, 'Divorcé.e', '0000-00-00', 'dc', 12, 'Monsieur'),
('admin', 'admin', '$2y$10$Mn.eAQAO86AyRwlVfYA8Yu49jNziz3OF8YeQJHQQ4q/mlAWwjBBoG', 'admin@admin.fr', '5 rue administrateur', 2147483647, 0, 'Célibataire', '2024-01-11', 'Melun', 77000, 'Monsieur'),
('dsc', 'ds', '$2y$10$/i5.Ynnr/321IpYCP6jc1OSArqdcYhfJcBUtlF9Iy5/', 'ds@ds', 'adresse', 10101, 0, 'Marié.e', '2008-12-04', 'ville', 12345, 'Madame'),
('dupont', 'sarah', '$2y$10$7dfhMMsnnW0PtpVwWrZuKOwqm2SzsijVGmZkg9rhG6c.u4MWfoC1.', 'dupont@dupont', '5 rue jean pierre', 2147483647, 1, 'Marié.e', '2024-01-11', 'lores', 20300, 'Madame'),
('azsx', 'zas', '$2y$10$QrZYrH0HEg1juv9aZeBoGOchrhlNOOLsbC2uisJFJgzIAgLaTNzaq', 'dx@uzxji', 'iygbhkb ', 9864451, 2, 'Marié.e', '2024-01-20', 'hjb', 6562, 'Madame'),
('v', 'rf', '$2y$10$YzIs3HViTW9ZkxxKzpt6Iu.fAPE.cwWuANuxBTFNrC5.dMzcCXtoC', 'dx@uzxy', 'tevgfc', 78141471, 0, 'Marié.e', '2024-01-14', 'h', 4, 'Madame'),
('n2', 'ji', '$2y$10$UlMHuJLcwkFTX0IJq7XcPOacG6eSNkmfKJzeEhFZYALQdg4QOD6Sm', 'julio@test', 'hjbkjkbjnkjnn', 2147483647, 0, 'Célibataire', '2024-02-04', 'h', 5, 'Monsieur'),
('lidia', 'lidia', '$2y$10$0dPCt7i9Di4LxPMRCPv87egj.fVr.OESoF67sYLWYAgQ.2L34fF3y', 'lidia@lidia.fr', '7 avenue victor legrand', 2147483647, 3, 'Marié.e', '2024-01-13', 'Semor', 60000, 'Madame'),
('madame', 'madame', 'madame', 'madame@madame', 'madame', 2147483647, 2, 'Pacsé.e', '2001-02-01', 'madame', 123156, 'Madame'),
('ukh', 'vhb', 'kolo', 'ouh@iuygb', 'kolo', 66451, 0, 'Pacsé.e', '1999-02-01', '', 0, ''),
('qsq', 'qssqqs', '$2y$10$sD1b3rddAJ.TISgM2osgvuMB0AWY3CE62PqLlW.oNXW/E3VHV4ozm', 'qsqs@hui', 'SXDSX', 1010101, 0, 'Marié.e', '2024-01-07', 'XSXS', 26, 'Madame'),
('frfr', 'frfr', 'lui', 'rfrf@gv', 'juilo', 1020304005, 2, 'Pacsé.e', '2008-02-01', 'loui', 6, 'Monsieur'),
('test1', 'test1', 'test1', 'test1@test1', 'ukb', 6415151, 0, 'Pacsé.e', '2003-01-01', '', 0, ''),
('qsx', 'zssx', 'de', 'test1@test1s', 'zsaq', 1010101010, 1, 'Célibataire', '2001-02-01', 'sxx', 1, 'Monsieur'),
('test2', 'test2', 'test2', 'test2@test2.com', '14 rue victor hugo', 101010101, 0, '', '2005-02-01', '', 0, ''),
('test3', 'test3', 'test3', 'test3@test3', 'jhqkbsx', 2147483647, 2, 'Divorcé.e', '1999-01-01', '', 0, ''),
('test4', 'test4', 'test4', 'test4@test4', 'adresse', 102030405, 4, 'Marié.e', '2006-02-01', 'ville', 12345, 'on'),
('dsknlkdx', 'lblbzlsk', '$2y$10$bnIvgg0wRK1Ll5KuMojuD.cLnhDR4V3Rt0LyD/D3P5Rgjff60.Eg.', 'test5@test10', '46 allé', 60, 1, 'Pacsé.e', '2024-01-18', 'stmard', 55523, 'Madame'),
('test5', 'test5', '$2y$10$e6QHjHoR59bZOMHCgiZWkuwdGbYSLQa1ii8JPiYgBr.', 'test5@test5', 'sc', 10202, 0, '', '2024-01-12', 'qsx', 126, 'Madame'),
('test', 'test', 'test', 'test@test', '', 0, 0, '', NULL, '', 0, ''),
('test', 'test', '$2y$10$18NFVyQvHCCWjvcob4AkVeDdsNavDUtnZNammJ75tS6IyMk9Nw0L.', 'test@test.fr', 'qsx26', 84848, 0, 'Célibataire', '2024-01-09', 'sqx', 516, 'Monsieur'),
('test', 'test', 'test', 'test@test1', 'ygzaygs', 2147483647, 1, 'Marié.e', '2005-02-01', '', 0, ''),
('fufu', 'ksks', '$2y$10$BwnkyPh3MWLa1EvRC5f1beleAvti2.AVsyrbXvQqlbReWoU1AG4LW', 'test@test9', '', 8, 2, 'Pacsé.e', '2024-01-09', 'blabla', 55555, 'Monsieur'),
('uh', 'hui', '$2y$10$XNZXdY.MJbHGBOnsz5OPCu5wHxHLAudT/4g5vs7TgNzXxlBBGMSQq', 'test@teste', 'nlnk', 53356566, 3, 'Pacsé.e', '0000-00-00', 'jnjn ', 1236, 'Madame'),
('uj', 'iu', '$2y$10$uSBFxfqwlvddxgcvmQwdne0arkimKrdx7fQfISNeU6xCrHxdxJEIi', 'test@testol', 'ygbh', 86451, 1, 'Marié.e', '2000-02-01', 'uvhb', 626, 'Madame'),
('kl', 'nkl', '$2y$10$2m5bNid/j2PhMfjZR7kV8ezmnUNcAk1CcInOMrrz5rX7Y6DbC1YEG', 'test@testyuj', 'utgvjgvj', 595145465, 2, 'Divorcé.e', '2024-02-07', 'jnjn ', 9465654, 'Madame'),
('ti', 'ti', 'ti', 'ti@ti', 'ti', 102695, 0, 'Célibataire', '2007-02-01', '', 0, ''),
('iubx', 'ihbcsd', 'ololo', 'tyu@oll', 'ololo', 125896, 0, 'Marié.e', '2004-02-01', '', 0, ''),
('uy', 'uy', 'uy', 'uy@uy', 'uy', 102030405, 0, 'Marié.e', '2008-02-01', '', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `avions`
--

CREATE TABLE `avions` (
  `idavion` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pilotes`
--

CREATE TABLE `pilotes` (
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mailpilote` varchar(255) NOT NULL,
  `diplome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pilotes`
--

INSERT INTO `pilotes` (`nom`, `prenom`, `mailpilote`, `diplome`) VALUES
('Polo', 'Marco', 'marco@polo.fr', 'diplome aviation');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `mail` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `idavion` varchar(255) NOT NULL,
  `activite` varchar(255) NOT NULL,
  `mailpilote` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`mail`, `date`, `idavion`, `activite`, `mailpilote`) VALUES
('dupont@dupont', '2024-01-18', '', 'autogire', 'marco@polo.fr'),
('test5@test5', '2024-01-02', '', 'formation', NULL),
('test@test', '2024-01-10', '', 'formation', NULL),
('test@test.fr', '2024-01-16', '', 'formation', NULL),
('test@test1', '2024-01-24', '', 'montage des ULM', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adherents`
--
ALTER TABLE `adherents`
  ADD PRIMARY KEY (`mail`);

--
-- Index pour la table `avions`
--
ALTER TABLE `avions`
  ADD PRIMARY KEY (`idavion`);

--
-- Index pour la table `pilotes`
--
ALTER TABLE `pilotes`
  ADD PRIMARY KEY (`mailpilote`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`mail`),
  ADD KEY `mailpilote` (`mailpilote`),
  ADD KEY `avion` (`idavion`),
  ADD KEY `idavion` (`idavion`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`mailpilote`) REFERENCES `pilotes` (`mailpilote`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
