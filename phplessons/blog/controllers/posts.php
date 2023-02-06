<?php
$db = new Database();
// $posts = $db->query("SELECT * FROM Posts Where Uid = 'John666'")->fetchAll();
$posts = $db->query("SELECT * FROM Posts")->fetchAll();
// dumpDie($posts);


$heading = 'Posts';
require __DIR__.'/../views/posts.view.php';
