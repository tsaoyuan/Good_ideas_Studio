<?php
$db = new Database();
$posts = $db->query("SELECT * FROM Posts")->get();
// dumpDie($posts);


$heading = 'Posts';
require __DIR__.'/../views/posts.view.php';
