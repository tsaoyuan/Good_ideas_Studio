<?php
class Dbh{
    private $servername = "localhost";
    private $username = "luna";
    private $password = "0000";
    private $dbname = "Mysql";

        
    protected function connect(){
        $dsn = 'mysql:host='. $this->servername.';, dbname='. $this->dbname .', '. $this->username .', '.$this->password;
        $pdo = new PDO($dsn);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo; 
    }

}