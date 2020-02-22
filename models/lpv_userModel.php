<?php

class Lpv_user extends Lpv_database
{
    //Attributs////////////////////////////////////////
    private $_id;
    private $_pseudo;
    private $_mail;
    private $_password;
    private $_status;
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
    public function __construct()
    {
        parent::__construct();
    }

    //Méthodes////////////////////////////////////////////////////////
    //ADD USER
    public function addUser()
    {
        $addUserQuery = "INSERT INTO `LPV_user`(`pseudo`,`mail`,`password`,`status`,`id_LPV_avatar`) 
        VALUES (:pseudo,:mail,:passwords,'user',null)";

        $addUserResult = $this->db->prepare($addUserQuery);
        $addUserResult->bindValue(':pseudo', $this->getPseudo(), PDO::PARAM_STR);
        $addUserResult->bindValue(':mail', $this->getMail(), PDO::PARAM_STR);
        $addUserResult->bindValue(':passwords', $this->getPassword(), PDO::PARAM_STR);
        $addUserResult->execute();
        $lastId = $this->db->lastInsertId();
        return $lastId;
    }
    //LIST USER
    public function listUser()
    {
        $listUserQuery = "SELECT * FROM `LPV_user`";

        $listUserResult = $this->db->prepare($listUserQuery);
        if ($listUserResult->execute()) {
            $dataListUser = $listUserResult->fetchAll();
            return $dataListUser;
        }
    }
    //LIST USER + PAGING
    public function listUserPaging($limite, $debut)
    {
        $listUserPagingQuery = "SELECT * FROM `LPV_user`
        LIMIT :limite OFFSET :debut";

        $listUserPagingResult = $this->db->prepare($listUserPagingQuery);
        $listUserPagingResult->bindValue(':limite', $limite, PDO::PARAM_INT);
        $listUserPagingResult->bindValue(':debut', $debut, PDO::PARAM_INT);
        if ($listUserPagingResult->execute()) {
            $dataListUserPaging = $listUserPagingResult->fetchAll();
            return $dataListUserPaging;
        }
    }
    //COUNT ID DATABASE
    public function countUser()
    {
        $countUserQuery = "SELECT count(`id`) AS `countId` FROM `LPV_user`";

        $countUserResult = $this->db->prepare($countUserQuery);
        if ($countUserResult->execute()) {
            $dataCountUser = $countUserResult->fetchAll();
            return $dataCountUser;
        }
    }
    //USER DETAIL
    public function detailUser()
    {
        $detailUserQuery = "SELECT `LPV_user`.`id`,`LPV_user`.`pseudo`,`LPV_user`.`mail`,`LPV_user`.`password`,`LPV_user`.`status`,`LPV_user`.`id_LPV_avatar`,`LPV_avatar`.`avatarName` FROM `LPV_user`
        LEFT JOIN `LPV_avatar`
        ON `LPV_user`.`id_LPV_avatar` = `LPV_avatar`.`id`
        WHERE `LPV_user`.`id` = :currentId";

        $detailUserResult = $this->db->prepare($detailUserQuery);
        $detailUserResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        if ($detailUserResult->execute()) {
            $detailUser = $detailUserResult->fetchAll(PDO::FETCH_ASSOC);
            return $detailUser;
        };
    }
    //EDIT USER INFO
    public function editUserInfo()
    {
        $editUserInfoQuery = "UPDATE `LPV_user`
        SET `pseudo` = :pseudo,`mail` = :mail
        WHERE `id` = :currentId";

        $editUserInfoResult = $this->db->prepare($editUserInfoQuery);
        $editUserInfoResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        $editUserInfoResult->bindValue(':pseudo', $this->getPseudo(), PDO::PARAM_STR);
        $editUserInfoResult->bindValue(':mail', $this->getMail(), PDO::PARAM_STR);
        $editUserInfoResult->execute();
    }
    //EDIT USER PASSWORD
    public function editUserPassword()
    {
        $editUserPasswordQuery = "UPDATE `LPV_user`
        SET `password` = :passwords
        WHERE `id` = :currentId";

        $editUserPasswordResult = $this->db->prepare($editUserPasswordQuery);
        $editUserPasswordResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        $editUserPasswordResult->bindValue(':passwords', $this->getPassword(), PDO::PARAM_STR);
        $editUserPasswordResult->execute();
    }
    //DELETE USER
    public function deleteUser()
    {
        $deleteUserQuery = "DELETE FROM `LPV_user` 
        WHERE `id` = :currentId";

        $deleteUser = $this->db->prepare($deleteUserQuery);
        $deleteUser->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        $deleteUser->execute();
    }
    //CHANGE STATUS
    public function changeStatus()
    {
        $changeStatusQuery = "UPDATE `LPV_user`
        SET `status` = :statusAdmin
        WHERE `id` = :currentId";

        $changeStatusResult = $this->db->prepare($changeStatusQuery);
        $changeStatusResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        $changeStatusResult->bindValue(':statusAdmin', $this->getStatus(), PDO::PARAM_STR);
        $changeStatusResult->execute();
    }
    //ADD AVATAR IMAGE ON BDD
    public function addAvatarOnBdd()
    {
        $avatarAddBddQuery = "INSERT INTO `lpv_avatar`(`avatarName`) 
        VALUES (:avatarName)";

        $avatarAddBddResult = $this->db->prepare($avatarAddBddQuery);
        $avatarAddBddResult->bindValue(':avatarName', $this->getAvatar(), PDO::PARAM_STR);
        $avatarAddBddResult->execute();
    }
    //DISPLAY USER AVATAR
    public function avatarUser()
    {
        $avatarUserQuery = "SELECT * FROM `LPV_user`
        LEFT JOIN `LPV_avatar`
        ON `LPV_user`.`id_LPV_avatar` = `LPV_avatar`.`id`
        WHERE `LPV_user`.`id` = :currentId";

        $AvatarUserResult = $this->db->prepare($avatarUserQuery);
        $AvatarUserResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        if ($AvatarUserResult->execute()) {
            $AvatarUser = $AvatarUserResult->fetchAll(PDO::FETCH_ASSOC);
            return $AvatarUser;
        }
    }
    //USER AVATAR CHOICE LIST
    public function listAvatar()
    {
        $avatarChoiceListQuery = "SELECT * FROM `LPV_avatar`";

        $avatarChoiceListResult = $this->db->prepare($avatarChoiceListQuery);
        if ($avatarChoiceListResult->execute()) {
            $avatarChoiceList = $avatarChoiceListResult->fetchAll();
            return $avatarChoiceList;
        }
    }
    //CHANGE USER AVATAR
    public function editAvatar()
    {
        $editAvatarQuery = "UPDATE `LPV_user`
        SET `id_LPV_avatar` = :avatarId
        WHERE `id` = :currentId";

        $editAvatarResult = $this->db->prepare($editAvatarQuery);
        $editAvatarResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        $editAvatarResult->bindValue(':avatarId', $this->getAvatar(), PDO::PARAM_INT);
        $editAvatarResult->execute();
    }
    //DELETE USER AVATAR
    public function deleteAvatar()
    {
        $deleteAvatarQuery = "UPDATE `LPV_user`
        SET `id_LPV_avatar` = null
        WHERE `id` = :currentId";

        $deleteAvatarResult = $this->db->prepare($deleteAvatarQuery);
        $deleteAvatarResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        $deleteAvatarResult->execute();
    }
}
?>
