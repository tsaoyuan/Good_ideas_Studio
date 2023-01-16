<?php
// require __DIR__.'/../../Validator.php';
require base_path('Validator.php');
$db = new Database();

// before insert into check
$errors = [];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // mearge title empty input and title maximum number of characters
    if(!Vaildator::string($_POST['title'], 1, 250)){
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
// require __DIR__.'/../../views/posts/create.view.php';

view("posts/create.view.php", [
    'heading' => 'Create Post',
    'errors'=> $errors 
]);