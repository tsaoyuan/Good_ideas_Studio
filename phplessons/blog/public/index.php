<?php
const BASE_PATH = __DIR__.'/../';
require BASE_PATH.'function.php';

spl_autoload_register(function($class){
    // dumpDie(base_path($class.'.php')); 
    //--> "/var/www/html/phplessons/blog/public/../Database.php"

    // require 'Core/'.$class.'.php';
    // require base_path('Core/'.$class.'.php');
    require base_path("/Core/{$class}.php");
});
require base_path('router.php');

