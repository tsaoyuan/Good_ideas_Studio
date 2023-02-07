<?php
require base_path("Core/Validator.php");
use Core\Database;
use Core\Vaildator;

$db = new Database();
$message = [];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // before insert into check
    
    // mearge title empty input and title maximum number of characters
    if(!Vaildator::string($_POST["uid"], 1, 25) || !Vaildator::string($_POST['pwd'], 1, 25)){
        $message["emptyInput"] = "Fill in all Fields";
    }
    
    if(!Vaildator::string($_POST["pwd"], 1, 4)){
        $message["pwdOverLength"] = "Password Over 4 Code";
    }

    if(empty($message)){
        
        $db->query("INSERT INTO `Users` (`Uid`, `Pwd`) VALUES (:Uid, :Pwd)", [
            ":Uid" => $_POST["uid"],
            ":Pwd" => $_POST["pwd"]
        ]);

        $message["SignUpSucess"] = "Sign Up Sucess.. wait 2 sceond";
        // dumpDie($message);
        header("Refresh: 2; url=/login");
    }
    
}

view("users/create.view.php", [
    "heading" => 'Sign Up',
    "message"=> $message 
]);