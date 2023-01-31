<?php
require base_path('/Core/Validator.php');
use Core\Vaildator;
use Models\Post;

$postId = $_POST['postId'];
dumpDie($postId);

view("posts/update.view.php", [
    'heading' => 'Update Post',
    'errors'=> $errors, 
    'postId'=> $postId 
]);