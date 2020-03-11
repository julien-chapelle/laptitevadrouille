<?php

/**
 * "Lpv_user" & "Lpv_avatar" tables model
 * 
 * Model class
 * Methods which allow to create, read, edit and delete data in the tables "Lpv_user" & "Lpv_avatar".
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
 * Model class for tables "Lpv_user" & "Lpv_avatar".
 * 
 * Require_once on controller
 * 
 * Tables using
 * - "Lpv_user"
 * - "Lpv_avatar"
 * 
 * Create method class
 * - User + lastInsertId PDO method
 * - User avatar choice
 * - Avatar on bdd
 * 
 * Edit method class
 * - User information
 * - User password
 * - User status (user or admin)
 * - User avatar
 * 
 * Read method class
 * - Classic user list
 * - User list and paging
 * - User detail
 * - Id user counter
 * - User avatar choice
 * 
 * Delete method class
 * - User
 * - Avatar choice
 * - Avatar on bdd
 * 
 * @see Lpv_database
 * @package  None
 * @author Chapelle Julien <chapellejulien@laposte.net>
 */
class Lpv_user extends Lpv_database
{
    //Attributs////////////////////////////////////////
    /**
     * Autoincrement id variable
     *
     * @var string|int $_id
     */
    private $_id;
    /**
     * user pseudo variable
     *
     * @var string $_pseudo
     */
    private $_pseudo;
    /**
     * user mail variable
     *
     * @var string $_mail
     */
    private $_mail;
    /**
     * user password variable
     *
     * @var string $_password
     */
    private $_password;
    /**
     * user status variable
     * - Status default "user"
     * - Only admin for choice for status (user or admin)
     *
     * @var string $_status
     */
    private $_status;
    /**
     * avatar variable
     * - PNG format only
     *
     * @var string $_avatar
     */
    private $_avatar;

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
    //PSEUDO
    public function getPseudo()
    {
        return $this->_pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->_pseudo = $pseudo;
    }
    //MAIL
    public function getMail()
    {
        return $this->_mail;
    }

    public function setMail($mail)
    {
        $this->_mail = $mail;
    }
    //PASSWORD
    public function getPassword()
    {
        return $this->_password;
    }

    public function setPassword($password)
    {
        $this->_password = $password;
    }
    //STATUS
    public function getStatus()
    {
        return $this->_status;
    }

    public function setStatus($status)
    {
        $this->_status = $status;
    }
    //AVATAR
    public function getAvatar()
    {
        return $this->_avatar;
    }

