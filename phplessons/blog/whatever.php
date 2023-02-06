<?php
class Man{
    public $name, $age;
    private static $instance = null;

    private function __construct($name = 'Andy', $age = 18)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new static;
        }
        return self::$instance;
    }

    public function setValues($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function getValues(){

        echo "Hello $this->name! Happy $this->age years old.".PHP_EOL;
    }
}

// $anybody = new Man();
$anybody = Man::getInstance();
var_dump($anybody);

$lulu = Man::getInstance();
$lulu->setValues("lulu",22);
$lulu->getValues();

$bodyOne = Man::getInstance();
$bodyTwo = Man::getInstance();
$bodyOne->setValues("Duck", 55);
$bodyTwo->setValues("Teddy", 20);
$bodyOne->getValues();
$bodyTwo->getValues();
