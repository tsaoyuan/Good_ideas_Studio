<?php
require base_path('/Core/Validator.php');
use Core\Vaildator;
use Models\Post;
// use Core\Database;

// dumpDie($_POST);
// dumpDie($_POST["title"]);
$postId = $_POST['postId'];
$postTitle = $_POST['title'];
// $db = new Database();
// dumpDie($postId);

$post = new Post();

$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["update"])) {
        
        // $db->query('UPDATE Posts SET Title = :title WHERE Id = :id', [
        //     ':id' => $_POST["postId"],
        //     ':title' => $_POST["title"]
        // ]);

        $post->update($postId, $postTitle);

        // 強制轉址：
        header("Location: /posts");
    }
} else {
    echo "nothing";
} 
