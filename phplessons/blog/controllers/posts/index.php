<?php
use Models\Post;

$posts = new Post();
// $posts = $db->query("SELECT * FROM Posts")->get();
// $posts = $posts->all();
// 依照 users role, 顯示對應內容
$posts = $posts->getPostsByRole($_SESSION["uid"], $_SESSION["role"]);
// dumpDie($_SESSION);

view("posts/index.view.php", [
    'heading' => 'Posts',
    'posts' => $posts
]);
