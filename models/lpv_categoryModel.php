<?php

class Lpv_category extends Lpv_database
{
    //Attributs////////////////////////////////////////
    private $_id;
    private $_title;
    private $_description;
    private $_moreInfoDescription;
    private $_rate_0_3;
    private $_rate_3_11;
    private $_rate_12_plus;
    private $_rate_child_disabled;
    private $_openedHour;
    private $_publication_date;
    private $_pics;
    private $_map;
    private $_googleMapAddress;
    private $_likes;
    private $_officialSite;
    private $_idCreator;
    private $_walkValidate;
    private $_id_LPV_locationPicto;
    private $_id_LPV_outputTypePicto;
    private $_id_LPV_ageAdvisePicto;
    private $_id_LPV_practicabilityPicto;
    private $_id_LPV_equipmentPicto;

    //Méthodes d'appels Get/set//////////////////////////
    //ID
    public function getId()
    {
        return $this->_id;
    }

    public function setId($id)
    {
        $this->_id = $id;
    }
    //TITLE
    public function getTitle()
    {
        return $this->_title;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
    }
    //DESCRIPTION
    public function getDescription()
    {
        return $this->_description;
    }

    public function setDescription($description)
    {
        $this->_description = $description;
    }
    //FULL DESCRIPTION
    public function getMoreInfoDescription()
    {
        return $this->_moreInfoDescription;
    }

    public function setMoreInfoDescription($moreInfoDescription)
    {
        $this->_moreInfoDescription = $moreInfoDescription;
    }
    //RATE 0-3
    public function getRate03()
    {
        return $this->_rate_0_3;
    }

    public function setRate03($rate_0_3)
    {
        $this->_rate_0_3 = $rate_0_3;
    }
    //RATE 3-11
    public function getRate311()
    {
        return $this->_rate_3_11;
    }

    public function setRate311($rate_3_11)
    {
        $this->_rate_3_11 = $rate_3_11;
    }
    //RATE 12-PLUS
    public function getRate12Plus()
    {
        return $this->_rate_12_plus;
    }

    public function setRate12Plus($rate_12_plus)
    {
        $this->_rate_12_plus = $rate_12_plus;
    }
    //RATE CHILD DISABLED
    public function getRateChildDisabled()
    {
        return $this->_rate_child_disabled;
    }

    public function setRateChildDisabled($rate_child_disabled)
    {
        $this->_rate_child_disabled = $rate_child_disabled;
    }
    //OPENED HOUR
    public function getOpenedHour()
    {
        return $this->_openedHour;
    }

    public function setOpenedHour($openedHour)
    {
        $this->_openedHour = $openedHour;
    }
    //PUBLICATION DATE
    public function getPublicationDate()
    {
        return $this->_publication_date;
    }

    public function setPublicationDate($publication_date)
    {
        $this->_publication_date = $publication_date;
    }
    //PICS
    public function getPics()
    {
        return $this->_pics;
    }

    public function setPics($pics)
    {
        $this->_pics = $pics;
    }
    //MAP
    public function getMap()
    {
        return $this->_map;
    }

    public function setMap($map)
    {
        $this->_map = $map;
    }
    //GOOGLE MAP ADDRESS
    public function getGoogleMapAddress()
    {
        return $this->_googleMapAddress;
    }

    public function setGoogleMapAddress($googleMapAddress)
    {
        $this->_googleMapAddress = $googleMapAddress;
    }
    //LIKES
    public function getLikes()
    {
        return $this->_likes;
    }

    public function setLikes($likes)
    {
        $this->_likes = $likes;
    }
    //OFFICIAL SITE
    public function getOfficialSite()
    {
        return $this->_officialSite;
    }

    public function setOfficialSite($officialSite)
    {
        $this->_officialSite = $officialSite;
    }
    //ID CREATOR
    public function getIdCreator()
    {
        return $this->_idCreator;
    }

    public function setIdCreator($idCreator)
    {
        $this->_idCreator = $idCreator;
    }
    //WALK VALIDATE
    public function getWalkValidate()
    {
        return $this->_walkValidate;
    }

