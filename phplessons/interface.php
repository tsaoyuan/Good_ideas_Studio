<?php
interface AnimalInterface{
    public function instinct();
}
interface FirstActionInterface{
    public function instinctProcess();
}

class Bird implements AnimalInterface, FirstActionInterface{
    public function sayHi(){
        echo "Hi, I ca.. an.. ".PHP_EOL;
    }
    public function instinct(){
        // fly
        echo "I can fly!" .PHP_EOL;
    }
    public function instinctProcess(){
        $this->sayHi();
        $this->instinct();
    }
}

class Deadman implements AnimalInterface, FirstActionInterface{
    public function sayHi(){
        echo "Do you know, who am I? ".PHP_EOL;
    }
    public function instinct(){
        // Merc with a Mout
        echo "They call me 'Merc with a Mout' !" .PHP_EOL;
    }
    public function instinctProcess(){
        $this->sayHi();
        $this->instinct();
    }
}

class Fish implements AnimalInterface{
    public function instinct(){
        // swim
        echo "I can swim!" .PHP_EOL;
    }
    public function instinctProcess(){
        $this->instinct();
    }
}

class Lion implements AnimalInterface{
    public function instinct(){
        // run
        echo "I can run!" .PHP_EOL;
    }
    public function instinctProcess(){
        $this->instinct();
    }
}

// $bird = new Bird();
// $lion = new Lion();
// $fish = new Fish();
// $animals = array($bird, $lion, $fish);

// foreach($animals as $animal) {
//     $animal->instinct();
//   }

class AnimalAction {
    
    public function action(AnimalInterface $animalType){
        $animalType->instinct();
    }
  }

// $animalType = new Fish();
// $someoneDo = new AnimalAction();
// $someoneDo->action($animalType);

class Role {
    public $name;
    public function getNanme(){
        return $this->name;
    }
    public function setName($newName){
        $this->name = $newName;

    }
    public function action(AnimalInterface $animalType){
        $animalType->instinctProcess();
    }
  }

$animalType = new Deadman();
$someoneDo = new Role();
$someoneDo->setName("Ru Ru");
echo "My name is " .$someoneDo->getNanme().".".PHP_EOL;
$someoneDo->action($animalType);