<?php
require './function.php';
// require './router.php';
require './ConnSingleton.php';
require './Database.php';

$db = new Database();
$id = $_GET["id"];
// question mark (?)
// $sql = "SELECT * FROM Users where id = ?";
// $posts = $db->query($sql, [$id])->fetch(PDO::FETCH_ASSOC); 
// a named parameter like :id
$sql = "SELECT * FROM Users where id = :id";
$posts = $db->query($sql, [':id' => $id])->fetch(PDO::FETCH_ASSOC); 
dumpDie($posts);