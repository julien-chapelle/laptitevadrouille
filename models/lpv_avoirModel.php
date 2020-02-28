<?php

class Lpv_avoir extends Lpv_database
{
    //Attributs////////////////////////////////////////
    private $_id;
    private $_idWalk;

    //Méthodes d'appels Get/set//////////////////////////
    //ID PAYMENT PICTO
    public function getId()
    {
        return $this->_id;
    }

    public function setId($id)
    {
        $this->_id = $id;
    }
    //ID WALK
    public function getIdWalk()
    {
        return $this->_idWalk;
    }

    public function setIdWalk($idWalk)
    {
        $this->_idWalk = $idWalk;
    }

    //Constructeur
    public function __construct()
    {
        parent::__construct();
    }

    //Méthodes////////////////////////////////////////////////////////
    //ADD PAYMENT
    public function addPayment()
    {
        $createPaymentQuery = "INSERT INTO `avoir`(`id`,`id_LPV_category`)
        VALUES (:idPayment,:idWalk)";

        $createPaymentResult = $this->db->prepare($createPaymentQuery);
        $createPaymentResult->bindValue(':idPayment', $this->getId(), PDO::PARAM_INT);
        $createPaymentResult->bindValue(':idWalk', $this->getIdWalk(), PDO::PARAM_INT);
        $createPaymentResult->execute();
    }
    //EDIT PAYMENT
    public function editPayment()
    {
        $editPaymentQuery = "UPDATE `avoir`
        SET `ìd` = :idPayment, `id_LPV_category` = :currentId
        WHERE  `id_LPV_category` = :currentId";

        $editPaymentResult = $this->db->prepare($editPaymentQuery);
        $editPaymentResult->bindValue(':idPayment', $this->getId(), PDO::PARAM_INT);
        $editPaymentResult->bindValue(':currentId', $this->getIdWalk(), PDO::PARAM_INT);
        $editPaymentResult->execute();
    }
    //DELETE PAYMENT
    public function deletePayment()
    {
        $deletePaymentQuery = "DELETE FROM `avoir`
        WHERE `id_LPV_category` = :currentId";

        $deletePaymentResult = $this->db->prepare($deletePaymentQuery);
        $deletePaymentResult->bindValue(':currentId', $this->getIdWalk(), PDO::PARAM_INT);
        $deletePaymentResult->execute();
    }
}
