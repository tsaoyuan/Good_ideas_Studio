<?php
use Models\User;

$users = new User();
// 依照 users role, 顯示對應內容
// $users = $users->getPostsByRole($_SESSION["uid"], $_SESSION["role"]);


$users = $users->getUsers($_SESSION["uid"]);
// dumpDie($_SESSION);
dumpDie($users);
// dumpDie($users->{'db'});
/*
if(isset($_SESSION["uid"])){
    $currentUser = $_SESSION["uid"];
}
*/
view("users/index.view.php", [
    'heading' => 'Manage Account',
    // 'posts' => $posts,
    // 'currentUser' => $currentUser
]);
