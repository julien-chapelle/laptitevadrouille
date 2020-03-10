#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: LPV_outputTypePicto
#------------------------------------------------------------

CREATE TABLE LPV_outputTypePicto(
        `id`              Int  Auto_increment  NOT NULL ,
        `outputTypePicto` Varchar (100) NOT NULL ,
        `outputTypeTitle` Varchar (255) NOT NULL ,
        `outputTypeAlt`   Varchar (255) NOT NULL
	,CONSTRAINT LPV_outputTypePicto_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: LPV_locationPicto
#------------------------------------------------------------

CREATE TABLE LPV_locationPicto(
        `id`            Int  Auto_increment  NOT NULL ,
        `locationPicto` Varchar (100) NOT NULL ,
        `locationTitle` Varchar (255) NOT NULL ,
        `locationAlt`   Varchar (255) NOT NULL
	,CONSTRAINT LPV_locationPicto_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: LPV_practicabilityPicto
#------------------------------------------------------------

CREATE TABLE LPV_practicabilityPicto(
        `id`                  Int  Auto_increment  NOT NULL ,
        `practicabilityPicto` Varchar (100) NOT NULL ,
        `practicabilityTitle` Varchar (255) NOT NULL ,
        `practicabilityAlt`   Varchar (255) NOT NULL
	,CONSTRAINT LPV_practicabilityPicto_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: LPV_ageAdvisePicto
#------------------------------------------------------------

CREATE TABLE LPV_ageAdvisePicto(
        `id`	    Int  Auto_increment  NOT NULL ,
        `ageAdvisePicto` Varchar (100) NOT NULL ,
        `ageAdviseTitle` Varchar (255) NOT NULL ,
        `ageAdviseAlt`   Varchar (255) NOT NULL
	,CONSTRAINT LPV_ageAdvisePicto_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: LPV_equipmentPicto
#------------------------------------------------------------

CREATE TABLE LPV_equipmentPicto(
        `id`             Int  Auto_increment  NOT NULL ,
        `equipmentPicto` Varchar (100) NOT NULL ,
        `equipmentTitle` Varchar (255) NOT NULL ,
        `equipementAlt`  Varchar (255) NOT NULL
	,CONSTRAINT LPV_equipmentPicto_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: LPV_category
#------------------------------------------------------------

CREATE TABLE LPV_category(
        `id`                         Int  Auto_increment  NOT NULL ,
        `title`                      Varchar (100) NOT NULL ,
        `description`                Mediumtext NOT NULL ,
        `moreInfoDescription`        Longtext NOT NULL ,
        `rate_0_3`                   Varchar (255) NOT NULL ,
        `rate_3_11`                  Varchar (255) NOT NULL ,
        `rate_12_plus`               Varchar (255) NOT NULL ,
        `rate_child_disabled`        Varchar (255) ,
        `openedHours`                Longtext NOT NULL ,
        `publication_date`           Varchar (255) NOT NULL ,
        `pics`                       Varchar (100) ,
        `map`                        Varchar (100) ,
        `googleMapAddress`           Varchar (255) ,
        `likes`                      Int NOT NULL ,
        `officialSite`               Varchar (255) NOT NULL ,
        `WalkValidate`               Varchar (50) ,
        `id_creator`                 Int ,
        `id_LPV_locationPicto`       Int NOT NULL ,
        `id_LPV_outputTypePicto`     Int NOT NULL ,
        `id_LPV_ageAdvisePicto`      Int NOT NULL ,
        `id_LPV_practicabilityPicto` Int NOT NULL ,
        `id_LPV_equipmentPicto`      Int
	,CONSTRAINT LPV_category_PK PRIMARY KEY (id)

	,CONSTRAINT LPV_category_LPV_locationPicto_FK FOREIGN KEY (id_LPV_locationPicto) REFERENCES LPV_locationPicto(id)
	,CONSTRAINT LPV_category_LPV_outputTypePicto0_FK FOREIGN KEY (id_LPV_outputTypePicto) REFERENCES LPV_outputTypePicto(id)
	,CONSTRAINT LPV_category_LPV_ageAdvisePicto1_FK FOREIGN KEY (id_LPV_ageAdvisePicto) REFERENCES LPV_ageAdvisePicto(id)
	,CONSTRAINT LPV_category_LPV_practicabilityPicto2_FK FOREIGN KEY (id_LPV_practicabilityPicto) REFERENCES LPV_practicabilityPicto(id)
	,CONSTRAINT LPV_category_LPV_equipmentPicto3_FK FOREIGN KEY (id_LPV_equipmentPicto) REFERENCES LPV_equipmentPicto(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: LPV_paymentPicto
#------------------------------------------------------------

CREATE TABLE LPV_paymentPicto(
        `id`           Int  Auto_increment  NOT NULL ,
        `paymentPicto` Varchar (100) NOT NULL ,
        `paymentTitle` Varchar (255) NOT NULL ,
        `paymentAlt`   Varchar (255) NOT NULL
	,CONSTRAINT LPV_paymentPicto_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: LPV_avatar
#------------------------------------------------------------

CREATE TABLE LPV_avatar(
        `id`         Int  Auto_increment  NOT NULL ,
        `avatarName` Varchar (100) NOT NULL
	,CONSTRAINT LPV_avatar_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: LPV_user
#------------------------------------------------------------

CREATE TABLE LPV_user(
        `id`            Int  Auto_increment  NOT NULL ,
        `pseudo`        Varchar (100) NOT NULL ,
        `mail`          Varchar (255) NOT NULL ,
        `password`      Varchar (100) NOT NULL ,
        `avatar`        Varchar (255) ,
        `status`        Varchar (50) NOT NULL ,
        `id_LPV_avatar` Int
	,CONSTRAINT LPV_user_PK PRIMARY KEY (id)

	,CONSTRAINT LPV_user_LPV_avatar_FK FOREIGN KEY (id_LPV_avatar) REFERENCES LPV_avatar(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Avoir
#------------------------------------------------------------

CREATE TABLE Avoir(
        `id`              Int NOT NULL ,
        `id_LPV_category` Int NOT NULL
	,CONSTRAINT Avoir_PK PRIMARY KEY (id,id_LPV_category)

	,CONSTRAINT Avoir_LPV_paymentPicto_FK FOREIGN KEY (id) REFERENCES LPV_paymentPicto(id)
	,CONSTRAINT Avoir_LPV_category0_FK FOREIGN KEY (id_LPV_category) REFERENCES LPV_category(id)
)ENGINE=InnoDB;

