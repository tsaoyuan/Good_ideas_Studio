<?php
$db = new Database();
// dumpDie($id);
$posts = $db->query("SELECT * FROM Posts where id = :id", [':id' => $_GET['id']])->fetchAll();


$heading = 'Post';
require __DIR__.'/../views/posts.view.php';
