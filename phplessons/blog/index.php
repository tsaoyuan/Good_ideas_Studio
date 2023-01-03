<?php
require './function.php';
// require './router.php';
require './ConnSingleton.php';
require './Database.php';

$db = new Database();
$posts = $db->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC); 
dumpDie($posts);