-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : sql24
-- Généré le :  Dim 07 avr. 2019 à 16:31
-- Version du serveur :  10.1.37-MariaDB-1~stretch
-- Version de PHP :  7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `shb45121`
--

-- --------------------------------------------------------

--
-- Structure de la table `Clip`
--

CREATE TABLE `Clip` (
  `Id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Artist` text NOT NULL,
  `Director` text NOT NULL,
  `Year` int(11) DEFAULT NULL,
  `Link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Clip`
--

INSERT INTO `Clip` (`Id`, `Title`, `Artist`, `Director`, `Year`, `Link`) VALUES
(1, 'Smack my bitch up', 'The Prodigy', 'Jonas Åkerlund', 1997, '<div style=\"padding:75% 0 0 0;position:relative;\"><iframe src=\"https://player.vimeo.com/video/19602978?autoplay=1&loop=1&title=0&byline=0&portrait=0\" style=\"position:absolute;top:0;left:0;width:100%;height:60%;\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><script src=\"https://player.vimeo.com/api/player.js\"></script>\r\n'),
(2, 'Out of control', 'The Chemical Brothers', 'WIZ Andrew John Whiston', 1999, '<div style=\"padding:56.25% 0 0 0;position:relative;\"><iframe src=\"https://player.vimeo.com/video/41237706?autoplay=1&loop=1&color=ff0179&title=0&byline=0&portrait=0\" style=\"position:absolute;top:0;left:0;width:100%;height:70%;\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><script src=\"https://player.vimeo.com/api/player.js\"></script></body>\r\n'),
(3, 'Papi Pacify', 'FKA Twigs', 'Tom Beard and FKA Twigs', 2016, '<div style=\"padding:56.25% 0 0 0;position:relative;\"><iframe src=\"https://player.vimeo.com/video/77137868?autoplay=1&loop=1&color=ff0179&title=0&byline=0&portrait=0\" style=\"position:absolute;top:0;left:0;width:100%;height:70%;\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><script src=\"https://player.vimeo.com/api/player.js\"></script>'),
(4, 'Bad Girls', 'M.I.A.', 'Romain Gavras', 2012, '<div style=\"padding:56.25% 0 0 0;position:relative;\"><iframe src=\"https://player.vimeo.com/video/36167539?autoplay=1&loop=1&color=ff9933\" style=\"position:absolute;top:0;left:0;width:100%;height:70%;\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><script src=\"https://player.vimeo.com/api/player.js\"></script>');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Clip`
--
ALTER TABLE `Clip`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Clip`
--
ALTER TABLE `Clip`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
