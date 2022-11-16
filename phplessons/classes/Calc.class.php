<?php
class Calc{
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $one, int $two, int $three)
    {
        $this->operator = $one;
        $this->num1 = $two;
        $this->num2 = $three;
    }

    public function calculator(){
                
            switch($this->operator){
                case "None":
                    echo "Something wrrong! Yu need to select a method!".PHP_EOL;
                    break;
                
                case "Plus":
                    $result = $this->num1 + $this->num2;
                    return $result;
                    break;
                
                case "Subtrct":
                    $result = $this->num1 - $this->num2;
                    return $result;
                    break;
        
                case "Multily":
                    $result = $this->num1 * $this->num2;
                    return $result;
                    break;
        
                case "Divide":
                    $result = $this->num1 / $this->num2;
                    return $result;
                    break;
        
                }
     }
    
}
