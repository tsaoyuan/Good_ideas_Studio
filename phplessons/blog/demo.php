<?php
require './function.php';

class Conn extends PDO{
// class Conn{
    private $dsn, $user, $pwd;
    private static $instance = null;

    private function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=blog";
        $this->user = "luna";
        $this->pwd = "0000";

        // echo "$this->dsn and $this->user and $this->pwd";
        try{
            // self::$instance = new PDO($this->dsn, $this->user, $this->pwd);
            parent::__construct($this->dsn, $this->user, $this->pwd);
            // self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $conn = self::$instance;
            // echo "Connection Sucess!".PHP_EOL;
            // print_r($conn);
        }catch(PDOException $e){
            
            echo "Connection failed: ".$e->getMessage();

        }
        
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new static;
        }
        return self::$instance;
    }
}

$conn = Conn::getInstance();
// var_dump($conn);
$statement = $conn->prepare("SELECT * FROM users");
$statement->execute();
// var_dump($statement);
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
dumpDie($posts);
// dumpDie($conn);