<?php

class Lpv_user extends Lpv_database
{
    //Attributs////////////////////////////////////////
    private $_id;
    private $_pseudo;
    private $_mail;
    private $_password;
    private $_avatar;
    private $_status;

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
    //AVATAR
    public function getAvatar()
    {
        return $this->_avatar;
    }

    public function setAvatar($avatar)
    {
        $this->_avatar = $avatar;
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

    //Constructeur
    public function __construct()
    {
        parent::__construct();
    }

    //Méthodes////////////////////////////////////////////////////////
    //ADD USER
    public function addUser()
    {
        $addUserQuery = "INSERT INTO `LPV_user`(`pseudo`,`mail`,`password`,`avatar`,`status`) 
        VALUES (:pseudo,:mail,:passwords,null,'user')";

        $addUserResult = $this->db->prepare($addUserQuery);
        $addUserResult->bindValue(':pseudo', $this->getPseudo(), PDO::PARAM_STR);
        $addUserResult->bindValue(':mail', $this->getMail(), PDO::PARAM_STR);
        $addUserResult->bindValue(':passwords', $this->getPassword());
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
        $countUserQuery = "SELECT count(`id`) AS `countId` FROM `lpv_user`";

        $countUserResult = $this->db->prepare($countUserQuery);
        if ($countUserResult->execute()) {
            $dataCountUser = $countUserResult->fetchAll();
            return $dataCountUser;
        }
    }
    //USER DETAIL
    public function detailUser()
    {
        $detailUserQuery = "SELECT * FROM `LPV_user`
        WHERE `LPV_user`.`id` = :currentId";

        $detailUserResult = $this->db->prepare($detailUserQuery);
        $detailUserResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        if ($detailUserResult->execute()) {
            $detailUser = $detailUserResult->fetchAll(PDO::FETCH_ASSOC);
            return $detailUser;
        };
    }
    //USER AVATAR
    public function avatarUser()
    {
        $avatarUserQuery ="SELECT `id`,`avatar`
        FROM `LPV_user`
        WHERE `LPV_user`.`id` = :currentId";

        $AvatarUserResult = $this->db->prepare($avatarUserQuery);
        $AvatarUserResult->bindValue(':currentId', $this->getId(), PDO::PARAM_INT);
        if ($AvatarUserResult->execute()) {
            $AvatarUser = $AvatarUserResult->fetchAll(PDO::FETCH_ASSOC);
            return $AvatarUser;
        }
    }
}
