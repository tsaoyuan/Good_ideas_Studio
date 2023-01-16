<?php
$db = new Database();
$currentUid = 'Andy Run';

$post = $db->query("SELECT * FROM Posts where Id = :Id", [
    ':Id' => $_GET['id']
    ])->findOrFail();

// post 權限判斷
authorize($post['Uid'] == $currentUid);

// require __DIR__.'/../../views/posts/show.view.php';

view("posts/show.view.php", [
    'heading' => 'Post',
    'post' => $post 
]);
