<?php
$array = ["apple","banana","watermalon"];
foreach($array as $fruit){
    echo $fruit .PHP_EOL;
}

function calc($x){
    $num = $x * 0.5;
    echo "Here is 50% of what you wrote: ". $num .PHP_EOL;
}
$x = 100;
calc($x);

$a = 200;
calc($a);
calc(10);