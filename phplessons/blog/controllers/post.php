<?php
$db = new Database();
$currentUid = 'John666';

$post = $db->query("SELECT * FROM Posts where Id = :Id", [
    ':Id' => $_GET['id']
    ])->findOrFail();

// post 權限判斷
authorize($post['Uid'] == $currentUid);

$heading = 'Post';
require __DIR__.'/../views/post.view.php';
