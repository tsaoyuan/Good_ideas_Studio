<?php
require base_path('/Core/Validator.php');
use Core\Vaildator;
use Models\Post;

$postId = $_POST['postId'];
// dumpDie($postId);

$post = new Post();

$errors = [];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $result = $post->getPost($postId);
    
}

view("posts/update.view.php", [
    'heading' => 'Update Post',
    'errors'=> $errors, 
    // 'postId'=> $postId,
    'result' => $result

]);