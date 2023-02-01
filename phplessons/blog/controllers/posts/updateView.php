<?php
require base_path('/Core/Validator.php');
use Core\Vaildator;
use Models\Post;
// use Core\Database;

$postId = $_POST['postId'];
// $db = new Database();
// dumpDie($postId);

$post = new Post();

$errors = [];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    /*
    $result = $db->query(
        'SELECT * FROM Posts WHERE Id = :Id',
        [
            ':Id' => $postId
        ]
        // )->findOrFail();
    )->find();
    */
    $result = $post->getPost($postId);
}

view("posts/updateView.view.php", [
'heading' => 'Update View Post',
'errors'=> $errors, 
'result' => $result
]);