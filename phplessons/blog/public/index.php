<?php
const BASE_PATH = __DIR__.'/../';
require BASE_PATH.'function.php';

// require base_path('ConnSingleton.php');
// require base_path('Database.php');
// require base_path('Response.php');
spl_autoload_register(function($class){
    // dumpDie(base_path($class.'.php')); 
    //--> "/var/www/html/phplessons/blog/public/../Database.php"

    // require $class.'.php';
    require base_path($class.'.php');
});
require base_path('router.php');

