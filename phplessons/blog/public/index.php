<?php
const BASE_PATH = __DIR__.'/../';
require BASE_PATH.'/Core/function.php';

spl_autoload_register(function($class){
    // dumpDie(base_path($class.'.php')); 

    require base_path("/Core/{$class}.php");
});
require base_path('/Core/router.php');

