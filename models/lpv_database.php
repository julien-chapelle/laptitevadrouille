<?php
/**
 * LPV_database model
 * 
 * Model class
 * Instantiation PDO object for database connecting
 * 
 * PHP version 7
 * @category database model
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
 * @license https://www.php.net/license/3_01.txt  PHP License 3.01
 * @link http://laptitevadrouille/
 */
class Lpv_database
{
    /** 
     *
     * @var mixed $db
     */
    protected $db;

    /**
     * Database connection magic method construct
     * 
     */
    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=127.0.0.1;dbname=laptitevadrouille;charset=utf8', 'root', ''); //PDO object creating for database connect
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage()); //Display error message if not connected of server
        }
    }
}
?>
