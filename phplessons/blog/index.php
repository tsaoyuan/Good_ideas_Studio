<?php
require './function.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'] ;
// echo $uri;

$routers = [
    '/' => './controllers/index.php',
    '/about' => './controllers/about.php',
    '/contact' => './controllers/contact.php',
];

if(array_key_exists($uri, $routers)){
    require  $routers[$uri];
}else{
    http_response_code(404);
    require './views/404.php';
}