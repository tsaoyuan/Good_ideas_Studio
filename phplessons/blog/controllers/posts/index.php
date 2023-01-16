<?php
$db = new Database();
$posts = $db->query("SELECT * FROM Posts")->get();

// require __DIR__.'/../../views/posts/index.view.php';

view("posts/index.view.php", [
    'heading' => 'Posts',
    'posts' => $posts 
]);
