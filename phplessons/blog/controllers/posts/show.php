<?php
use Core\Database;

$db = new Database();
// $currentUid = 'Andy Run';
$currentUid = $_SESSION['uid'];
// dumpDie($currentUid);

$post = $db->query("SELECT * FROM Posts where Id = :Id", [
    ':Id' => $_GET['id']
    ])->findOrFail();


// post 權限判斷
authorize($post['Uid'] == $currentUid);

view("posts/show.view.php", [
    'heading' => 'Post',
    'post' => $post 
]);
