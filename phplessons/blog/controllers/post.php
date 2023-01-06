<?php
$db = new Database();

$post = $db->query("SELECT * FROM Posts where id = :id", [':id' => $_GET['id']])->fetch();

// dumpDie($post);

$heading = 'Post';
require __DIR__.'/../views/post.view.php';
