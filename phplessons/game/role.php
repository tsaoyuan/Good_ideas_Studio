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
    
}

$player = new User();
echo $player->name .PHP_EOL;
$player->setName('LuLu');
echo $player->name .PHP_EOL;
