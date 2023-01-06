<?php
$db = new Database();

// $post = $db->query("SELECT * FROM Posts where Uid = :Uid and Id = :Id", [
//     ':Uid' => 'John666',
//     ':Id' => $_GET['id']
//     ])->fetch();

$post = $db->query("SELECT * FROM Posts where Id = :Id", [
    ':Id' => $_GET['id']
    ])->fetch();

// 不符合搜尋條件
if (! $post){
    abort(404);
}
// 細分不符合搜尋條件的結果
if($post['Uid'] !== 'John666'){
    abort(403);
}

$heading = 'Post';
require __DIR__.'/../views/post.view.php';