    public function setWalkValidate($walkValidate)
    {
        $this->_walkValidate = $walkValidate;
    }
    //FOREIGN KEY ID LOCATION PICTO
    public function getIdLpvLocationPicto()
    {
        return $this->_id_LPV_locationPicto;
    }

    public function setIdLpvLocationPicto($id_LPV_locationPicto)
    {
        $this->_id_LPV_locationPicto = $id_LPV_locationPicto;
    }
    //FOREIGN KEY ID OUTPUT TYPE PICTO
    public function getIdLpvOutputTypePicto()
    {
        return $this->_id_LPV_outputTypePicto;
    }

    public function setIdLpvOutputTypePicto($id_LPV_outputTypePicto)
    {
        $this->_id_LPV_outputTypePicto = $id_LPV_outputTypePicto;
    }
    //FOREIGN KEY ID AGE ADVISE PICTO
    public function getIdLpvAgeAdvisePicto()
    {
        return $this->_id_LPV_ageAdvisePicto;
    }

    public function setIdLpvAgeAdvisePicto($id_LPV_ageAdvisePicto)
    {
        $this->_id_LPV_ageAdvisePicto = $id_LPV_ageAdvisePicto;
    }
    //FOREIGN KEY ID PRACTICABILITY PICTO
    public function getIdLpvPracticabilityPicto()
    {
        return $this->_id_LPV_practicabilityPicto;
    }

    public function setIdLpvPracticabilityPicto($id_LPV_practicabilityPicto)
    {
        $this->_id_LPV_practicabilityPicto = $id_LPV_practicabilityPicto;
    }
    //FOREIGN KEY ID PRACTICABILITY PICTO
    public function getIdLpvEquipmentPicto()
    {
        return $this->_id_LPV_equipmentPicto;
    }

    public function setIdLpvEquipmentPicto($id_LPV_equipmentPicto)
    {
        $this->_id_LPV_equipmentPicto = $id_LPV_equipmentPicto;
    }

    //Constructeur
    public function __construct()
    {
        parent::__construct();
    }

