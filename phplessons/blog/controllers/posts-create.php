<?php
require './Validator.php';
$db = new Database();
$heading = 'Create Post';

if($_SERVER["REQUEST_METHOD"] == "POST"){
// before insert into check
    $errors = [];
    var_dump($errors);
    $validator = new Vaildator;
    // check title empty input
    if($validator->string($_POST['title'])){
        $errors['title'] = 'Title is required!'; 
    }

    // check title maximum number of characters
    if(strlen($_POST['title']) > 250){
        $errors['title'] = 'The title can not be more than 250 characters.'; 
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