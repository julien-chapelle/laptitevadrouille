<?php

/**
 * "LPV_database" model
 * 
 * Model class
 * Instantiation PDO object for database connecting
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
 * Model class for database "laptitevadrouille" connection.
 * 
 * Require_once on controller
 * Instantiation auto if controller called
 * 
 * - If connect is success : connected
 * - If connect failed : error message
 * 
 * @category database model
 * @package  None
 * @author Chapelle Julien <chapellejulien@laposte.net>
 */
class Lpv_database
{
    //Attributs////////////////////////////////////////
    /**
     * PDO database variable
     *
     * @var /PDO $db
     */
    protected $db;

    //Constructor//////////////////////////////////////
    /**
     * Construct method
     * 
     * Database PDO connection
     * 
     * @return exit
     */
    public function __construct()
    {
        try {
            //PDO object creating for database connect
            $this->db = new PDO('mysql:host=127.0.0.1;dbname=laptitevadrouillev2;charset=utf8', 'root', '');
        } catch (Exception $e) {
            //Display error message if not connected of server
            die('Erreur : ' . $e->getMessage());
        }
    }
}
?>
