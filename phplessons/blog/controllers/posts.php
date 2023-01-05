<?php
$db = new Database();
dumpDie($db);
$heading = 'Posts';
require '/var/www/html/phplessons/blog/views/posts.view.php';
