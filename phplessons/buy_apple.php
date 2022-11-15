<?php
$cash = 30;
$apple = 5;
$count = 0;
while($cash >= 0){
    system('clear');
    echo "一顆蘋果 5 元".PHP_EOL;
    echo 'Your cash is: '. $cash .PHP_EOL;
    echo "Your buy $count apple." .PHP_EOL;

    sleep(2);
    $cash = $cash - $apple;
    $count++;
}
system('clear');

echo "No money! Get away!".PHP_EOL;

