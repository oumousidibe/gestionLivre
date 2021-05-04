-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 17 Novembre 2020 à 17:32
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gestion-livre`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande_j`
--

CREATE TABLE IF NOT EXISTS `commande_j` (
  `libelle` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `datec` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commande_j`
--

INSERT INTO `commande_j` (`libelle`, `nom`, `datec`) VALUES
('nettoie', 'omar', '2019-06-21'),
('le', 'omar', '2019-06-21'),
('bijoux', 'omar', '2019-06-21'),
('Une', 'omar', '2019-07-07'),
('reparation', 'omar', '2019-07-07'),
('pour', 'omar', '2019-07-07'),
('vous', 'omar', '2019-07-07'),
('contacter', 'omar', '2019-07-07'),
('la', 'omar', '2019-07-07'),
('secretaire', 'omar', '2019-07-07'),
('une', 'omar', '2019-07-08'),
('reparation', 'omar', '2019-07-08'),
('pour', 'omar', '2019-07-08'),
('vous', 'omar', '2019-07-08'),
('contacter', 'omar', '2019-07-08'),
('la', 'omar', '2019-07-08'),
('secretaire', 'omar', '2019-07-08'),
('nettoie', 'omar', '2019-06-21'),
('le', 'omar', '2019-06-21'),
('bijoux', 'omar', '2019-06-21'),
('Une', 'omar', '2019-07-07'),
('reparation', 'omar', '2019-07-07'),
('pour', 'omar', '2019-07-07'),
('vous', 'omar', '2019-07-07'),
('contacter', 'omar', '2019-07-07'),
('la', 'omar', '2019-07-07'),
('secretaire', 'omar', '2019-07-07'),
('une', 'omar', '2019-07-08'),
('reparation', 'omar', '2019-07-08'),
('pour', 'omar', '2019-07-08'),
('vous', 'omar', '2019-07-08'),
('contacter', 'omar', '2019-07-08'),
('la', 'omar', '2019-07-08'),
('secretaire', 'omar', '2019-07-08');

-- --------------------------------------------------------

--
-- Structure de la table `emprunteur`
--

CREATE TABLE IF NOT EXISTS `emprunteur` (
  `nom_emp` varchar(255) NOT NULL,
  `prenom_emp` varchar(255) NOT NULL,
  `tel_emp` varchar(255) NOT NULL,
  `adresse_emp` varchar(255) NOT NULL,
  `num_emp` varchar(255) NOT NULL,
  `mail_emp` varchar(255) NOT NULL,
  `date_creation` date NOT NULL,
  PRIMARY KEY (`num_emp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `emprunteur`
--

INSERT INTO `emprunteur` (`nom_emp`, `prenom_emp`, `tel_emp`, `adresse_emp`, `num_emp`, `mail_emp`, `date_creation`) VALUES
('Gueye', 'adja', '785296369', 'pout agglomeration', 'adja12', 'adjagueye@gmail.com', '2020-11-17'),
('Gueye', 'Assane', '778956365', 'Keur Gorgui', 'Assane15', 'Assanegueye@gmail.com', '2020-11-17'),
('Thiam', 'cheikh', '785266363', 'Medina rue 6', 'cheikh10', 'cheikhthiam@gmail.com', '2020-11-17'),
('Diop', 'marcelo', '785125658', 'Pikine', 'marcelo22', 'marcelodiop@gmail.com', '2020-11-17'),
('robert', 'nobel', '781522556', 'casamance', 'nobel31', 'nobel132@gmail.com', '2020-11-16'),
('Sidibe', 'Oumou', '784525659', 'Yoff', 'oumou19', 'oumousidibe@gmail.com', '2020-11-17'),
('sall', 'sawdatou', '7845699662', 'paris france', 'ssall1', 'sawdatousall@esp.sn', '2020-11-16'),
('thiam', 'omar', '78-451-52-56', 'ziguinchor rue 11', 'theboy99', 'omarthiam@esp.sn', '2020-11-03'),
('Diallo', 'thierno', '774515652', 'point E', 'thierno13', 'thiernodiallo@gmail.com', '2020-11-17'),
('Agamakou', 'wilfried', '789566362', 'sito aeroport', 'wilfried8', 'wilfried@gmail.com', '2020-11-17');

-- --------------------------------------------------------

--
-- Structure de la table `his`
--

CREATE TABLE IF NOT EXISTS `his` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `DateL` date NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Auteur` varchar(255) NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Date_p` date NOT NULL,
  `Statut` varchar(255) NOT NULL,
  `Emprunteur` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `his`
--

INSERT INTO `his` (`ID`, `DateL`, `Titre`, `Auteur`, `Description`, `Date_p`, `Statut`, `Emprunteur`) VALUES
(2, '2020-11-03', 'soundjata', 'sembene', 'aventure', '2003-02-26', 'neant', 'theboy99'),
(3, '2020-11-13', 'naruto', 'Masashi Kishimoto', 'shonen', '1999-09-10', 'pret', 'theboy99'),
(4, '2020-11-13', 'one Piece', 'Eiichiro Oda', 'shonen', '1997-07-22', 'disponible', 'neant'),
(5, '2020-11-16', 'lombard', 'leonard', 'humour', '1999-02-10', 'pret', 'nobel31'),
(6, '2020-11-16', 'twilight', 'stehanie M', 'Science fiction', '2008-02-11', 'disponible', 'neant'),
(7, '2020-11-17', 'Le Brave', 'jean Poutine', 'Aventure', '1998-02-02', 'pret', 'adja12'),
(8, '2020-11-17', 'Learn English', 'Harvard', 'Education', '2009-03-10', 'pret', 'oumou19'),
(9, '2020-11-17', 'Orfevre', 'Cartier', 'Apprentissage', '2010-03-12', 'pret', 'Assane15'),
(10, '2020-11-17', 'Infographe et vie', 'Jean Pierre', 'Decouverte', '2018-05-26', 'pret', 'cheikh10'),
(11, '2020-11-17', 'Monde du foot', 'Madrid', 'Sport', '2017-04-25', 'pret', 'marcelo22'),
(12, '2020-11-17', 'Commercialisation', 'Forbes', 'Business', '2009-02-14', 'pret', 'thierno13'),
(13, '2020-11-17', 'Hacking', 'Snowden', 'Informatique', '2016-03-26', 'pret', 'wilfried8');

-- --------------------------------------------------------

--
-- Structure de la table `hisbil`
--

CREATE TABLE IF NOT EXISTS `hisbil` (
  `datem` varchar(255) NOT NULL,
  `contenu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `hisbil`
--

INSERT INTO `hisbil` (`datem`, `contenu`) VALUES
('2019-05-26', 'Point 1 : Vente succes du jour'),
('2019-05-26', 'Point lambda : Coursier en retard plainte du client ...'),
('2019-05-28', 'Bil 1'),
('2019-05-26', 'Point 1 : Vente succes du jour'),
('2019-05-26', 'Point lambda : Coursier en retard plainte du client ...'),
('2019-05-28', 'Bil 1'),
('2019-07-11', 'cout des depenses estimés a 150000cfa avec une entree de 25000000cfa');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `datem` datetime NOT NULL,
  `mess` varchar(255) NOT NULL,
  `de` varchar(255) NOT NULL,
  `a` varchar(255) NOT NULL,
  `daate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`datem`, `mess`, `de`, `a`, `daate`) VALUES
('2019-07-07 05:00:18', 'veuillez me transmettre le bilan de la semaine', 'Directeur', 'Sous', '2019-07-07');

-- --------------------------------------------------------

--
-- Structure de la table `prets`
--

CREATE TABLE IF NOT EXISTS `prets` (
  `nomClient` varchar(255) NOT NULL,
  `pnomClient` varchar(255) NOT NULL,
  `prixbijou` varchar(255) NOT NULL,
  `modelebijou` varchar(255) NOT NULL,
  `poidsbijou` varchar(255) NOT NULL,
  `montantverse` varchar(255) NOT NULL,
  `dateP` date NOT NULL,
  UNIQUE KEY `nomc` (`nomClient`,`pnomClient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `prets`
--

INSERT INTO `prets` (`nomClient`, `pnomClient`, `prixbijou`, `modelebijou`, `poidsbijou`, `montantverse`, `dateP`) VALUES
('Diouck', 'Cisse', '150.000', 'chaine en Argent ', '15g', '100.000', '2019-07-11'),
('idrissa', 'thiam', '255.000', 'bagues de fiançailles en Or', '8g', '155.000', '2019-07-11'),
('sidibe', 'oumou', '100.000', 'creole', '10g', '50.000', '2019-06-26'),
('siidibe', 'oumou', '10', 'creole', '20', '2', '2019-06-26'),
('thiam', 'omar', '100.000', 'Creoles en Or', '10g', '50.000', '2019-06-26');

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL COMMENT 'Travail effectif ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `staff`
--

INSERT INTO `staff` (`id`, `login`, `password`, `designation`) VALUES
(4, 'admin', 'admin', 'Directeur'),
(5, 'omar', 'thiam', 'Employe'),
(6, 'Cissé.aminata', 'passer', 'Secretaire'),
(7, 'oumou', 'sidibe', 'SousDirecteur'),
(8, 'Thiam.Idrissa', 'thiam', 'Employe');

-- --------------------------------------------------------

--
-- Structure de la table `ventes_speciales`
--

CREATE TABLE IF NOT EXISTS `ventes_speciales` (
  `nomClient` varchar(255) NOT NULL,
  `prenomClient` varchar(255) NOT NULL,
  `modele_Bijou` varchar(255) NOT NULL,
  `prix_Bijou` varchar(255) NOT NULL,
  `montant_verse` varchar(255) NOT NULL,
  `dateDepot` date NOT NULL,
  `poids_Bijou` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ventes_speciales`
--

INSERT INTO `ventes_speciales` (`nomClient`, `prenomClient`, `modele_Bijou`, `prix_Bijou`, `montant_verse`, `dateDepot`, `poids_Bijou`) VALUES
('thiam', 'omar', 'montre rolex', '12.000.000', '4.000.000', '2019-06-27', '25g'),
('Thiam', 'omar', 'Deux paires de créoles ', '280.000', '180.000', '2019-07-07', '10g'),
('pppp', 'pppp', 'pppp', 'pppppp', 'pppppp', '2020-11-03', 'ppppp');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
