<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routers = require __DIR__. '/routers.php';

function abort($code = 404){

    http_response_code($code);
    require "./views/{$code}.php";

    die();
}

function routerToController($uri, $routers)
{
    if (array_key_exists($uri, $routers)) {
        // require  $routers[$uri];
        require  base_path($routers[$uri]);
    } else {
        abort();
    }
}

routerToController($uri, $routers);