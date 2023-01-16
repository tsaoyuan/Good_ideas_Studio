<?php
require base_path('/Core/Validator.php');
use Core\Database;
use Core\Vaildator;

$db = new Database();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // before insert into check
        $errors = [];
        $currentUid = $_POST["uid"];
        $currentPwd = $_POST["pwd"];

    if (!Vaildator::string($_POST['uid'], 1, 25) || !Vaildator::string($_POST['pwd'], 1, 25)) {
        $errors['emptyInput'] = "Fill in all Fields";
    }else{

        $post = $db->query("SELECT * FROM Users where Uid = :Uid and Pwd = :Pwd", [
        ':Uid' => $currentUid,
        ':Pwd' => $currentPwd
        ])->findOrFail();
    
        authorizeLogin($post['Uid'] == $currentUid, $post['Pwd'] == $currentPwd);
    }


}
// require __DIR__ . '/../views/login.view.php';
view("login.view.php", [
    'heading' => 'Log In'
]);