<?php

/**
 * "Lpv_category" table model
 * 
 * Model class
 * Methods which allow to create, read, edit and delete data in the table "Lpv_category".
 * 
 * PHP version 7
 * @category model
 * @package  None
 * @author Chapelle Julien <chapellejulien@laposte.net>
 * @copyright 2020 Chapelle Julien
 * @license https://www.php.net/license/3_01.txt  PHP License 3.01
 * @link http://laptitevadrouille/
 */

/**
 * Model class for tables "Lpv_category".
 * 
 * Require_once on controller
 * 
 * tables using
 * - "Lpv_category"
 * - "Lpv_locationPicto"
 * - "Lpv_outputTypePicto"
 * - "Lpv_ageAdvisePicto"
 * - "Lpv_practicabilityPicto"
 * - "Lpv_equipementPicto"
 * - "Lpv_user"
 * 
 * Create method class
 * - Walk + lastInsertId PDO method
 * 
 * Edit method class
 * - Walk information
 * - Walk visibility status (validate or null)
 * - Walk pics
 * - Walk map image
 * 
 * Read method class
 * - Classic walk list
 * - Walk validate list and paging
 * - Walk unvalidate list and paging
 * - Walk validate counter
 * - Walk unvalidate counter
 * - Walk detail
 * - Walk detail payment
 * - Walk search result
 * - Walk counter search result
 * 
 * Delete method class
 * - All walk informations
 * 
 * @see Lpv_database
 * @package  None
 * @author Chapelle Julien <chapellejulien@laposte.net>
 */

class Lpv_category extends Lpv_database
{
    //Attributs////////////////////////////////////////
    /**
     * Autoincrement id variable
     *
     * @var string|int $_id
     */
    private $_id;
    /**
     * title variable
     *
     * @var string $_title
     */
    private $_title;
    /**
     * short description variable
     *
     * @var string $_description
     */
    private $_description;
    /**
     * complete description variable
     *
     * @var string $_moreInfoDescription
     */
    private $_moreInfoDescription;
    /**
     * rate 0-3 variable
     *
     * @var string $_rate_0_3
     */
    private $_rate_0_3;
    /**
     * rate 3-11 variable
     *
     * @var string $_rate_3_11
     */
    private $_rate_3_11;
    /**
     * rate 12+ variable
     *
     * @var string $_rate_12_plus
     */
    private $_rate_12_plus;
    /**
     * rate child disabled variable
     *
     * @var string|null $_rate_child_disabled
     */
    private $_rate_child_disabled;
    /**
     * opened hour variable
     *
     * @var string $_openedHour
     */
    private $_openedHour;
    /**
     * publication date variable
     *
     * @var string $_publication_date
     */
    private $_publication_date;
    /**
     * illustration pics variable
     *
     * @var string|null $_pics
     */
    private $_pics;
    /**
     * Google map image variable
     *
     * @var string|null $_map
     */
    private $_map;
    /**
     * Google map address variable
     *
     * @var string|null $_googleMapAddress
     */
    private $_googleMapAddress;
    /**
     * level of likes variable
     *
     * @var int $_likes
     */
    private $_likes;
    /**
     * official site url variable
     *
     * @var string $_officialSite
     */
    private $_officialSite;
    /**
     * id creator of walk variable
     *
     * @var int|null $_idCreator
     */
    private $_idCreator;
    /**
     * visibility status of walk variable
     *
     * @var string|null $_walkValidate
     */
    private $_walkValidate;
    /**
     * foreign key of location picto variable
     *
     * @var int $_id_LPV_locationPicto
     */
    private $_id_LPV_locationPicto;
    /**
     * foreign key of output type picto variable
     *
     * @var int $_id_LPV_outputTypePicto
     */
    private $_id_LPV_outputTypePicto;
    /**
     * foreign key of age advise picto variable
     *
     * @var int $_id_LPV_ageAdvisePicto
     */
    private $_id_LPV_ageAdvisePicto;
    /**
     * foreign key of practicability picto variable
     *
     * @var int $_id_LPV_practicabilityPicto
     */
    private $_id_LPV_practicabilityPicto;
    /**
     * foreign key of equipment picto variable
     *
     * @var int $_id_LPV_equipmentPicto
     */
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
    /**
     * Construct method
     * 
     * @return exit
     * @see Lpv_database
     */
    public function __construct()
    {
        parent::__construct();
    }

