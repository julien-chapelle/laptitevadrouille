-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 18 jan. 2020 à 16:29
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `laptitevadrouille`
--

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

DROP TABLE IF EXISTS `avoir`;
CREATE TABLE IF NOT EXISTS `avoir` (
  `id` int(11) NOT NULL,
  `id_LPV_category` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_LPV_category`),
  KEY `Avoir_LPV_category0_FK` (`id_LPV_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avoir`
--

INSERT INTO `avoir` (`id`, `id_LPV_category`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 2),
(4, 1),
(4, 2),
(5, 6);

-- --------------------------------------------------------

--
-- Structure de la table `lpv_ageadvisepicto`
--

DROP TABLE IF EXISTS `lpv_ageadvisepicto`;
CREATE TABLE IF NOT EXISTS `lpv_ageadvisepicto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ageAdvisePicto` varchar(100) NOT NULL,
  `ageAdviseTitle` varchar(255) NOT NULL,
  `ageAdviseAlt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lpv_ageadvisepicto`
--

INSERT INTO `lpv_ageadvisepicto` (`id`, `ageAdvisePicto`, `ageAdviseTitle`, `ageAdviseAlt`) VALUES
(1, 'birthPicto.png', 'Accessible dès la naissance', 'pictogramme dès naissance'),
(2, 'threePicto.png', 'Accessible dès 3ans', 'pictogramme dès 3ans'),
(3, 'fivePicto.png', 'Accessible dès 5ans', 'pictogramme dès 5ans');

-- --------------------------------------------------------

--
-- Structure de la table `lpv_category`
--

DROP TABLE IF EXISTS `lpv_category`;
CREATE TABLE IF NOT EXISTS `lpv_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `moreInfoDescription` longtext NOT NULL,
  `rate_0_3` varchar(255) NOT NULL,
  `rate_3_11` varchar(255) NOT NULL,
  `rate_12_plus` varchar(255) NOT NULL,
  `rate_child_disabled` varchar(255) DEFAULT NULL,
  `openedHours` mediumtext NOT NULL,
  `publication_date` varchar(100) NOT NULL,
  `pics` varchar(100) NULL,
  `map` varchar(100) NULL,
  `googleMapAddress` varchar(255) NULL,
  `likes` int(11) NOT NULL,
  `officialSite` varchar(255) NOT NULL,
  `id_LPV_locationPicto` int(11) NOT NULL,
  `id_LPV_outputTypePicto` int(11) NOT NULL,
  `id_LPV_ageAdvisePicto` int(11) NOT NULL,
  `id_LPV_practicabilityPicto` int(11) NOT NULL,
  `id_LPV_equipmentPicto` int(11) DEFAULT NULL,
  `id_LPV_paymentPictoIndex` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `LPV_category_LPV_locationPicto_FK` (`id_LPV_locationPicto`),
  KEY `LPV_category_LPV_outputTypePicto0_FK` (`id_LPV_outputTypePicto`),
  KEY `LPV_category_LPV_ageAdvisePicto1_FK` (`id_LPV_ageAdvisePicto`),
  KEY `LPV_category_LPV_practicabilityPicto2_FK` (`id_LPV_practicabilityPicto`),
  KEY `LPV_category_LPV_equipmentPicto3_FK` (`id_LPV_equipmentPicto`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lpv_category`
--

INSERT INTO `lpv_category` (`id`, `title`, `description`, `moreInfoDescription`, `rate_0_3`, `rate_3_11`, `rate_12_plus`, `rate_child_disabled`, `openedHours`, `publication_date`, `pics`, `map`, `googleMapAddress`, `likes`, `officialSite`, `id_LPV_locationPicto`, `id_LPV_outputTypePicto`, `id_LPV_ageAdvisePicto`, `id_LPV_practicabilityPicto`, `id_LPV_equipmentPicto`, `id_LPV_paymentPictoIndex`) VALUES
(1, 'ZOO DE CERZA', 'Plus de 1500 animaux sauvages vivent paisiblement en semi-liberté sur 70 hectares de forêts et vallons.', 'Plus de 1500 animaux sauvages vivent paisiblement en semi-liberté sur 70 hectares de forêts et vallons.<br />                                     Partez à la découverte de 120 espèces des 5 continents à travers 2 circuits de visite à pied et observez les animaux dans des conditions naturelles. Ici, tout a été conçu pour le bien-être des animaux.<br />                                     Premier parc de loisirs en Normandie avec 300 000 visiteurs par an, le parc propose également plusieurs attractions pour petits et grands: Le Safari Train vous emmène photographier les animaux sauvages, le cinéma 3D-relief vous invite à un voyage extraordinaire, profitez également du Safari des tout-petits et, depuis 2016, de l‘immersion chez les lémuriens. Une aventure exceptionnelle en Normandie à vivre en famille ou entre amis.', 'Tarif moins de 3 ans : GRATUIT', 'Tarif de 3 à 11 ans : 15€', 'Tarif à partir de 12 ans : 22€', 'Enfant en situation de Handicap : 9€', 'Février – Mars : de 10h00 à 17h30<br />                                 Avril – Mai – Juin : de 9h30 à 18h30<br />                                 Juillet – Août : de 9h30 à 19h00<br />                                 Septembre : de 9h30 à 18h30<br />                                 Octobre – Novembre : de 10h00 à 17h30<br />                                 Décembre – Janvier : FERMETURE ANNUELLE<br />                                 Fermeture des entrées à 16H00', 'Ajouté le 14-01-2020', 'cerzaCategory.png', 'CerzaMap.png', 'https://www.google.com/maps/place/CERZA+Parc+des+Safaris/@49.1823249,0.3120314,15z/data=!4m12!1m6!3m5!1s0x0:0x688cd6dc89294b4e!2sCERZA+Parc+des+Safaris!8m2!3d49.1823249!4d0.3120314!3m4!1s0x0:0x688cd6dc89294b4e!8m2!3d49.1823249!4d0.3120314', 0, 'https://www.cerza.com', 1, 1, 1, 1, 1, 0),
(2, 'PARC DE CLERES', '1400 animaux vivent dans ce parc animalier donc près de 2 tiers sont en liberté.', 'Situé au cœur de la Seine-Maritime en Normandie, le Parc de Clères est un parc zoologique fondé en 1919 par l’ornithologue et naturaliste Jean Delacour sur un site exceptionnel.<br />                                 On y trouve à la fois un parc botanique à l’anglaise contenant des essences rares, et un château dont l\'histoire remonte au XIe siècle.<br />                                 1400 animaux vivent dans ce parc animalier, donc près d\'un millier sont en liberté. Les collections animales sont à dominante ornithologique: différentes espèce de grues, flamants, ibis, bernache, touracos ou faisans y sont conservées.<br />                                 De nombreux mammifères sont présents également : Antilopes, wallabies, gibbons, pandas roux, tamarins, ouistitis et deux espèces de lémuriens (makicattas et hapalémurs d\'alaotra).<br />                                 Côté jardin, Henry Avray-Tipping, architecte paysagiste anglais issu de la mouvance « Arts and Crafts », a créé des jardins devant le château à la demande de Jean Delacour. Ces terrasses restaurées depuis 2012 présentent une grande variété de vivaces aux teintes pastel (pivoines, géraniums vivaces)                                 Chaque année le parc de Clères programme des journées spécifiques et des animations destinées à transmettre, éduquer et informer le public du rôle des zoos et de l\'importance de la conservation de la biodiversité.<br />                                 - 1400 animaux<br />                                 - 13 hectares à parcourir<br />                                 - Un château du XVIe siècle<br />', 'Tarif moins de 3 ans : GRATUIT', 'Tarif de 3 à 11 ans : 6.50€', 'Tarif à partir de 12 ans : 9€', 'Enfant en situation de Handicap : 7.50€', 'Mars & Octobre : de 10h00 à 12h30 & 13h30 à 18h30<br />\r\n                                Avril à Août : de 10h00 à 19h00<br />\r\n                                Septembre : de 10h00 à 18h30<br />\r\n                                Octobre à Février : FERMETURE ANNUELLE<br />', 'Ajouté le 10-01-2020', 'clèresCategory.JPG', 'CleresMap.png', 'https://www.google.com/maps/place/Le+Parc+de+Cl%C3%A8res/@49.596958,1.1055893,17z/data=!3m1!4b1!4m5!3m4!1s0x47e0c22e03d16af7:0xf3645d2d18e52d55!8m2!3d49.596958!4d1.107778', 0, 'http://www.parcdecleres.net/fr/home', 1, 2, 1, 1, 1, 0),
(6, 'BIBLIOTHEQUE OSCAR NIEMEYER', 'La bibliothèque Oscar Niemeyer est une bibliothèque située au 2, place Niemeyer au Havre. Elle occupe une partie de l’ensemble architectural « Espace Oscar Niemeyer » construit par l’architecte du même nom entre 1978 et 1982 et rénové à partir de 2011.', 'Une nouvelle bibliothèque spacieuse et confortable a pris place dans le petit Volcan, au coeur de l\'Espace Oscar Niemeyer qui accueille aussi la Scène nationale. Elle a ouvert ses portes le 3 novembre 2015.<br />                                 Ce nouvel équipement, marqueur urbain attractif et visible, installé dans un bâtiment emblématique permet de développer l’offre de livres, presse, DVD, CD et autres documents et de proposer des services qui ne pouvaient trouver leur place à la bibliothèque Armand Salacrou. La nouvelle bibliothèque fonctionne en binôme avec la bibliothèque Armand Salacrou, qui devient un espace dédié au fonds local et à la valorisation des documents patrimoniaux (consultation sur place et exposition).<br />                                 Dans un espace de 5000m², elle permet l’échange et la convivialité, le séjour confortable, la pause dans la journée, le travail au calme, la lecture mais aussi les débats, la discussion en groupe, l’activité culturelle, la formation. Des espaces, lumières, mobiliers très divers, de la table de travail au galet pour s’allonger, sont ainsi proposés.<br />', 'Tarif moins de 3 ans : GRATUIT', 'Tarif de 3 à 11 ans : GRATUIT', 'Tarif à partir de 12 ans : GRATUIT', 'Enfant en situation de Handicap : GRATUIT', 'Ouvert du mardi au dimanche, de 10h à 19h.<br />                             Durant la première heure de la matinée (10h à 11h) et la dernière heure de la journée (18h à 19h), la bibliothèque Oscar Niemeyer est en ouverture partielle.<br />                             L\'accueil, les salles de travail, le salon de presse, les biographies, les documentaires concernant l\'emploi/formation et les loisirs sont accessibles.<br />                             L\'ensemble des espaces est accessible à partir de 11h et jusqu\'à 18h.<br />                             Durant les vacances scolaires la bibliothèque sera ouverte du mardi au samedi de 10h à 17h.', 'Ajouté le 15-01-2020', 'biblioNiemeyerCategory.JPG', 'biblioNiemeyerMap.png', 'https://www.google.com/maps/place/Biblioth%C3%A8que+Oscar+Niemeyer/@49.4907686,0.1039893,17z/data=!3m1!4b1!4m5!3m4!1s0x47e02f2104fc8513:0x7f22408899a63bda!8m2!3d49.4907686!4d0.106178', 0, 'http://lireauhavre.fr/fr/contenu-standard/bibliotheque-oscar-niemeyer', 2, 10, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `lpv_equipmentpicto`
--

DROP TABLE IF EXISTS `lpv_equipmentpicto`;
CREATE TABLE IF NOT EXISTS `lpv_equipmentpicto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipmentPicto` varchar(100) NOT NULL,
  `equipmentTitle` varchar(255) NOT NULL,
  `equipmentAlt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lpv_equipmentpicto`
--

INSERT INTO `lpv_equipmentpicto` (`id`, `equipmentPicto`, `equipmentTitle`, `equipmentAlt`) VALUES
(1, 'babyDiaperPicto.png', 'Plan à langer disponible', 'pictogramme plan à langer disponible');

-- --------------------------------------------------------

--
-- Structure de la table `lpv_locationpicto`
--

DROP TABLE IF EXISTS `lpv_locationpicto`;
CREATE TABLE IF NOT EXISTS `lpv_locationpicto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `locationPicto` varchar(100) NOT NULL,
  `locationTitle` varchar(255) NOT NULL,
  `locationAlt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lpv_locationpicto`
--

INSERT INTO `lpv_locationpicto` (`id`, `locationPicto`, `locationTitle`, `locationAlt`) VALUES
(1, 'outdoorPicto.png', 'Sortie en exterieur', 'pictogramme exterieur'),
(2, 'indoorPicto.png', 'Sortie en interieur', 'pictogramme interieur');

-- --------------------------------------------------------

--
-- Structure de la table `lpv_outputtypepicto`
--

DROP TABLE IF EXISTS `lpv_outputtypepicto`;
CREATE TABLE IF NOT EXISTS `lpv_outputtypepicto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `outputTypePicto` varchar(100) NOT NULL,
  `outputTypeTitle` varchar(255) NOT NULL,
  `outputTypeAlt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lpv_outputtypepicto`
--

INSERT INTO `lpv_outputtypepicto` (`id`, `outputTypePicto`, `outputTypeTitle`, `outputTypeAlt`) VALUES
(1, 'zooPicto.png', 'Catégorie zoo', 'Pictogramme zoo'),
(2, 'wildlifePicto.png', 'Catégorie parc animalier', 'Pictogramme parc animalier'),
(3, 'farmPicto.png', 'Catégorie ferme pédagogique', 'Pictogramme ferme pédagogique'),
(4, 'amusementParkPicto.png', 'Catégorie parc d\'attraction', 'Pictogramme parc d\'attraction'),
(5, 'barCafePicto.png', 'Catégorie bar-cafe', 'Pictogramme bar-cafe'),
(6, 'forestPicto.png', 'Catégorie forêt', 'Pictogramme forêt'),
(7, 'museumPicto.png', 'Catégorie Musée', 'Pictogramme Musée'),
(8, 'playAreaPicto.png', 'Catégorie aire de jeux', 'Pictogramme aire de jeux'),
(9, 'restaurentPicto.png', 'Catégorie restaurant', 'Pictogramme restaurant'),
(10, 'libraryPicto.png', 'Catégorie bibliothèque', 'Pictogramme bibliothèque');

-- --------------------------------------------------------

--
-- Structure de la table `lpv_paymentpicto`
--

DROP TABLE IF EXISTS `lpv_paymentpicto`;
CREATE TABLE IF NOT EXISTS `lpv_paymentpicto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paymentPicto` varchar(100) NOT NULL,
  `paymentTitle` varchar(255) NOT NULL,
  `paymentAlt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lpv_paymentpicto`
--

INSERT INTO `lpv_paymentpicto` (`id`, `paymentPicto`, `paymentTitle`, `paymentAlt`) VALUES
(1, 'cardPicto.png', 'Paiement carte accepté', 'pictogramme paiement carte '),
(2, 'cashPicto.png', 'Paiement espèces accepté', 'pictogramme paiement espèces'),
(3, 'checkPicto.png', 'Paiement chèques accepté', 'pictogramme paiement chèques'),
(4, 'vacancyChecksPicto.png', 'Paiement chèques vacances accepté', 'pictogramme paiement chèques vacances'),
(5, 'freePicto.png', 'Gratuit', 'pictogramme gratuit');

-- --------------------------------------------------------

--
-- Structure de la table `lpv_practicabilitypicto`
--

DROP TABLE IF EXISTS `lpv_practicabilitypicto`;
CREATE TABLE IF NOT EXISTS `lpv_practicabilitypicto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `practicabilityPicto` varchar(100) NOT NULL,
  `practicabilityTitle` varchar(255) NOT NULL,
  `practicabilityAlt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lpv_practicabilitypicto`
--

INSERT INTO `lpv_practicabilitypicto` (`id`, `practicabilityPicto`, `practicabilityTitle`, `practicabilityAlt`) VALUES
(1, 'babyStrollerPicto.png', 'Accessible en poussette', 'Pictogramme accessible en poussette'),
(2, 'babyCarrierPicto.png', 'Porte bébé conseillé', 'Pictogramme porte bébé conseillé');

-- --------------------------------------------------------

--
-- Structure de la table `lpv_user`
--

DROP TABLE IF EXISTS `lpv_user`;
CREATE TABLE IF NOT EXISTS `lpv_user` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lpv_user`
--

INSERT INTO `lpv_user` (`id`, `pseudo`, `mail`, `password`, `avatar`) VALUES
(1, 'jibus', 'jibus@hotmail.fr', '1234', 'jibusAvatarPics'),
(2, 'Paul', 'paul.dupont@gmail.fr', '4321', 'PaulAvatarPics'),
(3, 'Julien', 'dupond.julien@gmail.com', '1234', 'JulienAvatarPics');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD CONSTRAINT `Avoir_LPV_category0_FK` FOREIGN KEY (`id_LPV_category`) REFERENCES `lpv_category` (`id`),
  ADD CONSTRAINT `Avoir_LPV_paymentPicto_FK` FOREIGN KEY (`id`) REFERENCES `lpv_paymentpicto` (`id`);

--
-- Contraintes pour la table `lpv_category`
--
ALTER TABLE `lpv_category`
  ADD CONSTRAINT `LPV_category_LPV_ageAdvisePicto1_FK` FOREIGN KEY (`id_LPV_ageAdvisePicto`) REFERENCES `lpv_ageadvisepicto` (`id`),
  ADD CONSTRAINT `LPV_category_LPV_equipmentPicto3_FK` FOREIGN KEY (`id_LPV_equipmentPicto`) REFERENCES `lpv_equipmentpicto` (`id`),
  ADD CONSTRAINT `LPV_category_LPV_locationPicto_FK` FOREIGN KEY (`id_LPV_locationPicto`) REFERENCES `lpv_locationpicto` (`id`),
  ADD CONSTRAINT `LPV_category_LPV_outputTypePicto0_FK` FOREIGN KEY (`id_LPV_outputTypePicto`) REFERENCES `lpv_outputtypepicto` (`id`),
  ADD CONSTRAINT `LPV_category_LPV_practicabilityPicto2_FK` FOREIGN KEY (`id_LPV_practicabilityPicto`) REFERENCES `lpv_practicabilitypicto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
