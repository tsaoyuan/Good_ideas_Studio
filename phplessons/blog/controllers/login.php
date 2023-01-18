<?php
require base_path('/Core/Validator.php');
use Core\Database;
use Core\Vaildator;

$db = new Database();
$errors = [];
$currentUid = $_POST["uid"];
$currentPwd = $_POST["pwd"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!Vaildator::string($_POST['uid'], 1, 25) || !Vaildator::string($_POST['pwd'], 1, 25)) {
        $errors['emptyInput'] = "Fill in all Fields";
    }else{

        $post = $db->query("SELECT * FROM Users where Uid = :Uid and Pwd = :Pwd", [
        ':Uid' => $currentUid,
        ':Pwd' => $currentPwd
        ])->findOrFail();

        // check this user have signup
        authorizeLogin($post['Uid'] == $currentUid, $post['Pwd'] == $currentPwd);
        
        // user have already signup, user imformation set in $user
        $user = $db->query("SELECT * FROM Users where Uid = :Uid and Pwd = :Pwd", [
        ':Uid' => $currentUid,
        ':Pwd' => $currentPwd
        ])->find();

        // dumpDie($user["Uid"]);
        session_start();
        // user imformation set in $_SESSION["uid"] and $_SESSION["pwd"]
        $_SESSION["uid"] = $user["Uid"]; 
        $_SESSION["pwd"] = $user["Pwd"]; 
        // dumpDie($_SESSION);
    }


}
// require __DIR__ . '/../views/login.view.php';
view("login.view.php", [
    'heading' => 'Log In',
    'errors' => $errors
]);