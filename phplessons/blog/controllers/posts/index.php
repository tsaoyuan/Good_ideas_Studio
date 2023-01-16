<?php
use Core\Database;

$db = new Database();
$posts = $db->query("SELECT * FROM Posts")->get();

view("posts/index.view.php", [
    'heading' => 'Posts',
    'posts' => $posts 
]);
