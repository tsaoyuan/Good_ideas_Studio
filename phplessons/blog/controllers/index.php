<?php
// $heading = 'Home';
// require base_path("views/index.view.php");
// view("index.view.php");
// 將 heading 帶入進 view()
view("index.view.php", [
    'heading' => 'Home'
]);