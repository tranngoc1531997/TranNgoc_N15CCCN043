<?php

class DB{

    public $conn = null;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "projectone";

    public function __construct(){
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
          return $this->conn;
    }
    public function queryOne($sql){
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt = null;
        return $result;
    }
    public function queryMulti($sql){
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;
        return $result;
    }
    public function update($sql){
        $stmt = $this->conn->prepare($sql);
        $stmt ->execute();
        $count = $stmt->rowcount();
        if($count > 0){
            return true;
        }
        else{
            return false;
        }
    }
    public function insert($sql){
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $count = $stmt->rowcount();
        if($count > 0){
            return true;
        }
        else{
            return false;
        }
    }
}

?>