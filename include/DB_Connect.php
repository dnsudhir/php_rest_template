<?php
class DB_Connect{

    public function connect(){
        require_once 'Config.php';

        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        }
        return $conn;
    }
}
?>