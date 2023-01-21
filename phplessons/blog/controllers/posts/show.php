<?php
// Post database 部份交由 Database 抽象層 Models 管理
// use Core\Database;
use Models\Post;

// $db = new Database();
// $currentUid = $_SESSION['uid'];

// $post = $db->query("SELECT * FROM Posts where Id = :Id", [
//     ':Id' => $_GET['id']
//     ])->findOrFail();

// Models/Post
$post = new Post();
$post = $post->getPost($_GET['id']);

// post 權限判斷
// authorize($post['Uid'] == $currentUid);

// view("posts/show.view.php", [
//     'heading' => 'Post',
//     'post' => $post 
// ]);
