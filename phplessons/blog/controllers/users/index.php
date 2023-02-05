<?php
use Models\User;

$users = new User();

$users = $users->getUsers($_SESSION["uid"]);
// dumpDie($_SESSION);
// dumpDie($users);

view("users/index.view.php", [
    'heading' => 'Manage Account',
    'users' => $users,
]);
