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
    //LIST WALK + PAGING
    public function listWalk($limite, $debut)
    {
        $listWalkQuery = "SELECT `LPV_category`.`id`,`LPV_category`.`title`, `LPV_category`.`description`,`LPV_category`.`moreInfoDescription`,`LPV_category`.`rate_0_3`,`LPV_category`.`rate_3_11`,`LPV_category`.`rate_12_plus`,`LPV_category`.`rate_child_disabled`,`LPV_category`.`openedHours`,`LPV_category`.`publication_date`,`LPV_category`.`pics`,`LPV_category`.`map`,`LPV_category`.`googleMapAddress`,`LPV_category`.`likes`,`LPV_category`.`officialSite`,`LPV_category`.`walkValidate`,`LPV_locationPicto`.`locationPicto`,`LPV_locationPicto`.`locationTitle`,`LPV_locationPicto`.`locationAlt`,`LPV_outputTypePicto`.`outputTypePicto`,`LPV_outputTypePicto`.`outputTypeTitle`,`LPV_outputTypePicto`.`outputTypeAlt`,`LPV_ageAdvisePicto`.`ageAdvisePicto`,`LPV_ageAdvisePicto`.`ageAdviseTitle`,`LPV_ageAdvisePicto`.`ageAdviseAlt`,`LPV_practicabilityPicto`.`practicabilityPicto`,`LPV_practicabilityPicto`.`practicabilityTitle`,`LPV_practicabilityPicto`.`practicabilityAlt`,`LPV_equipmentPicto`.`equipmentPicto`,`LPV_equipmentPicto`.`equipmentTitle`,`LPV_equipmentPicto`.`equipmentAlt`
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
        LIMIT :limite OFFSET :debut";

        $listWalkResult = $this->db->prepare($listWalkQuery);
        $listWalkResult->bindValue(':limite', $limite, PDO::PARAM_INT);
        $listWalkResult->bindValue(':debut', $debut, PDO::PARAM_INT);
        if ($listWalkResult->execute()) {
            $dataListWalk = $listWalkResult->fetchAll();
            return $dataListWalk;
        }
    }
    //COUNT ID DATABASE
    public function countWalk()
    {
        $countWalkQuery = "SELECT count(`id`) AS `countId` FROM `lpv_category`";

        $countWalkResult = $this->db->prepare($countWalkQuery);
        if ($countWalkResult->execute()) {
            $dataCountWalk = $countWalkResult->fetchAll();
            return $dataCountWalk;
        }
    }
    //WALK DETAIL
    public function detailWalk()
    {
        $detailWalkQuery = "SELECT `LPV_category`.`id`,`LPV_category`.`title`, `LPV_category`.`description`,`LPV_category`.`moreInfoDescription`,`LPV_category`.`rate_0_3`,`LPV_category`.`rate_3_11`,`LPV_category`.`rate_12_plus`,`LPV_category`.`rate_child_disabled`,`LPV_category`.`openedHours`,`LPV_category`.`publication_date`,`LPV_category`.`pics`,`LPV_category`.`map`,`LPV_category`.`googleMapAddress`,`LPV_category`.`likes`,`LPV_category`.`officialSite`,`LPV_category`.`walkValidate`,`LPV_locationPicto`.`locationPicto`,`LPV_locationPicto`.`locationTitle`,`LPV_locationPicto`.`locationAlt`,`LPV_outputTypePicto`.`outputTypePicto`,`LPV_outputTypePicto`.`outputTypeTitle`,`LPV_outputTypePicto`.`outputTypeAlt`,`LPV_ageAdvisePicto`.`ageAdvisePicto`,`LPV_ageAdvisePicto`.`ageAdviseTitle`,`LPV_ageAdvisePicto`.`ageAdviseAlt`,`LPV_practicabilityPicto`.`practicabilityPicto`,`LPV_practicabilityPicto`.`practicabilityTitle`,`LPV_practicabilityPicto`.`practicabilityAlt`,`LPV_equipmentPicto`.`equipmentPicto`,`LPV_equipmentPicto`.`equipmentTitle`,`LPV_equipmentPicto`.`equipmentAlt`
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
        ON `LPV_paymentPicto`.`id` = `avoir`.`id`";

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
        $searchTitleQuery = "SELECT `LPV_category`.`id`,`LPV_category`.`title`, `LPV_category`.`description`,`LPV_category`.`moreInfoDescription`,`LPV_category`.`rate_0_3`,`LPV_category`.`rate_3_11`,`LPV_category`.`rate_12_plus`,`LPV_category`.`rate_child_disabled`,`LPV_category`.`openedHours`,`LPV_category`.`publication_date`,`LPV_category`.`pics`,`LPV_category`.`map`,`LPV_category`.`googleMapAddress`,`LPV_category`.`likes`,`LPV_category`.`officialSite`,`LPV_category`.`walkValidate`,`LPV_locationPicto`.`locationPicto`,`LPV_locationPicto`.`locationTitle`,`LPV_locationPicto`.`locationAlt`,`LPV_outputTypePicto`.`outputTypePicto`,`LPV_outputTypePicto`.`outputTypeTitle`,`LPV_outputTypePicto`.`outputTypeAlt`,`LPV_ageAdvisePicto`.`ageAdvisePicto`,`LPV_ageAdvisePicto`.`ageAdviseTitle`,`LPV_ageAdvisePicto`.`ageAdviseAlt`,`LPV_practicabilityPicto`.`practicabilityPicto`,`LPV_practicabilityPicto`.`practicabilityTitle`,`LPV_practicabilityPicto`.`practicabilityAlt`,`LPV_equipmentPicto`.`equipmentPicto`,`LPV_equipmentPicto`.`equipmentTitle`,`LPV_equipmentPicto`.`equipmentAlt`
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
        WHERE `title` LIKE :searchTitle";

        $searchTitleResult = $this->db->prepare($searchTitleQuery);
        $searchTitleResult->bindValue(':searchTitle', $this->getTitle() . '%', PDO::PARAM_STR);
        if ($searchTitleResult->execute()) {
            $dataSearchWalk = $searchTitleResult->fetchAll(PDO::FETCH_ASSOC);
            return $dataSearchWalk;
        };
    }
    //COUNT ID SEARCH DATABASE
    public function countSearchWalk()
    {
        $countSearchWalkQuery = "SELECT count(`id`) AS `countSearchId` FROM `lpv_category`
        WHERE `title` LIKE :searchTitle";

        $countSearchWalkResult = $this->db->prepare($countSearchWalkQuery);
        $countSearchWalkResult->bindValue(':searchTitle', $this->getTitle() . '%', PDO::PARAM_STR);
        if ($countSearchWalkResult->execute()) {
            $dataCountSearchWalk = $countSearchWalkResult->fetchAll();
            return $dataCountSearchWalk;
        }
    }
}
