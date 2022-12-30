<?php
require './function.php';

class Conn extends PDO{
// class Conn{
    // private $dsn, $user, $pwd;
    private static $dsn, $user, $pwd;
    private static $instance = null;

    private function __construct()
    {
        // $this->dsn = "mysql:host=localhost;dbname=blog";
        // $this->user = "luna";
        // $this->pwd = "0000";

        self::$dsn = "mysql:host=localhost;dbname=blog";
        self::$user = "luna";
        self::$pwd = "0000";
        // echo "$this->dsn and $this->user and $this->pwd";
        try{
            echo "3 Any body in Construct?".PHP_EOL;
            // parent::__construct($this->dsn, $this->user, $this->pwd);
            parent::__construct(self::$dsn, self::$user, self::$pwd);

            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            
            echo "Connection failed: ".$e->getMessage();
        }
    }

    public static function getInstance()
    {
        echo "1 進入 getInstance".PHP_EOL;
        if (!self::$instance) {
            echo '2 !self::$instance == true' . PHP_EOL;
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