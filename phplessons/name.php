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