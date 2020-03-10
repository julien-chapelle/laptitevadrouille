<?php
/**
 * This is a model class for database "laptitevadrouille" connection.
 * 
 * 
 */
class Lpv_database
{
    /**
     * variable
     *
     * @var string
     */
    protected $db;

    /**
     * 
     */
    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=127.0.0.1;dbname=laptitevadrouille;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage()); //Display error message if not connected of server
        }
    }
}

?>