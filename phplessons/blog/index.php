<?php
require './function.php';
// require './router.php';
require './ConnSingleton.php';
require './Database.php';

$db = new Database();
// $posts = $db->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC); 
$id = $_GET["id"];
$sql = "SELECT * FROM Users where id = {$id}";
$posts = $db->query($sql)->fetch(PDO::FETCH_ASSOC); 
dumpDie($posts);