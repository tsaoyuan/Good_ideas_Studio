<?php

$heading = 'Create Post';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    dumpDie($_POST);
}
require __DIR__.'/../views/posts-create.view.php';