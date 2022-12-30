<?php
class Man{
    public $name, $age;

    public function __construct($name = 'Andy', $age = 18)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setValues($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function getValues(){

        echo "Hello $this->name! Happy $this->age years old.".PHP_EOL;
    }
}

$anybody = new Man();
var_dump($anybody);

$lulu = new Man("lulu",9);
var_dump($lulu);
$lulu->getValues();
$lulu->setValues("LuFy",22);
$lulu->getValues();
