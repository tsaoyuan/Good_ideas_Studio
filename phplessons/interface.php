<?php
interface AnimalInterface{
    public function instinct();

}

class Bird implements AnimalInterface{
    public function instinct(){
        // fly
        echo "I can fly!" .PHP_EOL;
    }
}

class Fish implements AnimalInterface{
    public function instinct(){
        // swim
        echo "I can swim!" .PHP_EOL;

    }
    
}

class Lion implements AnimalInterface{
    public function instinct(){
        // run
        echo "I can run!" .PHP_EOL;

    }

}

$bird = new Bird();
$lion = new Lion();
$fish = new Fish();
$animals = array($bird, $lion, $fish);

foreach($animals as $animal) {
    $animal->instinct();
  }

class AnimalAction {
    public function action(AnimalInterface $animalType){
        $animalType->instinct();
    }
  }

$animalType = new Fish();
$someoneDo = new AnimalAction();
$someoneDo->action($animalType);


