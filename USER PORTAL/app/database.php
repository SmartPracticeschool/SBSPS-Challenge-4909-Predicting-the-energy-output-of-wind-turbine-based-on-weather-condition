<?php
class Database{
 
    // specify your own database credentials
    private $host = "sql100.epizy.com";
    private $db_name = "epiz_26185445_phplearning";
    private $username = "epiz_26185445";
    private $password = "8J8WqkzMUs";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>
