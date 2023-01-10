<?php
$db = new Database();
$heading = 'Create Post';

if($_SERVER["REQUEST_METHOD"] == "POST"){
// before insert into check
    $errors = [];
    // check title empty input
    if(strlen($_POST['title']) == 0){
        $errors['title'] = 'Title is required!'; 
    }

    // title have words, then insert into value
    if(empty($errors)){
        
        $db->query("INSERT INTO `Posts` (`Uid`, `Title`) VALUES (:Uid, :Title)", [
            ":Uid" => "Andy Run",
            ":Title" => $_POST['title']
        ]);
    }

}
require __DIR__.'/../views/posts-create.view.php';