    //Méthodes////////////////////////////////////////////////////////
    //ADD WALK
    /**
     * Create walk and return last id insert
     * 
     * Table "Lpv_category"
     *
     * @return string&int
     */
    public function addWalk()
    {
        //Create query
        $createWalkQuery = "INSERT INTO `LPV_category`(`id`, `title`, `description`, `moreInfoDescription`, `rate_0_3`, `rate_3_11`, `rate_12_plus`, `rate_child_disabled`, `openedHours`, `publication_date`, `pics`, `map`, `googleMapAddress`, `likes`, `officialSite`, `walkValidate`, `id_creator`, `id_LPV_locationPicto`, `id_LPV_outputTypePicto`, `id_LPV_ageAdvisePicto`, `id_LPV_practicabilityPicto`, `id_LPV_equipmentPicto`)
        VALUES (null,:walkTitle, :walkShortDescription, :walkCompleteDescription, :walkRate_0_3OfWalk, :walkRate_3_11OfWalk,:walkRate_12_plusOfWalk,:walkRate_child_disabledOfWalk,:walkOpenedHoursOfWalk,:walkPublicationDate, null, null, null,0,:walkOfficialSiteOfWalk,null,:idCreator,:walkLocationPictoOfWalk,:walkOutputTypePictoOfWalk,:walkAgeAdvisePictoOfWalk,:walkPracticabilityPictoOfWalk,:walkBabyDiaperPictoOfWalk)";

        //Preparation of the "create" request
        $createWalkResult = $this->db->prepare($createWalkQuery);
        //Recovery of values
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
        //Executation of the "create" request
        $createWalkResult->execute();
        //PDO method "insert last id"
        /**
         * last insert walk id variable
         * 
         * @var int $lastWalkId
         */
        $lastWalkId = $this->db->lastInsertId();
        return $lastWalkId;
    }
    //CLASSIC LIST
    /**
     * select all values of "Lpv_category" for display
     *
     * @return string&int
     */
    public function classicListWalk()
    {
        //List walk query
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

        //Preparation of the "list" request
        $classicListWalkResult = $this->db->prepare($classicListWalkQuery);
        //Recovery of values and execute
        if ($classicListWalkResult->execute()) {
            //PDO method for recuperation of values array
            /**
             * walk values array
             * 
             * @var array $dataClassicListWalk
             */
            $dataClassicListWalk = $classicListWalkResult->fetchAll(PDO::FETCH_ASSOC);
            return $dataClassicListWalk;
        }
    }
    //LIST VALIDATE WALK + PAGING
    /**
     * select all values of "Lpv_category" for display validate walk and limit of display for paging
     * 
     * Table "Lpv_category"
     *
     * @param int $limite
     * @param int $debut
     * @return array
     */
    public function listWalk($limite, $debut)
    {
        //List validate walk & limit query
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

        //Preparation of the "list" request
        $listValWalkResult = $this->db->prepare($listValWalkQuery);
        //Recovery of values
        $listValWalkResult->bindValue(':limite', $limite, PDO::PARAM_INT);
        $listValWalkResult->bindValue(':debut', $debut, PDO::PARAM_INT);
        //Execute
        if ($listValWalkResult->execute()) {
            //PDO method for recuperation of values array
            /**
             * walk validate values array
             * 
             * @var array $dataListValWalk
             */
            $dataListValWalk = $listValWalkResult->fetchAll(PDO::FETCH_ASSOC);
            return $dataListValWalk;
        }
    }
    //LIST UNVALIDATE WALK + PAGING
    /**
     * select all values of "Lpv_category" for display unvalidate walk and limit of display for paging
     * 
     * Table "Lpv_category"
     *
     * @param int $limite
     * @param int $debut
     * @return array
     */
    public function listUnvalWalk($limite, $debut)
    {
        //List unvalidate walk & limit query
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

        //Preparation of the "list" request
        $listUnvalWalkResult = $this->db->prepare($listUnvalWalkQuery);
        //Recovery of values
        $listUnvalWalkResult->bindValue(':limite', $limite, PDO::PARAM_INT);
        $listUnvalWalkResult->bindValue(':debut', $debut, PDO::PARAM_INT);
        //Execute
        if ($listUnvalWalkResult->execute()) {
            //PDO method for recuperation of values array
            /**
             * walk unvalidate values array
             * 
             * @var array $dataListUnvalWalk
             */
            $dataListUnvalWalk = $listUnvalWalkResult->fetchAll(PDO::FETCH_ASSOC);
            return $dataListUnvalWalk;
        }
    }
    //COUNT ID VALIDATE WALK ON DATABASE
    /**
     * Counter of validate walk id on bdd
     * 
     * Table "Lpv_category"
     *
     * @return array
     */
    public function countWalkValidate()
    {
        //counter query
        $countWalkValQuery = "SELECT count(`id`) AS `countId`
        FROM `lpv_category` 
        WHERE `walkValidate` = 'Validate'";

        //Preparation of the "counter" request
        $countWalkValResult = $this->db->prepare($countWalkValQuery);
        //Recovery of values and execute
        if ($countWalkValResult->execute()) {
            //PDO method for recuperation of values array
            /**
             * validate walk id count values array
             * 
             * @var array $dataCountValWalk
             */
            $dataCountValWalk = $countWalkValResult->fetchAll(PDO::FETCH_ASSOC);
            return $dataCountValWalk;
        }
    }
    //COUNT ID UNVALIDATE WALK ON DATABASE
    /**
     * Counter of unvalidate walk id on bdd
     * 
     * Table "Lpv_category"
     *
     * @return array
     */
    public function countWalkUnvalidate()
    {
        //counter query
        $countWalkUnvalQuery = "SELECT count(`id`) AS `countId` 
        FROM `lpv_category` 
        WHERE `walkValidate` IS NULL
        OR `walkValidate` = ''";

        //Preparation of the "counter" request
        $countWalkUnvalResult = $this->db->prepare($countWalkUnvalQuery);
        //Recovery of values and execute
        if ($countWalkUnvalResult->execute()) {
            //PDO method for recuperation of values array
            /**
             * unvalidate walk id count values array
             * 
             * @var array $dataCountUnvalWalk
             */
            $dataCountUnvalWalk = $countWalkUnvalResult->fetchAll(PDO::FETCH_ASSOC);
            return $dataCountUnvalWalk;
        }
    }
    //WALK DETAIL
    /**
     * select all values for display
     * 
     * tables using
     * - "Lpv_category"
     * - "Lpv_locationPicto"
     * - "Lpv_outputTypePicto"
     * - "Lpv_ageAdvisePicto"
     * - "Lpv_practicabilityPicto"
     * - "Lpv_equipementPicto"
     * - "Lpv_user"
     *
     * @return array
     */
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
    public function searchDetailWalk($limite, $debut)
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
        WHERE `title` LIKE :searchTitle AND `LPV_category`.`walkValidate` = 'Validate'
        LIMIT :limite OFFSET :debut";

        $searchTitleResult = $this->db->prepare($searchTitleQuery);
        $searchTitleResult->bindValue(':searchTitle', '%' . $this->getTitle() . '%', PDO::PARAM_STR);
        $searchTitleResult->bindValue(':limite', $limite, PDO::PARAM_INT);
        $searchTitleResult->bindValue(':debut', $debut, PDO::PARAM_INT);
        if ($searchTitleResult->execute()) {
            $dataSearchWalk = $searchTitleResult->fetchAll(PDO::FETCH_ASSOC);
            return $dataSearchWalk;
        };
    }
    //COUNT ID SEARCH DATABASE
    public function countSearchWalk()
    {
        $countSearchWalkQuery = "SELECT count(`id`) AS `countSearchId` FROM `LPV_category`
        WHERE `title` LIKE :searchTitle AND `walkValidate` = 'Validate'";

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
