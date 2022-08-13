<?php
session_start();
require_once('operations.php');
class dbconfig {
    public $connection;
    public function __construct()
    {
            $this->db_connect();
    }
    public function db_connect() {
        $this->connection = mysqli_connect('localhost','root','','Signupforums');
    }
}
$db = new dbconfig();
    echo $db->db_connect();


?>