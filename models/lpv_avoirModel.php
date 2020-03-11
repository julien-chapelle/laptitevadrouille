<?php

/**
 * "avoir" intermediate table model
 * 
 * Model class
 * Methods which allow to create, edit and delete data in the intermediate table "avoir"
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
 * Model class for intermediate table "avoir".
 * 
 * Require_once on controller
 * 
 * Table using
 * - "avoir"
 * 
 * Create, edit, delete method class
 * 
 * @see Lpv_database
 * @package  None
 * @author Chapelle Julien <chapellejulien@laposte.net>
 */
class Lpv_avoir extends Lpv_database
{
    //Attributs////////////////////////////////////////
    /**
     * variable payment type id
     *
     * @var mixed $_id
     */
    private $_id;
    /**
     * Variable foreign key walk id
     *
     * @var mixed $_idWalk
     */
    private $_idWalk;

    //Get/set Method//////////////////////////////////
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

    //Constructor////////////////////////////////////
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

    //Method////////////////////////////////////////////////////////
    //ADD PAYMENT
    /**
     * create payment method
     * 
     * intermediate table "avoir"
     *
     * @return void
     */
    public function addPayment()
    {
        //Create query
        $createPaymentQuery = "INSERT INTO `avoir`(`id`,`id_LPV_category`)
        VALUES (:idPayment,:idWalk)";

        //Preparation of the "create" request
        $createPaymentResult = $this->db->prepare($createPaymentQuery);
        //Recovery of values
        $createPaymentResult->bindValue(':idPayment', $this->getId(), PDO::PARAM_INT);
        $createPaymentResult->bindValue(':idWalk', $this->getIdWalk(), PDO::PARAM_INT);
        //Executation of the "create" request
        $createPaymentResult->execute();
    }
    //EDIT PAYMENT
    /**
     * edit payment method
     * 
     * intermediate table "avoir"
     *
     * @return void
     */
    public function editPayment()
    {
        //Edit query
        $editPaymentQuery = "UPDATE `avoir`
        SET `ìd` = :idPayment, `id_LPV_category` = :currentId
        WHERE  `id_LPV_category` = :currentId";

        //Preparation of the "edit" request
        $editPaymentResult = $this->db->prepare($editPaymentQuery);
        //Recovery of values
        $editPaymentResult->bindValue(':idPayment', $this->getId(), PDO::PARAM_INT);
        $editPaymentResult->bindValue(':currentId', $this->getIdWalk(), PDO::PARAM_INT);
        //Executation of the "edit" request
        $editPaymentResult->execute();
    }
    //DELETE PAYMENT
    /**
     * delete payment method
     * 
     * intermediate table "avoir"
     *
     * @return void
     */
    public function deletePayment()
    {
        //Delete query
        $deletePaymentQuery = "DELETE FROM `avoir`
        WHERE `id_LPV_category` = :currentId";

        //Preparation of the "delete" request
        $deletePaymentResult = $this->db->prepare($deletePaymentQuery);
        //Recovery of values
        $deletePaymentResult->bindValue(':currentId', $this->getIdWalk(), PDO::PARAM_INT);
        //Executation of the "delete" request
        $deletePaymentResult->execute();
    }
}
?>