    //Méthodes////////////////////////////////////////////////////////
    //ADD WALK
    public function addWalk()
    {
        $createWalkQuery = "INSERT INTO `LPV_category`(`id`, `title`, `description`, `moreInfoDescription`, `rate_0_3`, `rate_3_11`, `rate_12_plus`, `rate_child_disabled`, `openedHours`, `publication_date`, `pics`, `map`, `googleMapAddress`, `likes`, `officialSite`, `walkValidate`, `id_creator`, `id_LPV_locationPicto`, `id_LPV_outputTypePicto`, `id_LPV_ageAdvisePicto`, `id_LPV_practicabilityPicto`, `id_LPV_equipmentPicto`)
        VALUES (null,:walkTitle, :walkShortDescription, :walkCompleteDescription, :walkRate_0_3OfWalk, :walkRate_3_11OfWalk,:walkRate_12_plusOfWalk,:walkRate_child_disabledOfWalk,:walkOpenedHoursOfWalk,:walkPublicationDate, null, null, null,0,:walkOfficialSiteOfWalk,null,:idCreator,:walkLocationPictoOfWalk,:walkOutputTypePictoOfWalk,:walkAgeAdvisePictoOfWalk,:walkPracticabilityPictoOfWalk,:walkBabyDiaperPictoOfWalk)";

        $createWalkResult = $this->db->prepare($createWalkQuery);
        $createWalkResult->bindValue(':walkTitle', $this->getTitle(), PDO::PARAM_STR);
        $createWalkResult->bindValue(':walkShortDescription', $this->getDescription(), PDO::PARAM_STR);
        $createWalkResult->bindValue(':walkCompleteDescription', $this->getMoreInfoDescription(), PDO::PARAM_STR);
        $createWalkResult->bindValue(':walkRate_0_3OfWalk', $this->getRate03(), PDO::PARAM_STR);
        $createWalkResult->bindValue(':walkRate_3_11OfWalk', $this->getRate311(), PDO::PARAM_STR);
        $createWalkResult->bindValue(':walkRate_12_plusOfWalk', $this->getRate12Plus(), PDO::PARAM_STR);
        $createWalkResult->bindValue(':walkRate_child_disabledOfWalk', $this->getRateChildDisabled(), PDO::PARAM_STR);
        $createWalkResult->bindValue(':walkOpenedHoursOfWalk', $this->getOpenedHour(), PDO::PARAM_STR);
        $createWalkResult->bindValue(':walkPublicationDate', $this->getPublicationDate(), PDO::PARAM_STR);
        $createWalkResult->bindValue(':walkOfficialSiteOfWalk', $this->getOfficialSite(), PDO::PARAM_STR);
        $createWalkResult->bindValue(':idCreator', $this->getIdCreator(), PDO::PARAM_INT);
        $createWalkResult->bindValue(':walkLocationPictoOfWalk', $this->getIdLpvLocationPicto(), PDO::PARAM_INT);
        $createWalkResult->bindValue(':walkOutputTypePictoOfWalk', $this->getIdLpvOutputTypePicto(), PDO::PARAM_INT);
        $createWalkResult->bindValue(':walkAgeAdvisePictoOfWalk', $this->getIdLpvAgeAdvisePicto(), PDO::PARAM_INT);
        $createWalkResult->bindValue(':walkPracticabilityPictoOfWalk', $this->getIdLpvPracticabilityPicto(), PDO::PARAM_INT);
        $createWalkResult->bindValue(':walkBabyDiaperPictoOfWalk', $this->getIdLpvEquipmentPicto(), PDO::PARAM_INT);
        $createWalkResult->execute();
        $lastWalkId = $this->db->lastInsertId();
        return $lastWalkId;
    }
    //CLASSIC LIST
    public function classicListWalk()
    {
        $classicListWalkQuery = "SELECT `LPV_category`.`id`,`LPV_category`.`title`, `LPV_category`.`description`,`LPV_category`.`moreInfoDescription`,`LPV_category`.`rate_0_3`,`LPV_category`.`rate_3_11`,`LPV_category`.`rate_12_plus`,`LPV_category`.`rate_child_disabled`,`LPV_category`.`openedHours`,`LPV_category`.`publication_date`,`LPV_category`.`pics`,`LPV_category`.`map`,`LPV_category`.`googleMapAddress`,`LPV_category`.`likes`,`LPV_category`.`officialSite`,`LPV_category`.`walkValidate`,`LPV_category`.`id_creator`,`LPV_category`.`id_LPV_equipmentPicto`,`LPV_locationPicto`.`locationPicto`,`LPV_locationPicto`.`locationTitle`,`LPV_locationPicto`.`locationAlt`,`LPV_outputTypePicto`.`outputTypePicto`,`LPV_outputTypePicto`.`outputTypeTitle`,`LPV_outputTypePicto`.`outputTypeAlt`,`LPV_ageAdvisePicto`.`ageAdvisePicto`,`LPV_ageAdvisePicto`.`ageAdviseTitle`,`LPV_ageAdvisePicto`.`ageAdviseAlt`,`LPV_practicabilityPicto`.`practicabilityPicto`,`LPV_practicabilityPicto`.`practicabilityTitle`,`LPV_practicabilityPicto`.`practicabilityAlt`,`LPV_equipmentPicto`.`equipmentPicto`,`LPV_equipmentPicto`.`equipmentTitle`,`LPV_equipmentPicto`.`equipmentAlt`,`LPV_user`.`pseudo`
        FROM `LPV_category`
        LEFT JOIN `LPV_locationPicto`
        ON `LPV_category`.`id_LPV_locationPicto` = `LPV_locationPicto`.`id`
        LEFT JOIN `LPV_outputTypePicto`
        ON `LPV_outputTypePicto`.`id` = `LPV_category`.`id_LPV_outputTypePicto`
        LEFT JOIN `LPV_ageAdvisePicto`
        ON `LPV_ageAdvisePicto`.`id` = `LPV_category`.`id_LPV_ageAdvisePicto`
        LEFT JOIN `LPV_practicabilityPicto`
        ON `LPV_practicabilityPicto`.`id` = `LPV_category`.`id_LPV_practicabilityPicto`
        LEFT JOIN `LPV_equipmentPicto`
        ON `LPV_equipmentPicto`.`id` = `LPV_category`.`id_LPV_equipmentPicto`
        LEFT JOIN `LPV_user`
        ON `LPV_user`.`id` = `LPV_category`.`id_creator`";

        $classicListWalkResult = $this->db->prepare($classicListWalkQuery);
        if ($classicListWalkResult->execute()) {
            $dataClassicListWalk = $classicListWalkResult->fetchAll(PDO::FETCH_ASSOC);
            return $dataClassicListWalk;
        }
    }
    //LIST VALIDATE WALK + PAGING
    public function listWalk($limite, $debut)
    {
        $listValWalkQuery = "SELECT `LPV_category`.`id`,`LPV_category`.`title`, `LPV_category`.`description`,`LPV_category`.`moreInfoDescription`,`LPV_category`.`rate_0_3`,`LPV_category`.`rate_3_11`,`LPV_category`.`rate_12_plus`,`LPV_category`.`rate_child_disabled`,`LPV_category`.`openedHours`,`LPV_category`.`publication_date`,`LPV_category`.`pics`,`LPV_category`.`map`,`LPV_category`.`googleMapAddress`,`LPV_category`.`likes`,`LPV_category`.`officialSite`,`LPV_category`.`walkValidate`,`LPV_category`.`id_creator`,`LPV_category`.`id_LPV_equipmentPicto`,`LPV_locationPicto`.`locationPicto`,`LPV_locationPicto`.`locationTitle`,`LPV_locationPicto`.`locationAlt`,`LPV_outputTypePicto`.`outputTypePicto`,`LPV_outputTypePicto`.`outputTypeTitle`,`LPV_outputTypePicto`.`outputTypeAlt`,`LPV_ageAdvisePicto`.`ageAdvisePicto`,`LPV_ageAdvisePicto`.`ageAdviseTitle`,`LPV_ageAdvisePicto`.`ageAdviseAlt`,`LPV_practicabilityPicto`.`practicabilityPicto`,`LPV_practicabilityPicto`.`practicabilityTitle`,`LPV_practicabilityPicto`.`practicabilityAlt`,`LPV_equipmentPicto`.`equipmentPicto`,`LPV_equipmentPicto`.`equipmentTitle`,`LPV_equipmentPicto`.`equipmentAlt`,`LPV_user`.`pseudo`
        FROM `LPV_category`
        LEFT JOIN `LPV_locationPicto`
        ON `LPV_category`.`id_LPV_locationPicto` = `LPV_locationPicto`.`id`
        LEFT JOIN `LPV_outputTypePicto`
        ON `LPV_outputTypePicto`.`id` = `LPV_category`.`id_LPV_outputTypePicto`
        LEFT JOIN `LPV_ageAdvisePicto`
        ON `LPV_ageAdvisePicto`.`id` = `LPV_category`.`id_LPV_ageAdvisePicto`
        LEFT JOIN `LPV_practicabilityPicto`
        ON `LPV_practicabilityPicto`.`id` = `LPV_category`.`id_LPV_practicabilityPicto`
        LEFT JOIN `LPV_equipmentPicto`
        ON `LPV_equipmentPicto`.`id` = `LPV_category`.`id_LPV_equipmentPicto`
        LEFT JOIN `LPV_user`
        ON `LPV_user`.`id` = `LPV_category`.`id_creator`
        WHERE `walkValidate` = 'Validate'
        LIMIT :limite OFFSET :debut";

        $listValWalkResult = $this->db->prepare($listValWalkQuery);
        $listValWalkResult->bindValue(':limite', $limite, PDO::PARAM_INT);
        $listValWalkResult->bindValue(':debut', $debut, PDO::PARAM_INT);
        if ($listValWalkResult->execute()) {
            $dataListValWalk = $listValWalkResult->fetchAll(PDO::FETCH_ASSOC);
            return $dataListValWalk;
        }
    }
    //LIST UNVALIDATE WALK + PAGING
    public function listUnvalWalk($limite, $debut)
    {
        $listUnvalWalkQuery = "SELECT `LPV_category`.`id`,`LPV_category`.`title`, `LPV_category`.`description`,`LPV_category`.`moreInfoDescription`,`LPV_category`.`rate_0_3`,`LPV_category`.`rate_3_11`,`LPV_category`.`rate_12_plus`,`LPV_category`.`rate_child_disabled`,`LPV_category`.`openedHours`,`LPV_category`.`publication_date`,`LPV_category`.`pics`,`LPV_category`.`map`,`LPV_category`.`googleMapAddress`,`LPV_category`.`likes`,`LPV_category`.`officialSite`,`LPV_category`.`walkValidate`,`LPV_category`.`id_creator`,`LPV_category`.`id_LPV_equipmentPicto`,`LPV_locationPicto`.`locationPicto`,`LPV_locationPicto`.`locationTitle`,`LPV_locationPicto`.`locationAlt`,`LPV_outputTypePicto`.`outputTypePicto`,`LPV_outputTypePicto`.`outputTypeTitle`,`LPV_outputTypePicto`.`outputTypeAlt`,`LPV_ageAdvisePicto`.`ageAdvisePicto`,`LPV_ageAdvisePicto`.`ageAdviseTitle`,`LPV_ageAdvisePicto`.`ageAdviseAlt`,`LPV_practicabilityPicto`.`practicabilityPicto`,`LPV_practicabilityPicto`.`practicabilityTitle`,`LPV_practicabilityPicto`.`practicabilityAlt`,`LPV_equipmentPicto`.`equipmentPicto`,`LPV_equipmentPicto`.`equipmentTitle`,`LPV_equipmentPicto`.`equipmentAlt`,`LPV_user`.`pseudo`
        FROM `LPV_category`
        LEFT JOIN `LPV_locationPicto`
        ON `LPV_category`.`id_LPV_locationPicto` = `LPV_locationPicto`.`id`
        LEFT JOIN `LPV_outputTypePicto`
        ON `LPV_outputTypePicto`.`id` = `LPV_category`.`id_LPV_outputTypePicto`
        LEFT JOIN `LPV_ageAdvisePicto`
        ON `LPV_ageAdvisePicto`.`id` = `LPV_category`.`id_LPV_ageAdvisePicto`
        LEFT JOIN `LPV_practicabilityPicto`
        ON `LPV_practicabilityPicto`.`id` = `LPV_category`.`id_LPV_practicabilityPicto`
        LEFT JOIN `LPV_equipmentPicto`
        ON `LPV_equipmentPicto`.`id` = `LPV_category`.`id_LPV_equipmentPicto`
        LEFT JOIN `LPV_user`
        ON `LPV_user`.`id` = `LPV_category`.`id_creator`
        WHERE `walkValidate` IS NULL OR `walkValidate` = ''
        LIMIT :limite OFFSET :debut";

        $listUnvalWalkResult = $this->db->prepare($listUnvalWalkQuery);
        $listUnvalWalkResult->bindValue(':limite', $limite, PDO::PARAM_INT);
        $listUnvalWalkResult->bindValue(':debut', $debut, PDO::PARAM_INT);
        if ($listUnvalWalkResult->execute()) {
            $dataListUnvalWalk = $listUnvalWalkResult->fetchAll(PDO::FETCH_ASSOC);
            return $dataListUnvalWalk;
        }
    }
    //COUNT ID VALIDATE WALK ON DATABASE
    public function countWalkValidate()
    {
        $countWalkValQuery = "SELECT count(`id`) AS `countId`
        FROM `lpv_category` 
        WHERE `walkValidate` = 'Validate'";

        $countWalkValResult = $this->db->prepare($countWalkValQuery);
        if ($countWalkValResult->execute()) {
            $dataCountValWalk = $countWalkValResult->fetchAll(PDO::FETCH_ASSOC);
            return $dataCountValWalk;
        }
    }
    //COUNT ID UNVALIDATE WALK ON DATABASE
    public function countWalkUnvalidate()
    {
        $countWalkUnvalQuery = "SELECT count(`id`) AS `countId` 
        FROM `lpv_category` 
        WHERE `walkValidate` IS NULL
        OR `walkValidate` = ''";

        $countWalkUnvalResult = $this->db->prepare($countWalkUnvalQuery);
        if ($countWalkUnvalResult->execute()) {
            $dataCountUnvalWalk = $countWalkUnvalResult->fetchAll(PDO::FETCH_ASSOC);
            return $dataCountUnvalWalk;
        }
    }
    //WALK DETAIL
    public function detailWalk()
    {
        $detailWalkQuery = "SELECT `LPV_category`.`id`,`LPV_category`.`title`, `LPV_category`.`description`,`LPV_category`.`moreInfoDescription`,`LPV_category`.`rate_0_3`,`LPV_category`.`rate_3_11`,`LPV_category`.`rate_12_plus`,`LPV_category`.`rate_child_disabled`,`LPV_category`.`openedHours`,`LPV_category`.`publication_date`,`LPV_category`.`pics`,`LPV_category`.`map`,`LPV_category`.`googleMapAddress`,`LPV_category`.`likes`,`LPV_category`.`officialSite`,`LPV_category`.`walkValidate`,`LPV_category`.`id_creator`,`LPV_category`.`id_LPV_equipmentPicto`,`LPV_locationPicto`.`locationPicto`,`LPV_locationPicto`.`locationTitle`,`LPV_locationPicto`.`locationAlt`,`LPV_outputTypePicto`.`outputTypePicto`,`LPV_outputTypePicto`.`outputTypeTitle`,`LPV_outputTypePicto`.`outputTypeAlt`,`LPV_ageAdvisePicto`.`ageAdvisePicto`,`LPV_ageAdvisePicto`.`ageAdviseTitle`,`LPV_ageAdvisePicto`.`ageAdviseAlt`,`LPV_practicabilityPicto`.`practicabilityPicto`,`LPV_practicabilityPicto`.`practicabilityTitle`,`LPV_practicabilityPicto`.`practicabilityAlt`,`LPV_equipmentPicto`.`equipmentPicto`,`LPV_equipmentPicto`.`equipmentTitle`,`LPV_equipmentPicto`.`equipmentAlt`,`LPV_user`.`pseudo`
        FROM `LPV_category`
        LEFT JOIN `LPV_locationPicto`
        ON `LPV_category`.`id_LPV_locationPicto` = `LPV_locationPicto`.`id`
        LEFT JOIN `LPV_outputTypePicto`
        ON `LPV_outputTypePicto`.`id` = `LPV_category`.`id_LPV_outputTypePicto`
        LEFT JOIN `LPV_ageAdvisePicto`
        ON `LPV_ageAdvisePicto`.`id` = `LPV_category`.`id_LPV_ageAdvisePicto`
        LEFT JOIN `LPV_practicabilityPicto`
        ON `LPV_practicabilityPicto`.`id` = `LPV_category`.`id_LPV_practicabilityPicto`
        LEFT JOIN `LPV_equipmentPicto`
        ON `LPV_equipmentPicto`.`id` = `LPV_category`.`id_LPV_equipmentPicto`
        LEFT JOIN `LPV_user`
        ON `LPV_user`.`id` = `LPV_category`.`id_creator`
        WHERE `LPV_category`.`id` = :currentId";

        $detailWalkResult = $this->db->prepare($detailWalkQuery);
        $detailWalkResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        if ($detailWalkResult->execute()) {
            $detailWalk = $detailWalkResult->fetchAll(PDO::FETCH_ASSOC);
            return $detailWalk;
        };
    }
    //WALK DETAIL PAYMENT
    public function detailPaymentWalk()
    {
        $detailPaymentWalkQuery = "SELECT `LPV_category`.`id`,`LPV_category`.`title`,`LPV_category`.`walkValidate`, `LPV_paymentPicto`.`paymentPicto`, `LPV_paymentPicto`.`paymentTitle`, `LPV_paymentPicto`.`paymentAlt`
        FROM `LPV_category`
        LEFT JOIN `avoir`
        ON `avoir`.`id_LPV_category` = `LPV_category`.`id`
        LEFT JOIN `LPV_paymentPicto`
        ON `LPV_paymentPicto`.`id` = `avoir`.`id`
        WHERE `LPV_category`.`id` = :currentId";

        $detailPaymentWalkResult = $this->db->prepare($detailPaymentWalkQuery);
        $detailPaymentWalkResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        if ($detailPaymentWalkResult->execute()) {
            $detailPaymentWalk = $detailPaymentWalkResult->fetchAll(PDO::FETCH_ASSOC);
            return $detailPaymentWalk;
        };
    }
    //SEARCH WALK
    public function searchWalk()
    {
        $searchTitleQuery = "SELECT `LPV_category`.`id`,`LPV_category`.`title`, `LPV_category`.`description`,`LPV_category`.`moreInfoDescription`,`LPV_category`.`rate_0_3`,`LPV_category`.`rate_3_11`,`LPV_category`.`rate_12_plus`,`LPV_category`.`rate_child_disabled`,`LPV_category`.`openedHours`,`LPV_category`.`publication_date`,`LPV_category`.`pics`,`LPV_category`.`map`,`LPV_category`.`googleMapAddress`,`LPV_category`.`likes`,`LPV_category`.`officialSite`,`LPV_category`.`walkValidate`,`LPV_category`.`id_creator`,`LPV_category`.`id_LPV_equipmentPicto`,`LPV_locationPicto`.`locationPicto`,`LPV_locationPicto`.`locationTitle`,`LPV_locationPicto`.`locationAlt`,`LPV_outputTypePicto`.`outputTypePicto`,`LPV_outputTypePicto`.`outputTypeTitle`,`LPV_outputTypePicto`.`outputTypeAlt`,`LPV_ageAdvisePicto`.`ageAdvisePicto`,`LPV_ageAdvisePicto`.`ageAdviseTitle`,`LPV_ageAdvisePicto`.`ageAdviseAlt`,`LPV_practicabilityPicto`.`practicabilityPicto`,`LPV_practicabilityPicto`.`practicabilityTitle`,`LPV_practicabilityPicto`.`practicabilityAlt`,`LPV_equipmentPicto`.`equipmentPicto`,`LPV_equipmentPicto`.`equipmentTitle`,`LPV_equipmentPicto`.`equipmentAlt`,`LPV_user`.`pseudo`
        FROM `LPV_category`
        LEFT JOIN `LPV_locationPicto`
        ON `LPV_category`.`id_LPV_locationPicto` = `LPV_locationPicto`.`id`
        LEFT JOIN `LPV_outputTypePicto`
        ON `LPV_outputTypePicto`.`id` = `LPV_category`.`id_LPV_outputTypePicto`
        LEFT JOIN `LPV_ageAdvisePicto`
        ON `LPV_ageAdvisePicto`.`id` = `LPV_category`.`id_LPV_ageAdvisePicto`
        LEFT JOIN `LPV_practicabilityPicto`
        ON `LPV_practicabilityPicto`.`id` = `LPV_category`.`id_LPV_practicabilityPicto`
        LEFT JOIN `LPV_equipmentPicto`
        ON `LPV_equipmentPicto`.`id` = `LPV_category`.`id_LPV_equipmentPicto`
        LEFT JOIN `LPV_user`
        ON `LPV_user`.`id` = `LPV_category`.`id_creator`
        WHERE `title` LIKE :searchTitle";

        $searchTitleResult = $this->db->prepare($searchTitleQuery);
        $searchTitleResult->bindValue(':searchTitle', '%' . $this->getTitle() . '%', PDO::PARAM_STR);
        if ($searchTitleResult->execute()) {
            $dataSearchWalk = $searchTitleResult->fetchAll(PDO::FETCH_ASSOC);
            return $dataSearchWalk;
        };
    }
    //COUNT ID SEARCH DATABASE
    public function countSearchWalk()
    {
        $countSearchWalkQuery = "SELECT count(`id`) AS `countSearchId` FROM `LPV_category`
        WHERE `title` LIKE :searchTitle";

        $countSearchWalkResult = $this->db->prepare($countSearchWalkQuery);
        $countSearchWalkResult->bindValue(':searchTitle', '%' . $this->getTitle() . '%', PDO::PARAM_STR);
        if ($countSearchWalkResult->execute()) {
            $dataCountSearchWalk = $countSearchWalkResult->fetchAll(PDO::FETCH_ASSOC);
            return $dataCountSearchWalk;
        }
    }
    //EDIT WALK
    public function editWalk()
    {
        $editWalkQuery = "UPDATE `LPV_category`
        SET `title` = :walkTitle, `description` = :walkShortDescription,`moreInfoDescription` = :walkCompleteDescription,`rate_0_3` = :walkRate_0_3OfWalk, `rate_3_11` = :walkRate_3_11OfWalk, `rate_12_plus` = :walkRate_12_plusOfWalk, `rate_child_disabled` = :walkRate_child_disabledOfWalk, `openedHours` = :walkOpenedHoursOfWalk, `pics` = :walkPics, `map` = :walkMap, `googleMapAddress` = :walkGoogleMapAddress, `officialSite` = :walkOfficialSiteOfWalk, `walkValidate` = :walkValidate, `id_LPV_locationPicto` = :walkLocationPictoOfWalk, `id_LPV_outputTypePicto` = :walkOutputTypePictoOfWalk, `id_LPV_ageAdvisePicto` = :walkAgeAdvisePictoOfWalk, `id_LPV_practicabilityPicto` = :walkPracticabilityPictoOfWalk, `id_LPV_equipmentPicto` = :walkBabyDiaperPictoOfWalk
        WHERE `id` = :currentId";

        $editWalkResult = $this->db->prepare($editWalkQuery);
        $editWalkResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        $editWalkResult->bindValue(':walkTitle', $this->getTitle(), PDO::PARAM_STR);
        $editWalkResult->bindValue(':walkShortDescription', $this->getDescription(), PDO::PARAM_STR);
        $editWalkResult->bindValue(':walkCompleteDescription', $this->getMoreInfoDescription(), PDO::PARAM_STR);
        $editWalkResult->bindValue(':walkRate_0_3OfWalk', $this->getRate03(), PDO::PARAM_STR);
        $editWalkResult->bindValue(':walkRate_3_11OfWalk', $this->getRate311(), PDO::PARAM_STR);
        $editWalkResult->bindValue(':walkRate_12_plusOfWalk', $this->getRate12Plus(), PDO::PARAM_STR);
        $editWalkResult->bindValue(':walkRate_child_disabledOfWalk', $this->getRateChildDisabled(), PDO::PARAM_STR);
        $editWalkResult->bindValue(':walkOpenedHoursOfWalk', $this->getOpenedHour(), PDO::PARAM_STR);
        $editWalkResult->bindValue(':walkPics', $this->getPics(), PDO::PARAM_STR);
        $editWalkResult->bindValue(':walkMap', $this->getMap(), PDO::PARAM_STR);
        $editWalkResult->bindValue(':walkGoogleMapAddress', $this->getGoogleMapAddress(), PDO::PARAM_STR);
        $editWalkResult->bindValue(':walkOfficialSiteOfWalk', $this->getOfficialSite(), PDO::PARAM_STR);
        $editWalkResult->bindValue(':walkValidate', $this->getWalkValidate(), PDO::PARAM_STR);
        $editWalkResult->bindValue(':walkLocationPictoOfWalk', $this->getIdLpvLocationPicto(), PDO::PARAM_INT);
        $editWalkResult->bindValue(':walkOutputTypePictoOfWalk', $this->getIdLpvOutputTypePicto(), PDO::PARAM_INT);
        $editWalkResult->bindValue(':walkAgeAdvisePictoOfWalk', $this->getIdLpvAgeAdvisePicto(), PDO::PARAM_INT);
        $editWalkResult->bindValue(':walkPracticabilityPictoOfWalk', $this->getIdLpvPracticabilityPicto(), PDO::PARAM_INT);
        $editWalkResult->bindValue(':walkBabyDiaperPictoOfWalk', $this->getIdLpvEquipmentPicto(), PDO::PARAM_INT);
        $editWalkResult->execute();
    }
    //DELETE WALK
    public function deleteWalk()
    {
        $deleteWalkQuery = "DELETE FROM `LPV_category`
        WHERE `id` = :currentId";

        $deleteWaltResult = $this->db->prepare($deleteWalkQuery);
        $deleteWaltResult->bindvalue(':currentId', $this->getId(), PDO::PARAM_INT);
        $deleteWaltResult->execute();
    }
}
