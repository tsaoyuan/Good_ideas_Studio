<?php
$name = 'Tom';
echo $name.PHP_EOL;
echo "'Tom', 'Marry', 'Lucas', 'Luna', 'Tya'" . PHP_EOL;

$namelist = ['Tom', 'Marry', 'Lucas', 'Luna', 'Tya'];

echo 'implode(" ", $array): '.implode(" " , $namelist) . PHP_EOL;
echo 'implode(", ", $array): '.implode(", " , $namelist) . PHP_EOL;
echo "'".implode("','" , $namelist)."'" . PHP_EOL;

require_once './vendor/autoload.php';
$faker = "Faker\Factory"::create();
echo $faker->firstname().PHP_EOL;

$firstnamelist = [];
for($i = 0; $i < 8; $i++){
    array_push($firstnamelist, "$faker->firstname");

}

echo implode(", ", $firstnamelist) .PHP_EOL;

$array = ["1", "3", "a", "b", "c", "d"];
$out = array_slice($array, 0, 3);
echo implode(", ", $out). PHP_EOL;

$outputTen = array_slice($firstnamelist, 0, 10);
$outputZerotoFive = array_slice($firstnamelist, 0, 5);
$outputSixtoEleven = array_slice($firstnamelist, 5, 5);

echo implode(", ", $outputTen). PHP_EOL;
echo implode(", ", $outputZerotoFive). PHP_EOL;
echo implode(", ", $outputSixtoEleven). PHP_EOL;
