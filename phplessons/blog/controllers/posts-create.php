<?php
require './Validator.php';
$db = new Database();
$heading = 'Create Post';

if($_SERVER["REQUEST_METHOD"] == "POST"){
// before insert into check
    $errors = [];
    $validator = new Vaildator;
    // mearge title empty input and title maximum number of characters
    if(!strlen($validator->string($_POST['title'], 1, 250))){
        $errors['title'] = 'The title of no more than 250 characters is required.'; 
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
