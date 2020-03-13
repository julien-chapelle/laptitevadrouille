-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 13 mars 2020 à 13:55
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
-- Base de données :  `laptitevadrouillev2`
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
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 9),
(1, 11),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 9),
(2, 11),
(3, 4),
(3, 6),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 9),
(4, 11),
(5, 7),
(5, 8),
(5, 10);

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
-- Structure de la table `lpv_avatar`
--

DROP TABLE IF EXISTS `lpv_avatar`;
CREATE TABLE IF NOT EXISTS `lpv_avatar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `avatarName` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lpv_avatar`
--

INSERT INTO `lpv_avatar` (`id`, `avatarName`) VALUES
(1, 'man_1.png'),
(2, 'man_2.png'),
(3, 'man_3.png'),
(4, 'man_4.png'),
(5, 'man_5.png'),
(6, 'man_6.png'),
(7, 'man_7.png'),
(8, 'man_8.png'),
(9, 'man_9.png'),
(10, 'man_10.png'),
(11, 'man_11.png'),
(12, 'man_12.png'),
(13, 'woman_1.png'),
(14, 'woman_2.png'),
(15, 'woman_3.png'),
(16, 'woman_4.png'),
(17, 'woman_5.png'),
(18, 'woman_6.png'),
(19, 'woman_7.png'),
(20, 'woman_8.png'),
(21, 'woman_9.png'),
(22, 'admin_1.png');

-- --------------------------------------------------------

--
-- Structure de la table `lpv_category`
--

