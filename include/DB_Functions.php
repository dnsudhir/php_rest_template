<?php
require_once 'Constants.php';

class DB_Functions
{

    private $conn;

    /**
     * DB_Functions constructor.
     *
     * @param
     *            $conn
     */
    public function __construct()
    {
        require_once 'DB_Connect.php';
        $db = new DB_Connect();
        $this->conn = $db->connect();
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    
    function getTestMessage(){
           return "Hello World!";
    }
   
}

?>





