    public function setAvatar($avatar)
    {
        $this->_avatar = $avatar;
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
    //ADD USER
    /**
     * Create user and return last id insert for a auto session connect after create
     * 
     * Table "Lpv_user"
     *
     * @return string&int
     */
    public function addUser()
    {
        //Create query
        $addUserQuery = "INSERT INTO `LPV_user`(`pseudo`,`mail`,`password`,`status`,`id_LPV_avatar`) 
        VALUES (:pseudo,:mail,:passwords,'user',null)";

        //Preparation of the "create" request
        $addUserResult = $this->db->prepare($addUserQuery);
        //Recovery of values
        $addUserResult->bindValue(':pseudo', $this->getPseudo(), PDO::PARAM_STR);
        $addUserResult->bindValue(':mail', $this->getMail(), PDO::PARAM_STR);
        $addUserResult->bindValue(':passwords', $this->getPassword(), PDO::PARAM_STR);
        //Executation of the "create" request
        $addUserResult->execute();
        //PDO method "insert last id"
        /**
         * last insert user id variable
         * 
         * @var int $lastId
         */
        $lastId = $this->db->lastInsertId();
        return $lastId;
    }
    //LIST USER
    /**
     * select all values of "Lpv_user" for display
     * 
     * Table "Lpv_user"
     *
     * @return string&int
     */
    public function listUser()
    {
        //List user query
        $listUserQuery = "SELECT * FROM `LPV_user`";

        //Preparation of the "list" request
        $listUserResult = $this->db->prepare($listUserQuery);
        //Recovery of values and execute
        if ($listUserResult->execute()) {
            //PDO method for recuperation of values array
            /**
             * user values array
             * 
             * @var array $dataListUser
             */
            $dataListUser = $listUserResult->fetchAll();
            return $dataListUser;
        }
    }
    //LIST USER + PAGING
    /**
     * select all values of "Lpv_user" for display and limit of display for paging
     * 
     * Table "Lpv_user"
     *
     * @param int $limite
     * @param int $debut
     * @return array
     */
    public function listUserPaging($limite, $debut)
    {
        //List user & limit query
        $listUserPagingQuery = "SELECT * FROM `LPV_user`
        LIMIT :limite OFFSET :debut";

        //Preparation of the "list" request
        $listUserPagingResult = $this->db->prepare($listUserPagingQuery);
        //Recovery of values
        $listUserPagingResult->bindValue(':limite', $limite, PDO::PARAM_INT);
        $listUserPagingResult->bindValue(':debut', $debut, PDO::PARAM_INT);
        //Execute
        if ($listUserPagingResult->execute()) {
            //PDO method for recuperation of values array
            /**
             * user values array
             * 
             * @var array $dataListUserPaging
             */
            $dataListUserPaging = $listUserPagingResult->fetchAll();
            return $dataListUserPaging;
        }
    }
    //COUNT ID DATABASE
    /**
     * Counter of user id on bdd
     * 
     * Table "Lpv_user"
     *
     * @return array
     */
    public function countUser()
    {
        //counter query
        $countUserQuery = "SELECT count(`id`) AS `countId` FROM `LPV_user`";

        //Preparation of the "counter" request
        $countUserResult = $this->db->prepare($countUserQuery);
        //Recovery of values and execute
        if ($countUserResult->execute()) {
            //PDO method for recuperation of values array
            /**
             * user id count values array
             * 
             * @var array $dataCountUser
             */
            $dataCountUser = $countUserResult->fetchAll();
            return $dataCountUser;
        }
    }
    //USER DETAIL
    /**
     * select all values of "Lpv_user" & "Lpv_avatar" for display
     * 
     * Table "Lpv_user" & "Lpv_avatar"
     *
     * @return array
     */
    public function detailUser()
    {
        //Details user query
        $detailUserQuery = "SELECT `LPV_user`.`id`,`LPV_user`.`pseudo`,`LPV_user`.`mail`,`LPV_user`.`password`,`LPV_user`.`status`,`LPV_user`.`id_LPV_avatar`,`LPV_avatar`.`avatarName` FROM `LPV_user`
        LEFT JOIN `LPV_avatar`
        ON `LPV_user`.`id_LPV_avatar` = `LPV_avatar`.`id`
        WHERE `LPV_user`.`id` = :currentId";

        //Preparation of the "detail" request
        $detailUserResult = $this->db->prepare($detailUserQuery);
        //Recovery of values
        $detailUserResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        //Execute
        if ($detailUserResult->execute()) {
            //PDO method for recuperation of values array
            /**
             * all user details values array
             * 
             * @var array $detailUser
             */
            $detailUser = $detailUserResult->fetchAll(PDO::FETCH_ASSOC);
            return $detailUser;
        };
    }
    //EDIT USER INFO
    /**
     * Edit user info
     * 
     * Table "Lpv_user"
     *
     * @return string&int
     */
    public function editUserInfo()
    {
        //Edit user query
        $editUserInfoQuery = "UPDATE `LPV_user`
        SET `pseudo` = :pseudo,`mail` = :mail
        WHERE `id` = :currentId";

        //Preparation of the "edit" request
        $editUserInfoResult = $this->db->prepare($editUserInfoQuery);
        //Recovery of values
        $editUserInfoResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        $editUserInfoResult->bindValue(':pseudo', $this->getPseudo(), PDO::PARAM_STR);
        $editUserInfoResult->bindValue(':mail', $this->getMail(), PDO::PARAM_STR);
        //Execute
        $editUserInfoResult->execute();
    }
    //EDIT USER PASSWORD
    /**
     * Edit user password
     * 
     * Table "Lpv_user"
     *
     * @return string&int
     */
    public function editUserPassword()
    {
        //Edit user password query
        $editUserPasswordQuery = "UPDATE `LPV_user`
        SET `password` = :passwords
        WHERE `id` = :currentId";

        //Preparation of the "edit" request
        $editUserPasswordResult = $this->db->prepare($editUserPasswordQuery);
        //Recovery of values
        $editUserPasswordResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        $editUserPasswordResult->bindValue(':passwords', $this->getPassword(), PDO::PARAM_STR);
        //Execute
        $editUserPasswordResult->execute();
    }
    //DELETE USER
    /**
     * Delete user
     * 
     * Table "Lpv_user"
     *
     * @return int
     */
    public function deleteUser()
    {
        //Delete user query
        $deleteUserQuery = "DELETE FROM `LPV_user` 
        WHERE `id` = :currentId";

        //Preparation of the "delete" request
        $deleteUser = $this->db->prepare($deleteUserQuery);
        //Recovery of values
        $deleteUser->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        //Execute
        $deleteUser->execute();
    }
    //CHANGE STATUS
    /**
     * Edit user status (user or admin)
     * 
     * Table "Lpv_user"
     *
     * @return string&int
     */
    public function changeStatus()
    {
        //Change user status query
        $changeStatusQuery = "UPDATE `LPV_user`
        SET `status` = :statusAdmin
        WHERE `id` = :currentId";

        //Preparation of the "change status" request
        $changeStatusResult = $this->db->prepare($changeStatusQuery);
        //Recovery of values
        $changeStatusResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        $changeStatusResult->bindValue(':statusAdmin', $this->getStatus(), PDO::PARAM_STR);
        //Execute
        $changeStatusResult->execute();
    }
    //ADD AVATAR IMAGE ON BDD
    /**
     * Method od add avatar on bdd
     * 
     * Table "Lpv_avatar"
     *
     * @return string
     */
    public function addAvatarOnBdd()
    {
        //Add avatar query
        $avatarAddBddQuery = "INSERT INTO `lpv_avatar`(`avatarName`) 
        VALUES (:avatarName)";

        //Preparation of the "add avatar" request
        $avatarAddBddResult = $this->db->prepare($avatarAddBddQuery);
        //Recovery of values
        $avatarAddBddResult->bindValue(':avatarName', $this->getAvatar(), PDO::PARAM_STR);
        //Execute
        $avatarAddBddResult->execute();
    }
    //DISPLAY USER AVATAR
    /**
     * Undocumented function
     * 
     * Table "Lpv_avatar"
     *
     * @return array
     */
    public function avatarUser()
    {
        //Search user avatar query
        $avatarUserQuery = "SELECT * FROM `LPV_user`
        LEFT JOIN `LPV_avatar`
        ON `LPV_user`.`id_LPV_avatar` = `LPV_avatar`.`id`
        WHERE `LPV_user`.`id` = :currentId";

        //Preparation of the "search user avatar" request
        $AvatarUserResult = $this->db->prepare($avatarUserQuery);
        $AvatarUserResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        //Recovery of values and execute
        if ($AvatarUserResult->execute()) {
            //PDO method for recuperation of values array
            /**
             * values of active session user avatar
             * 
             * @var array $AvatarUser
             */
            $AvatarUser = $AvatarUserResult->fetchAll(PDO::FETCH_ASSOC);
            return $AvatarUser;
        }
    }
    //USER AVATAR CHOICE LIST
    /**
     * List of all avatar on bdd
     * 
     * Table "Lpv_avatar"
     *
     * @return array
     */
    public function listAvatar()
    {
        //List avatar query
        $avatarChoiceListQuery = "SELECT * FROM `LPV_avatar`";

        //Preparation of the "list avatar" request
        $avatarChoiceListResult = $this->db->prepare($avatarChoiceListQuery);
        //Recovery of values and execute
        if ($avatarChoiceListResult->execute()) {
            //PDO method for recuperation of values array
            /**
             * values of all avatar
             * 
             * @var array $avatarChoiceList
             */
            $avatarChoiceList = $avatarChoiceListResult->fetchAll();
            return $avatarChoiceList;
        }
    }
    //CHANGE USER AVATAR
    /**
     * Update avatar of user
     * 
     * Table "Lpv_user"
     *
     * @return int
     */
    public function editAvatar()
    {
        //Update avatar of user query
        $editAvatarQuery = "UPDATE `LPV_user`
        SET `id_LPV_avatar` = :avatarId
        WHERE `id` = :currentId";

        //Preparation of the "update avatar of user" request
        $editAvatarResult = $this->db->prepare($editAvatarQuery);
        //Recovery of values
        $editAvatarResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        $editAvatarResult->bindValue(':avatarId', $this->getAvatar(), PDO::PARAM_INT);
        //Execute
        $editAvatarResult->execute();
    }
    //DELETE USER AVATAR
    /**
     * Delete avatar of user
     * 
     * Table "Lpv_user"
     *
     * @return int
     */
    public function deleteAvatar()
    {
        //Delete avatar of user query
        $deleteAvatarQuery = "UPDATE `LPV_user`
        SET `id_LPV_avatar` = null
        WHERE `id` = :currentId";

        //Preparation of the "delete avatar of user" request
        $deleteAvatarResult = $this->db->prepare($deleteAvatarQuery);
        //Recovery of values
        $deleteAvatarResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        //Execute
        $deleteAvatarResult->execute();
    }
    //DELETE AVATAR ON BDD
    /**
     * Delete avatar on bdd
     * 
     * Table "Lpv_avatar"
     *
     * @return string
     */
    public function deleteAvatarOnBdd()
    {
        //Delete avatar on bdd query
        $deleteAvatarOnBddQuery = "DELETE FROM `LPV_avatar`
        WHERE `avatarName` = :currentAvatarName";

        //Preparation of the "delete avatar on bdd" request
        $deleteAvatarOnBddResult = $this->db->prepare($deleteAvatarOnBddQuery);
        //Recovery of values
        $deleteAvatarOnBddResult->bindValue(':currentAvatarName', $this->getAvatar(), PDO::PARAM_STR);
        //Execute
        $deleteAvatarOnBddResult->execute();
    }
}
?>