DROP TABLE IF EXISTS `lpv_category`;
CREATE TABLE IF NOT EXISTS `lpv_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `moreInfoDescription` longtext NOT NULL,
  `rate_0_3` varchar(255) NOT NULL,
  `rate_3_11` varchar(255) NOT NULL,
  `rate_12_plus` varchar(255) NOT NULL,
  `rate_child_disabled` varchar(255) DEFAULT NULL,
  `openedHours` longtext NOT NULL,
  `publication_date` varchar(100) NOT NULL,
  `pics` varchar(100) DEFAULT NULL,
  `map` varchar(100) DEFAULT NULL,
  `googleMapAddress` varchar(255) DEFAULT NULL,
  `likes` int(11) NOT NULL,
  `officialSite` varchar(255) NOT NULL,
  `walkValidate` varchar(50) DEFAULT NULL,
  `id_creator` int(11) DEFAULT NULL,
  `id_LPV_locationPicto` int(11) NOT NULL,
  `id_LPV_outputTypePicto` int(11) NOT NULL,
  `id_LPV_ageAdvisePicto` int(11) NOT NULL,
  `id_LPV_practicabilityPicto` int(11) NOT NULL,
  `id_LPV_equipmentPicto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `LPV_category_LPV_locationPicto_FK` (`id_LPV_locationPicto`),
  KEY `LPV_category_LPV_outputTypePicto0_FK` (`id_LPV_outputTypePicto`),
  KEY `LPV_category_LPV_ageAdvisePicto1_FK` (`id_LPV_ageAdvisePicto`),
  KEY `LPV_category_LPV_practicabilityPicto2_FK` (`id_LPV_practicabilityPicto`),
  KEY `LPV_category_LPV_equipmentPicto3_FK` (`id_LPV_equipmentPicto`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lpv_category`
--

INSERT INTO `lpv_category` (`id`, `title`, `description`, `moreInfoDescription`, `rate_0_3`, `rate_3_11`, `rate_12_plus`, `rate_child_disabled`, `openedHours`, `publication_date`, `pics`, `map`, `googleMapAddress`, `likes`, `officialSite`, `walkValidate`, `id_creator`, `id_LPV_locationPicto`, `id_LPV_outputTypePicto`, `id_LPV_ageAdvisePicto`, `id_LPV_practicabilityPicto`, `id_LPV_equipmentPicto`) VALUES
(1, 'ZOO DE CERZA', 'Plus de 1500 animaux sauvages vivent paisiblement en semi-liberté sur 70 hectares de forêts et vallons.', 'Plus de 1500 animaux sauvages vivent paisiblement en semi-liberté sur 70 hectares de forêts et vallons. Partez à la découverte de 120 espèces des 5 continents à travers 2 circuits de visite à pied et observez les animaux dans des conditions naturelles. Ici, tout a été conçu pour le bien-être des animaux. Premier parc de loisirs en Normandie avec 300 000 visiteurs par an, le parc propose également plusieurs attractions pour petits et grands: Le Safari Train vous emmène photographier les animaux sauvages, le cinéma 3D-relief vous invite à un voyage extraordinaire, profitez également du Safari des tout-petits et, depuis 2016, de l‘immersion chez les lémuriens. Une aventure exceptionnelle en Normandie à vivre en famille ou entre amis.', 'GRATUIT', '15', '22', '9', 'Février - Mars : de 10h00 à 17h30<br />Avril - Mai - Juin : de 9h30 à 18h30<br />Juillet - Août : de 9h30 à 19h00<br />Septembre : de 9h30 à 18h30<br />Octobre - Novembre : de 10h00 à 17h30<br />Décembre - Janvier : FERMETURE ANNUELLE<br />Fermeture des entrées à 16H00', '14-01-2020', 'zoo_de_cerza_category.jpeg', 'zoo_de_cerza_map.png', 'https://www.google.com/maps/place/CERZA+Parc+des+Safaris/@49.1823249,0.3120314,15z/data=!4m12!1m6!3m5!1s0x0:0x688cd6dc89294b4e!2sCERZA+Parc+des+Safaris!8m2!3d49.1823249!4d0.3120314!3m4!1s0x0:0x688cd6dc89294b4e!8m2!3d49.1823249!4d0.3120314', 0, 'https://www.cerza.com', 'Validate', 6, 1, 1, 1, 1, 1),
(2, 'PARC DE BOCASSE', 'C\'est en plein coeur de la Normandie, à 25 km de Rouen, que se trouve le Parc du Bocasse. En famille ou entre amis, venez profiter d\'une journée riche en émotions. ', 'C\'est en plein coeur de la Normandie, à 25 km de Rouen, que se trouve le Parc du Bocasse. En famille ou entre amis, venez profiter d\'une journée riche en émotions. Des attractions à sensations fortes aux manèges et activités pour enfants, en passant par les découvertes féériques et les rendez vous pédagogiques, vous passerez au Parc du Bocasse une journée exceptionnelle ! C\'est au total, 40 attractions que vous pourrez découvrir ! Le Parc du Bocasse met aussi à votre disposition un parking entièrement gratuit et de nombreux points repas : sandwichs, frites, boissons, glaces... Découvrez dès maintenant nos attractions, réservez vos billets directement en ligne, organisez votre voyage au Parc du Bocasse. L\'aventure commence ici ! ', 'GRATUIT', '18', '21', 'INCONNU', 'Avril à Juin : de 10h30 à 18h00<br />Juillet à Août : de 10h00 à 19h00<br />Week-end de Septembre : de 10h30 à 18h00<br /><br /><br /><br />', '27-02-2020', 'parc_de_bocasse_category.jpeg', 'parc_de_bocasse_map.png', 'https://www.google.com/maps/place/Parc+du+Bocasse/@49.6009531,1.0775622,17z/data=!3m1!4b1!4m5!3m4!1s0x47e0c21c52f35e07:0x467973b34ca43da!8m2!3d49.6009531!4d1.0797509', 0, 'https://www.parcdubocasse.fr/fr/', '', 6, 1, 4, 2, 1, 1),
(3, 'ZOO DE JURQUES', 'Le parc zoologique de Jurques est un parc zoologique français privé situé en Normandie entre Villers-Bocage et Vire.', 'Le zoo présente plus de 650 animaux de plus de 150 espèces. Beaucoup de félins et de primates, mais aussi girafes, zèbres, oryx, autruches, perroquets (dont deux aras hyacinthe), rapaces, reptiles, mygales... Les animaux emblématiques du parc sont les lions blancs, forme mutante du lion.', 'GRATUIT', '13', '19', '8.5', 'Février à Mars : de 11h00 à 17h00<br />Avril à Juin : de 10h00 à 18h00<br />Juillet à Août : de 10h00 à 19h00<br />Septembre à Octobre : de 10h00 à 18h00<br /><br /><br />', '03-03-2020', 'zoo_de_jurques_category.jpeg', 'zoo_de_jurques_map.png', 'https://www.google.com/maps/place/Zoo+de+Jurques/@49.0032281,-0.7533696,15z/data=!4m5!3m4!1s0x0:0x9ea25544ef46c8e5!8m2!3d49.0032281!4d-0.7533696', 0, 'https://www.zoodejurques.fr/', 'Validate', 6, 1, 1, 1, 1, 1),
(4, 'PARC DE CLERES', 'Le parc zoologique de Clères est un parc zoologique et botanique français, situé en Seine-Maritime, à Clères. Il est une propriété du conseil départemental de la Seine-Maritime.', 'Situé au cœur de la Seine-Maritime en Normandie, le Parc de Clères est un parc zoologique fondé en 1919 par l\'ornithologue et naturaliste Jean Delacour sur un site exceptionnel. On y trouve à la fois un parc botanique à l\'anglaise contenant des essences rares, et un château dont l\'histoire remonte au XIe siècle. 1400 animaux vivent dans ce parc animalier, donc près d\'un millier sont en liberté. Les collections animales sont à dominante ornithologique : différentes espèce de grues, flamants, ibis, bernache, touracos ou faisans y sont conservées. De nombreux mammifères sont présents également : Antilopes, wallabies, gibbons, pandas roux, tamarins, ouistitis  et deux espèces de lémuriens (makicattas et hapalémurs d\'alaotra).', 'GRATUIT', '6.50', '9', '7.5', 'Mars &amp; Octobre : de 10h00 à 12h30 &amp; 13h30 à 18h30<br />Avril à Août : de 10h00 à 19h00<br />Septembre : de 10h00 à 18h30<br /><br /><br /><br />', '03-03-2020', 'parc_de_cleres_category.jpeg', 'parc_de_cleres_map.png', 'https://www.google.com/maps/place/Le+Parc+de+Cl%C3%A8res/@49.596958,1.107778,15z/data=!4m5!3m4!1s0x0:0xf3645d2d18e52d55!8m2!3d49.596958!4d1.107778', 0, 'http://www.parcdecleres.net/fr/home/', 'Validate', 6, 1, 2, 1, 1, 1),
(5, 'MUSEUM D\'HISTOIRE NATURELLE LE HAVRE', 'Tout au long de l’année, le Muséum d’histoire naturelle du Havre propose des expositions temporaires ludiques et interactives pour découvrir et comprendre les richesses du monde animal, végétal et minéral.', 'Son objectif : donner l’envie d’être curieux en associant science et sourire, explorer autrement les multiples champs de la culture scientifique pour mieux en faire partager les enjeux et s’inscrire comme un lieu de lien et de partage intergénérationnel. Avec un riche programme d’expositions, de visites thématiques, d’ateliers, de rencontres autour du conte, de spectacles, de conférences ou encore d’événements, le Muséum s’affirme comme un lieu de découverte et de partage pour toute la famille.', 'GRATUIT', 'GRATUIT', 'GRATUIT (jusqu\'à 26ans)', 'GRATUIT', 'Mardi au Dimanche : de 10h à 12h &amp; de 14h à 18h<br />Fermé le jeudi matin et le lundi<br /><br /><br /><br /><br />', '04-03-2020', 'museum_d\'histoire_naturelle_le_havre_category.jpeg', 'museum_d\'histoire_naturelle_le_havre_map.png', 'https://www.google.com/maps/place/Mus%C3%A9um+d\'Histoire+Naturelle/@49.487617,0.1068863,17z/data=!3m1!4b1!4m5!3m4!1s0x47e02f20047c9a8b:0x26b8d100ddd86fb9!8m2!3d49.487617!4d0.109075', 0, 'http://www.museum-lehavre.fr/fr', '', 6, 2, 7, 1, 2, 1),
(6, 'FERME DES FALAISES', 'La Ferme des Falaises vous accueille au cœur de la campagne Normande entre Le Havre et Etretat, à côté de St Jouin Bruneval.', 'Venez découvrir les animaux de la ferme du monde. Vous pourrez , à votre guise, découvrir nos diverses variétés d\'animaux et circuler librement à travers la ferme. Venez admirer, caresser des animaux accessibles et affectueux.', 'GRATUIT (max 2ans)', '6.50', '6.50', 'INCONNU', 'Avril à Mai : de 14h00 à 18h30<br />Juillet à Septembre : de 11h00 à 19h00<br />Octobre à Novembre : de 14h00 à 18h00<br /><br /><br /><br />', '04-03-2020', 'ferme_des_falaises_category.jpeg', 'ferme_des_falaises_map.png', 'https://www.google.com/maps/place/Ferme+des+falaises/@49.6339998,0.180853,17z/data=!3m1!4b1!4m5!3m4!1s0x47e03cdc38af5281:0xb1a20b3daeaef6e2!8m2!3d49.6339998!4d0.1830417', 0, 'https://www.fermedesfalaises.com/', '', 6, 1, 3, 1, 1, NULL),
(7, 'PARC DE ROUELLES', 'Patrimoine de la CODAH, prairies, étangs et bois s’étendent sur 160 hectares et offrent un écrin exceptionnel au manoir de la Bouteillerie et à son colombier du XVIIe siècle, représentatif de l’architecture du Pays de Caux.', 'Le promeneur curieux de mieux connaître la région pourra visiter le manoir et sa collection remarquable d’outils et d’objets traditionnels de la vie courante en Normandie. Une exposition très complète sur la faune et la flore du parc est également proposée dans la salle d’exposition de la ferme. A deux pas, le Jardin de plantes vivaces, havre de beauté et d’harmonie, réjouira tous les amoureux de la nature et jardiniers en herbe ou confirmés.', 'GRATUIT', 'GRATUIT', 'GRATUIT', 'GRATUIT', '2 mai au 14 octobre : de 14h à 19h30<br />15 octobre au 31 mai : de 14h à 16h30<br />fermé du 1er janvier au 28 février<br /><br /><br /><br />', '04-03-2020', 'parc_de_rouelles_category.jpeg', 'parc_de_rouelles_map.png', 'https://www.google.com/maps/place/Parc+de+Rouelles+(La+Bouteillerie)/@49.5260727,0.1737911,17z/data=!4m8!1m2!2m1!1sparc+de+rouelles!3m4!1s0x47e02ffe6b705509:0xe43eabb6726a78f!8m2!3d49.5237824!4d0.1736784', 0, 'https://www.lehavreseinemetropole.fr/dossier/le-parc-de-rouelles', '', 6, 1, 6, 1, 1, NULL),
(8, 'BIBLIOTHEQUE OSCAR NIEMEYER', 'La bibliothèque Oscar Niemeyer est une bibliothèque située au 2, place Niemeyer au Havre. Elle occupe une partie de l’ensemble architectural « Espace Oscar Niemeyer » construit par l’architecte du même nom entre 1978 et 1982 et rénové à partir de 2011.', 'Une nouvelle bibliothèque spacieuse et confortable a pris place dans le petit Volcan, au coeur de l\'Espace Oscar Niemeyer qui accueille aussi la Scène nationale. Elle a ouvert ses portes le 3 novembre 2015. Ce nouvel équipement, marqueur urbain attractif et visible, installé dans un bâtiment emblématique permet de développer l’offre de livres, presse, DVD, CD et autres documents et de proposer des services qui ne pouvaient trouver leur place à la bibliothèque Armand Salacrou. La nouvelle bibliothèque fonctionne en binôme avec la bibliothèque Armand Salacrou, qui devient un espace dédié au fonds local et à la valorisation des documents patrimoniaux (consultation sur place et exposition).Dans un espace de 5000m², elle permet l’échange et la convivialité, le séjour confortable, la pause dans la journée, le travail au calme, la lecture mais aussi les débats, la discussion en groupe, l’activité culturelle, la formation. Des espaces, lumières, mobiliers très divers, de la table de travail au galet pour s’allonger, sont ainsi proposés.', 'GRATUIT', 'GRATUIT', 'GRATUIT', 'GRATUIT', 'Mardi au Dimanche : de 10h00 à 19h00<br />Tout accessible : de 11h00 à 18h00<br />Ouverture partielle : 10h00 à 11h00 &amp; 18h à 19h<br />Non-accessible : Zone livres sauf biographie &amp; DVD<br />Vacances scolaires : du Mardi au Samedi de 10h00 à 17h00<br /><br />', '04-03-2020', 'bibliotheque_oscar_niemeyer_category.jpeg', 'bibliotheque_oscar_niemeyer_map.png', 'https://www.google.com/maps/place/Biblioth%C3%A8que+Oscar+Niemeyer/@49.4907686,0.1039893,17z/data=!3m1!4b1!4m5!3m4!1s0x47e02f2104fc8513:0x7f22408899a63bda!8m2!3d49.4907686!4d0.106178', 0, 'http://lireauhavre.fr/fr/contenu-standard/bibliotheque-oscar-niemeyer', 'Validate', 6, 2, 10, 1, 1, 1),
(9, 'BIOTROPICA', 'Les jardins animaliers Biotropica est un parc zoologique français de Normandie situé dans l\'Eure, dans la base de loisirs de Léry- Poses, proche de la ville de Val-de-Reuil. Il comprend une énorme serre tropicale de 5 000 m², ainsi qu\'un parc exterieur, pour une superficie totale de 10 hectares. ', 'Créé par les propriétaires du zoo de CERZA , la serre zoologique Biotropica a ouvert ses portes le 07 septembre 2012. En 2015, la serre zoologique Biotropica devient Les jardins animaliers Biotropica. Au fur et à mesure des années, de nouvelles espèces sont accueillies et de nouveaux espaces sont créés ( 2014 : le jardin d\'Asie avec les pandas roux, les loutres, les grues de Mandchourie et les carpes koi, 2015 : la crique des Manchots, avec les manchots de Humboldt, les cygnes à cou noir, les érismatures rousses et les ragondins, 2016 : la Brousse africaine, avec les suricates, guépards, fennecs, touracos, calaos, dik dik de Kirk, mangoustes naines2...., 2017 : modification de la ferme des enfants avec présentation d\'espèces atypiques, comme le cochon laineux, les pigeons hirondelles de Nuremberg..., 2018 : modification du nocturama qui laisse place à l\'enclos du Dragon de Komodo, 2019 : création de la nurserie des Gavials du Gange et réfection de l\'enclos de l\'anaconda vert)', 'GRATUIT', '9.90', '14', '8.90', 'Avril à Septembre : de 9h30 à 19h00<br />(fermeture des caisses d’entrée à 17h30 et fermeture du parc extérieur à 18h)<br />Octobre à Mars : de 9h30 à 17h30<br />(fermeture des caisses d’entrée à 16h00 et fermeture du parc extérieur à 16h30)<br />Ouvert tous les jours  y compris tous les jours fériés<br />(sauf le 25 Décembre &amp; 1er Janvier)<br />', '08-03-2020', 'biotropica_category.jpeg', 'biotropica_map.png', 'https://www.google.com/maps/place/Biotropica,+les+jardins+animaliers/@49.3048913,1.2165357,15z/data=!4m5!3m4!1s0x0:0x3b95bb4f057945f7!8m2!3d49.3048913!4d1.2165357', 0, 'https://www.biotropica.fr/', '', 8, 2, 1, 1, 1, 1),
(10, 'FORET DE MONTGEON ', 'La forêt de Montgeon est un parc et une aire de loisirs de la ville du Havre en Normandie. Mesurant 270 hectares, il s\'agit du plus grand espace vert de la ville. Elle se situe en ville haute, et s\'étend du tunnel Jenner à Fontaine-la-Mallet. On y trouve des lacs, une serre tropicale, une volière et une faune sauvage (lapins, renards, écureuils…). Un arboretum de conifères, fondé en 1993, permet aux visiteurs de découvrir quelque 115 taxons. ', 'Autrefois, la forêt de Montgeon était appelée Forêt des Hallates : elle est constituée des restes de la grande forêt qui recouvrait tout le pays de Caux pendant la Préhistoire. Le site est déjà occupé par les Hommes aux temps préhistoriques comme en témoignent les vestiges qui y ont été exhumés : des pointes de flèche, des grattoirs en silex et des tessons de céramique datant du Néolithique ont été retrouvés dans la partie nord-est. Les archéologues y ont également découvert un cimetière laténien et une nécropole romaine. La forêt a été acquise par la municipalité le 11 avril 1902 et aménagée par Michel Bejot entre 1966 et 1971. Pendant la Seconde Guerre mondiale, la forêt a abrité un dépôt de munitions de l\'armée allemande, réalisé en séries d\'alvéoles entourées de levées de terre. À la Libération un camp cigarette fut érigé pour les soldats américains (le camp Herbert Tareyton). Après 1945 et le rapatriement des soldats américains, le Camp Tareyton avec ses bâtiments en demi-lunes servit à héberger des familles sinistrées. Par la suite la forêt a été aménagée et plusieurs secteurs ont été reboisés. ', 'GRATUIT', 'GRATUIT', 'GRATUIT', 'GRATUIT', 'L\'entrée est gratuite tous les jours<br />La circulation et le stationnement des véhicules sont interdits entre 22h00 et 5h30<br /><br /><br /><br /><br />', '09-03-2020', 'foret_de_montgeon__category.jpeg', 'foret_de_montgeon__map.png', 'https://www.google.com/maps/place/For%C3%AAt+de+Montgeon/@49.5191451,0.1262474,14z/data=!3m1!4b1!4m5!3m4!1s0x47e02f8fbfb246cf:0xa7ff58d23404a71!8m2!3d49.5191469!4d0.143757?hl=fr', 0, 'https://www.lehavre.fr/annuaire/foret-de-montgeon', 'Validate', 9, 1, 6, 1, 1, NULL),
(11, 'GULLI PARC - LE HAVRE', 'Gulli Parc c\'est un espace de jeux géant, entièrement couvert, pour les enfants de 1 à 12 ans, et leurs parents. Idéal pour un sortie en famille par temps de pluie.', 'Les Gulli Parcs sont des parcs de jeux en intérieur, qui offrent le plein d’activités ludiques à tous les enfants de 1 à 12 ans. Le principe : se dépenser en s’amusant, découvrir, apprendre mais aussi inviter les parents à jouer avec leurs enfants en s’immergeant dans leur univers, coloré et fantaisiste.Gaëtan Le Jariel et Evelyne Villame ont créé La Boite aux Enfants en 2009 avec la volonté de développer une chaine de parcs qui soit l’écho de la chaine TV pour enfants Gulli. En 2011, La Boite aux Enfants ouvre le premier Gulli Parc. Ils ont en commun l’obsession de toujours satisfaire en priorité le goût des enfants, mais également d’associer au maximum les parents à ce que font leurs enfants et de développer la complicité parents-enfants. Gulli Parc c\'est aujourd\'hui 9 Ludo-parcs Gulli en France : Aix-en-Provence, Bry-sur-Marne, Le Mans, Le Havre, Rouen, Toulouse, Thiais, Rennes-Cesson et La Ville du Bois. Les Gulli Parcs sont des parcs de jeux en intérieur, qui offrent le plein d’activités ludiques à tous les enfants de 1 à 12 ans. Le principe : se dépenser en s’amusant, découvrir, apprendre mais aussi inviter les parents à jouer avec leurs enfants en s’immergeant dans leur univers, coloré et fantaisiste.', '0-1 GRATUIT   1-3 - 7', '10', '10', 'INCONNU', 'Période scolaire : 10h-19h les mercredi, samedi, dimanche et jours fériés<br />Période scolaire : 16h-19h le vendredi<br />Horaires exceptionnels : Le 24 et 31 Décembre de 10h à 17h30.<br />Pendant les vacances scolaires : Ouvert tous les jours de 10h à 19h.<br />Pendant les vacances d\'été : Ouvert tous les jours de 10h à 18h<br />Fermé : 25 Décembre, 1er Janvier<br />', '13-03-2020', 'gulli_parc_-_le_havre_category.jpeg', 'gulli_parc_-_le_havre_map.png', 'https://www.google.com/maps/place/Gulli+Parc+le+Havre/@49.4895199,0.1295927,15z/data=!4m5!3m4!1s0x0:0x3479f3d420c8a091!8m2!3d49.4895199!4d0.1295927', 0, 'https://www.gulli-parc.com/gulli-parc-le-havre/decouvrez-votre-gulli-parc', '', 11, 2, 8, 1, 1, 1);

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
(9, 'restaurantPicto.png', 'Catégorie restaurant', 'Pictogramme restaurant'),
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
  `password` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `id_LPV_avatar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `LPV_user_LPV_avatar_FK` (`id_LPV_avatar`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lpv_user`
--

INSERT INTO `lpv_user` (`id`, `pseudo`, `mail`, `password`, `status`, `id_LPV_avatar`) VALUES
(1, 'Bigdaddy', 'manala.simon@gmail.com', '$2y$10$Abe10wkRl7ZTfZgNtW7sxuWimnkJDsCql1flnRxlSxA1nyKtxFSNu', 'user', NULL),
(2, 'Robert', 'pirto.robert@wanadoo.fr', '$2y$10$6Rm3T3.kaLrOLdS4UbgkleghtAA9To27dMydHoK8HjY8ImYLmRA/i', 'user', NULL),
(3, 'Denis27', 'lemarre.denis@gmail.com', '$2y$10$/N0ysdnBNUawQNPiqQiLCOaFFru7OCxtVkZZ4I2SBhBdbVPG/B.hC', 'user', 4),
(4, 'Jacky', 'mirelle.jacques@gmail.com', '$2y$10$2vwFMMuuuSCHrfn5B78AseYM9LMoHHY2DCIhKJtKX8vMarkl0UwsW', 'user', NULL),
(5, 'Paula', 'paula.dupont@gmail.com', '$2y$10$cWWIBlT/SdfoNqx.NMz4k.D1wttCkeH7LQO4pdoYr4d1BhnvNi426', 'user', 1),
(6, 'Kingjulien', 'chapellejulien@laposte.net', '$2y$10$S1J8i.ylEq3yfrL7A6OrvOAOTIxAeZviq.X.A1rIJd.JWGa84ipme', 'admin', 22),
(7, 'Blob', 'mickey.bob@gmail.com', '$2y$10$WLMcT2e2H50KIJyzgfS7nOkcJJyNMkL05yaZeGQbEvI83VkbvfLCm', 'user', NULL),
(8, 'Peter', 'peter.lange@gmail.fr', '$2y$10$esOh2l3T35TccfDUyc.Cve355qmjCO2OacE1nASlW/WcyhhCuX.H2', 'user', 3),
(9, 'Louise', 'louise.durand@gmail.com', '$2y$10$Mi260QrAsPSTX.kcYLyxq.PO6EXV.TQm/jdJMRNeGFexgaRhhiK2S', 'user', 15),
(10, 'Nicolas', 'nicolas.laporte@gmail.com', '$2y$10$A96InzzxljJHh98M8dNxpOLBTIAKYIclcLiFOK1O68gHom6p/x15K', 'user', 6),
(11, 'Damien', 'damien.costantin@gmail.com', '$2y$10$xj.g2Xb9hKjHMaq6SKMh5.3av2nV6qIZVrIrFdq.mLB5XDM8CpDti', 'user', 12);

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
