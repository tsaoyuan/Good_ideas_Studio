<?php
// require __DIR__.'/../Validator.php';
require base_path('Core/Validator.php');
$db = new Database();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // before insert into check
    $errors = [];
    
    // mearge title empty input and title maximum number of characters
    if(!Vaildator::string($_POST['uid'], 1, 25) || !Vaildator::string($_POST['pwd'], 1, 25)){
        $errors['emptyInput'] = "Fill in all Fields";
        
    }
    
    if(empty($errors)){
        
        $db->query("INSERT INTO `Users` (`Uid`, `Pwd`) VALUES (:Uid, :Pwd)", [
            ":Uid" => $_POST['uid'],
            ":Pwd" => $_POST['pwd']
        ]);
    }
    
}

// require __DIR__.'/../views/signup.view.php';
view("signup.view.php", [
    'heading' => 'Sign Up'
]);