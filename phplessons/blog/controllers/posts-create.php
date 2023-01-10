<?php
$db = new Database();
$heading = 'Create Post';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $db->query("INSERT INTO `Posts` (`Uid`, `Title`) VALUES (:Uid, :Title)", [
        ":Uid" => "Andy Run",
        ":Title" => $_POST['title']
    ]);
}
require __DIR__.'/../views/posts-create.view.php';