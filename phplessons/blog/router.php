<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// echo $uri;

$routers = [
    '/' => './controllers/index.php',
    '/about' => './controllers/about.php',
    '/contact' => './controllers/contact.php',
];

function abort($code = 404){

    http_response_code($code);
    require "./views/{$code}.php";

    die();
}

function routerToController($uri, $routers)
{
    if (array_key_exists($uri, $routers)) {
        require  $routers[$uri];
    } else {
        abort();
    }
}

routerToController($uri, $routers);