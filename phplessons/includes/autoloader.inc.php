<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    // no trns webpage

    $path = './classes/';
    $extension = '.class.php';
    $fullPath = $path. $className . $extension;

    if(!file_exists($fullPath)){
        return false;
    }

    include_once $fullPath;
    

    // trns webpage
    /*
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if (strpos($url, 'includes')!== false){
        $path = '../classes/';
    }
    else{
        $path = './classes/';

    }
    $extension = '.class.php';

    $fullPath = $path. $className . $extension;

    require_once $fullPath;
    */
}

