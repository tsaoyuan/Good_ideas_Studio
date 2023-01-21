<?php
// use Core\Database;
use Models\Post;

// $db = new Database();
$posts = new Post();
// $posts = $db->query("SELECT * FROM Posts")->get();
$posts = $posts->all();


view("posts/index.view.php", [
    'heading' => 'Posts',
    'posts' => $posts
]);
