-- CREATE DATABASE `test` CHARACTER SET 'utf8';

USE `laptitevadrouille`;

-- CREATE TABLE `User` (
--     `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
--     `pseudo` VARCHAR(100) NOT NULL,
--     `mail` VARCHAR(255) NOT NULL,
--     `password` VARCHAR(100) NOT NULL,
--     `avatar` VARCHAR(255),
--     PRIMARY KEY (`id`)
-- )
-- ENGINE=INNODB;

-- INSERT INTO `user` 
-- VALUES (NULL, 'pseudo', 'mail', 'passeword', NULL);

-- SELECT `mail`, `password`
-- FROM `user`;

-- SELECT `pseudo`, `mail`, `password`
--     FROM `user`
--     WHERE `mail`='jibus@hotmail.fr' 
--     AND `password`='1234';

-- SELECT `LPV_category`.`id`,`LPV_category`.`title`, `LPV_category`.`description`,`LPV_category`.`moreInfoDescription`,`LPV_category`.`rate_0_3`,`LPV_category`.`rate_3_11`,`LPV_category`.`rate_12_plus`,`LPV_category`.`rate_child_disabled`,`LPV_category`.`openedHours`,`LPV_category`.`publication_date`,`LPV_category`.`pics`,`LPV_category`.`map`,`LPV_category`.`googleMapAddress`,`LPV_category`.`likes`,`LPV_category`.`officialSite`,`LPV_locationPicto`.`locationPicto`,`LPV_locationPicto`.`locationTitle`,`LPV_locationPicto`.`locationAlt`,`LPV_outputTypePicto`.`outputTypePicto`,`LPV_outputTypePicto`.`outputTypeTitle`,`LPV_outputTypePicto`.`outputTypeAlt`,`LPV_ageAdvisePicto`.`ageAdvisePicto`,`LPV_ageAdvisePicto`.`ageAdviseTitle`,`LPV_ageAdvisePicto`.`ageAdviseAlt`,`LPV_practicabilityPicto`.`practicabilityPicto`,`LPV_practicabilityPicto`.`practicabilityTitle`,`LPV_practicabilityPicto`.`practicabilityAlt`,`LPV_equipmentPicto`.`equipmentPicto`,`LPV_equipmentPicto`.`equipmentTitle`,`LPV_equipmentPicto`.`equipmentAlt`
-- FROM `LPV_category`
-- LEFT JOIN `LPV_locationPicto`
-- ON `LPV_category`.`id_LPV_locationPicto` = `LPV_locationPicto`.`id`
-- LEFT JOIN `LPV_outputTypePicto`
-- ON `LPV_outputTypePicto`.`id` = `LPV_category`.`id_LPV_outputTypePicto`
-- LEFT JOIN `LPV_ageAdvisePicto`
-- ON `LPV_ageAdvisePicto`.`id` = `LPV_category`.`id_LPV_ageAdvisePicto`
-- LEFT JOIN `LPV_practicabilityPicto`
-- ON `LPV_practicabilityPicto`.`id` = `LPV_category`.`id_LPV_practicabilityPicto`
-- LEFT JOIN `LPV_equipmentPicto`
-- ON `LPV_equipmentPicto`.`id` = `LPV_category`.`id_LPV_equipmentPicto`;

-- SELECT `LPV_category`.`id`,`LPV_category`.`title`, `LPV_paymentPicto`.`paymentPicto`, `LPV_paymentPicto`.`paymentTitle`, `LPV_paymentPicto`.`paymentAlt`
-- FROM `LPV_category`
-- LEFT JOIN `avoir`
-- ON `avoir`.`id_LPV_category` = `LPV_category`.`id`
-- LEFT JOIN `LPV_paymentPicto`
-- ON `LPV_paymentPicto`.`id` = `avoir`.`id`;

-- SELECT `status`
-- FROM `LPV_user`
-- WHERE `pseudo` = 'Paul'
-- ;

-- SELECT `LPV_user`.`pseudo`,`LPV_user`.`id_LPV_avatar`,`LPV_avatar`.`avatarName`,`LPV_avatar`.`avatarTitle
-- `,`LPV_avatar`.`avatarAlt`
--         FROM `LPV_user`
--         LEFT JOIN `LPV_avatar`
--         ON `LPV_user`.`id_LPV_avatar` = `LPV_avatar`.`id`;

-- SELECT * FROM `LPV_user`
--         LEFT JOIN `LPV_avatar`
--         ON `LPV_user`.`id_LPV_avatar` = `LPV_avatar`.`id`
--         WHERE `LPV_user`.`id` = 19;

-- SELECT `LPV_user`.`id`,`LPV_user`.`pseudo`,`LPV_user`.`mail`,`LPV_user`.`password`,`LPV_user`.`status`,`LPV_user`.`id_LPV_avatar`,`LPV_avatar`.`avatarName`,`LPV_avatar`.`avatarTitle`,`LPV_avatar`.`avatarAlt` FROM `LPV_user`
--         LEFT JOIN `LPV_avatar`
--         ON `LPV_user`.`id_LPV_avatar` = `LPV_avatar`.`id`
--         WHERE `LPV_user`.`id` = 12;
-- SELECT count(`id`) AS `countId` FROM `lpv_category` WHERE `walkValidate` = 'Validate';

-- SELECT `LPV_category`.`id`,`LPV_category`.`title`,`LPV_category`.`walkValidate`, `LPV_paymentPicto`.`paymentPicto`, `LPV_paymentPicto`.`paymentTitle`, `LPV_paymentPicto`.`paymentAlt`
--         FROM `LPV_category`
--         LEFT JOIN `avoir`
--         ON `avoir`.`id_LPV_category` = `LPV_category`.`id`
--         LEFT JOIN `LPV_paymentPicto`
--         ON `LPV_paymentPicto`.`id` = `avoir`.`id`
--         WHERE `LPV_category`.`id` = 1;

SELECT count(`id`) AS `countId` 
        FROM `lpv_category` 
        WHERE `walkValidate` IS NULL;





