<?php
// Arithmetic
echo 5.5 . PHP_EOL;
echo 5 + 5 . PHP_EOL;

$num = 5;
$strlink = "$num" . "$num";
echo $strlink .PHP_EOL;

echo 5 - 6 .PHP_EOL;
echo 5%4 .PHP_EOL;
echo 5/4 .PHP_EOL;
echo 5**2 .PHP_EOL;

// Comparison
$x = 10;
$y = "10";

if($x == $y){
    echo "True!" .PHP_EOL;
}
else{
    echo "false!" .PHP_EOL;
}

if($x === $y){
    echo "True!" .PHP_EOL;
}
else{
    echo "false!" .PHP_EOL;
}

echo $x === $y ?  "True!" .PHP_EOL :  "false~~" .PHP_EOL;









