<?php
require './function.php';

// class Conn extends PDO{
class Conn{
    private static $dsn, $user, $pwd;
    private static $instance = null;

    private function __construct()
    {
        
    }
    
    public static function getInstance()
    {
        self::$dsn = "mysql:host=localhost;dbname=blog";
        self::$user = "luna";
        self::$pwd = "0000";

        echo "1 進入 getInstance()".PHP_EOL;
        if (!self::$instance) {
            echo "2 !self::instance == true" . PHP_EOL;
            // self::$instance = new static;
            try{
                self::$instance = new PDO(self::$dsn, self::$user, self::$pwd);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }catch(PDOException $e){
                echo "Connection failed: " . $e->getMessage();
            }
        }
        return self::$instance;
    }
}

$conn = Conn::getInstance();
echo "var_dump: ";var_dump($conn);
$statement = $conn->prepare("SELECT * FROM users");
$statement->execute();
// var_dump($statement);
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
dumpDie($posts);