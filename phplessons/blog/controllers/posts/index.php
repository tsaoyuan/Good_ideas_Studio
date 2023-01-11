<?php
$db = new Database();
$posts = $db->query("SELECT * FROM Posts")->get();

$heading = 'Posts';
require __DIR__.'/../../views/posts/index.view.php';
