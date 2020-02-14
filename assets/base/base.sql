-- CREATE DATABASE `laPtiteVadrouille` CHARACTER SET 'utf8';

USE `laPtiteVadrouille`;

-- CREATE TABLE `LPV_User` (
--     `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
--     `pseudo` VARCHAR(100) NOT NULL,
--     `mail` VARCHAR(255) NOT NULL,
--     `password` VARCHAR(100) NOT NULL,
--     `avatar` VARCHAR(255),
--     PRIMARY KEY (`id`)
-- )
-- ENGINE=INNODB;

-- INSERT INTO `user` 
-- VALUES (NULL, 'pseudo', 'M', 'mail', 'passeword', 'avatar');


-- INSERT INTO `lpv_category`
-- VALUES (null,'ZOO DE CERZA','Plus de 1500 animaux sauvages vivent paisiblement en semi-liberté sur 70 hectares de forêts et vallons.','Tarif moins de 3 ans : GRATUIT','Tarif de 3 à 11 ans : 15€','Tarif à partir de 12 ans : 22€','Enfant en situation de Handicap : 9€','Ajouté le 14-01-2020','cerzaCategory.png','0','1','3','1','1','1');

-- INSERT INTO `lpv_category`
-- VALUES (null,'PARC DE CLERES','1400 animaux vivent dans ce parc animalier donc près de 2 tiers sont en liberté.','Tarif moins de 3 ans : GRATUIT','Tarif de 3 à 11 ans : 6.50€','Tarif à partir de 12 ans : 9€','Enfant en situation de Handicap : 7.50€','Ajouté le 10-01-2020','clèresCategory.JPG','0','1','4','1','1','1');

-- INSERT INTO `lpv_category`
-- VALUES (null,'BIBLIOTHEQUE OSCAR NIEMEYER','La bibliothèque Oscar Niemeyer est une bibliothèque située au 2, place Niemeyer au Havre. Elle occupe une partie de l’ensemble architectural « Espace Oscar Niemeyer » construit par l’architecte du même nom entre 1978 et 1982 et rénové à partir de 2011.','Tarif moins de 3 ans : GRATUIT','Tarif de 3 à 11 ans : GRATUIT','Tarif à partir de 12 ans : GRATUIT','Enfant en situation de Handicap : GRATUIT','Ajouté le 15-01-2020','biblioNiemeyerCategory.JPG','0','2','10','1','1','1');

-- INSERT INTO `lpv_locationPicto` (`locationPicto`,`locationTitle`,`locationAlt`)
-- VALUES ('outdoorPicto.png','Sortie en exterieur','pictogramme exterieur'),
-- ('indoorPicto.png','Sortie en interieur','pictogramme interieur');

-- INSERT INTO `lpv_practicabilityPicto` (`practicabilityPicto`,`practicabilityTitle`,`practicabilityAlt`)
-- VALUES ('babyStrollerPicto.png','Accessible en poussette','Pictogramme accessible en poussette'),
-- ('babyCarrierPicto.png','Porte bébé conseillé','Pictogramme porte bébé conseillé');

-- INSERT INTO `lpv_equipmentPicto` (`equipmentPicto`,`equipmentTitle`,`equipmentAlt`)
-- VALUES ('babyDiaperPicto.png','Plan à langer disponible','pictogramme plan à langer disponible');

-- INSERT INTO `lpv_outputTypePicto` (`outputTypePicto`,`outputTypeTitle`,`outputTypeAlt`)
-- VALUES ('zooPicto.png', 'Catégorie Zoo', 'Pictogramme Zoo'),
--         ('wildlifePicto.png', 'Catégorie Parc animalier', 'Pictogramme Parc animalier'),
--         ('farmPicto.png', 'Catégorie Ferme pédagogique', 'Pictogramme Ferme pédagogique'),
--         ('amusementParkPicto.png', 'Catégorie Parc d\'attraction', 'Pictogramme Parc d\'attraction'),
--         ('barCafePicto.png', 'Catégorie Bar-café', 'Pictogramme Bar-café'),
--         ('forestPicto.png', 'Catégorie Forêt', 'Pictogramme Forêt'),
--         ('museumPicto.png', 'Catégorie Musée', 'Pictogramme Musée'),
--         ('playAreaPicto.png', 'Catégorie Aire de jeux', 'Pictogramme Aire de jeux'),
--         ('restaurentPicto.png', 'Catégorie Restaurent', 'Pictogramme Restaurant'),
--          ('libraryPicto.png', 'Catégorie bibliothèque', 'Pictogramme bibliothèque');

-- INSERT INTO `lpv_ageAdvisePicto` (`ageAdvisePicto`,`ageAdviseTitle`,`ageAdviseAlt`)
-- VALUES ('birthPicto.png','Accessible dès la naissance', 'pictogramme dès naissance'),
--         ('threePicto.png','Accessible dès 3ans', 'pictogramme dès 3ans'),
--          ('fivePicto.png','Accessible dès 5ans', 'pictogramme dès 5ans');

-- INSERT INTO `lpv_paymentPicto` (`paymentPicto`, `paymentTitle`, `paymentAlt`)
-- VALUES ('cardPicto.png','Paiement carte accepté', 'pictogramme paiement carte '),
--         ('cashPicto.png','Paiement espèces accespté', 'pictogramme paiement espèces'),
--          ('checkPicto.png','Paiement chèques accepté', 'pictogramme paiement chèques'),
--          ('vacancyChecksPicto.png','Paiement chèques vacances accepté', 'pictogramme paiement chèques vacances'),
--          ('freePicto.png','Gratuit', 'Gratuit');

-- SELECT `avoir`.`id_LPV_category`,`LPV_category`.`id`,`LPV_category`.`title`, `LPV_paymentPicto`.`paymentPicto`, `LPV_paymentPicto`.`paymentTitle`, `LPV_paymentPicto`.`paymentAlt`
-- FROM `LPV_category`
-- LEFT JOIN `avoir`
-- ON `avoir`.`id_LPV_category` = `LPV_category`.`id`
-- LEFT JOIN `LPV_paymentPicto`
-- ON `LPV_paymentPicto`.`id` = `avoir`.`id`;

SELECT *
FROM `LPV_category`
-- LEFT JOIN `LPV_locationPicto`
-- ON `LPV_locationPicto`.`id` = `LPV_category`.`id_LPV_locationPicto`
-- LEFT JOIN `LPV_outputTypePicto`
-- ON `LPV_outputTypePicto`.`id` = `LPV_category`.`id_LPV_outputTypePicto`
-- LEFT JOIN `LPV_ageAdvisePicto`
-- ON `LPV_ageAdvisePicto`.`id` = `LPV_category`.`id_LPV_ageAdvisePicto`
-- LEFT JOIN `LPV_practicabilityPicto`
-- ON `LPV_practicabilityPicto`.`id` = `LPV_category`.`id_LPV_practicabilityPicto`
-- LEFT JOIN `LPV_equipmentPicto`
-- ON `LPV_equipmentPicto`.`id` = `LPV_category`.`id_LPV_equipmentPicto`
;






