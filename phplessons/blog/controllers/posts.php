<?php
$db = new Database();
$posts = $db->query("SELECT * FROM Posts Where Uid = 'John666'")->fetchAll();
// dumpDie($posts);


$heading = 'Posts';
require '/var/www/html/phplessons/blog/views/posts.view.php';
