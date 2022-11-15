<?php
class User{
    // Properties
    public $name;
    public $hp;
    public $sp;
    public $attack;
    public $defense;
    public $magic_attack;
    public $magic_defense;
    // Methods
    function setName($newName){
        $this -> name = $newName; 
    }

    function __construct($name, $hp, $sp){
        $this -> name = $name;
        $this -> hp = $hp;
        $this -> sp = $sp;
    }
    
}

$player = new User('Lu-lala', 1000, 10);
echo $player-> name .PHP_EOL;
echo $player-> hp .PHP_EOL;
echo $player-> sp .PHP_EOL;

$Nobody = new User('xxx', 500, 0);
$Nobody -> setName('Kine Knife');
echo $Nobody-> name .PHP_EOL;
echo $Nobody-> hp .PHP_EOL;
echo $Nobody-> sp .PHP_EOL;





