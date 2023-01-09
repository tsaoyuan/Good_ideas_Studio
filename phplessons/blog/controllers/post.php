<?php
$db = new Database();
$currentUid = 'John666';

$post = $db->query("SELECT * FROM Posts where Id = :Id", [
    ':Id' => $_GET['id']
    ])->fetch();

// 不符合搜尋條件
if (! $post){
    abort(Response::NOT_FOUND);
}
// 細分不符合搜尋條件的結果
if($post['Uid'] !== '$currentUid'){
    abort(Response::FORBIDDEN);
}

$heading = 'Post';
require __DIR__.'/../views/post.view.php';
