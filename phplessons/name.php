<?php
/*
// hw1
$name = 'Tom';
echo $name.PHP_EOL;
echo "'Tom', 'Marry', 'Lucas', 'Luna', 'Tya'" . PHP_EOL;

$namelist = ['Tom', 'Marry', 'Lucas', 'Luna', 'Tya'];

echo 'implode(" ", $array): '.implode(" " , $namelist) . PHP_EOL;
echo 'implode(", ", $array): '.implode(", " , $namelist) . PHP_EOL;
echo "'".implode("','" , $namelist)."'" . PHP_EOL;
*/


// require Faker packge
require_once './vendor/autoload.php';
$faker = "Faker\Factory"::create();
// echo $faker->firstname().PHP_EOL;


/*
// Faker name insert into $firstnamelist
$firstnamelist = [];
for($i = 0; $i < 20; $i++){
    array_push($firstnamelist, "$faker->firstname");

}
*/
/*
echo implode(", ", $firstnamelist) .PHP_EOL;

$array = ["1", "3", "a", "b", "c", "d"];
$out = array_slice($array, 0, 3);
echo implode(", ", $out). PHP_EOL;
*/

/*
// Hard code
$outputTen = array_slice($firstnamelist, 0, 10);
$outputZerotoFive = array_slice($firstnamelist, 0, 5);
$outputSixtoEleven = array_slice($firstnamelist, 5, 5);

echo implode(", ", $outputTen). PHP_EOL;
echo implode(", ", $outputZerotoFive). PHP_EOL;
echo implode(", ", $outputSixtoEleven). PHP_EOL;
*/
/*
for($i = 0; $i < count($firstnamelist); $i+=5){

    $output = array_slice($firstnamelist, $i, 5);
    echo implode(", ", $output). PHP_EOL;
}
*/

/*
// clac strings length
$word = "1   4";
echo strlen($word).PHP_EOL;
*/

/*
- get faker name
- clac faker name's length
- 10 - "faker name's length" = $space
- echo "faker name" + $space 
- push "faker name" + $space insert into $firstnamelist

* don't consider "faker name's length" bigger than 10 words 
*/

/*
// hard code
$fakername = $faker->firstname();
$fakerlength = strlen($fakername);
$addspace = 10 - $fakerlength;

echo "fakername： $fakername" .PHP_EOL;
echo "fakerlength： $fakerlength" .PHP_EOL;
echo "補幾個空白： $addspace" .PHP_EOL;
*/

$fakenamelist =[];

for($j = 0; $j < 10; $j++){

    $fakername = $faker->firstname();
    $fakerlength = strlen($fakername);
    $addspace = 10 - $fakerlength;

    for($i = 1; $i < $addspace+1; $i++){
        $space = " ";
        $fakername .= $space;
    }

    $getname = $fakername;
    array_push($fakenamelist, $getname);
}

echo implode(", ", $fakenamelist). PHP_EOL;
}

echo implode(", ", $fakenamelist). PHP_EOL;
