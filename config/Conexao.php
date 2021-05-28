<?php
class Conexaos {
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbName = "dbclinica";
    
    public function __constructor(){
        $this->servername; 
        $this->username; 
        $this->password; 
        $this->dbName;
    }
    public function conecta(){
        $pdo = new PDO('mysql:host='.$this->servername.';dbname='.$this->dbName,
              $this->username,$this->password);
        return $pdo;
    }
}
