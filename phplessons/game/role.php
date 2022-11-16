<?php
class User{
    // Properties
    private $name;
    public $hp;
    public $sp;
    public $attack;
    public $defense;
    public $magic_attack;
    public $magic_defense;
    // Methods
    public function setName($newName){
        $this -> name = $newName; 
    }

    public function __construct($name, $hp, $sp){
        $this -> name = $name;
        $this -> hp = $hp;
        $this -> sp = $sp;
    }
    
    public function getName(){
        return $this-> name;
    }
}

$player = new User('Lu-lala', 1000, 10);
echo $player-> getName() .PHP_EOL;
echo $player-> hp .PHP_EOL;
echo $player-> sp .PHP_EOL;

/*
$Nobody = new User('xxx', 500, 0);
$Nobody -> setName('Kine Knife');
echo $Nobody-> name .PHP_EOL;
echo $Nobody-> hp .PHP_EOL;
echo $Nobody-> sp .PHP_EOL;
*/




