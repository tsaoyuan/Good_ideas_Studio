<?php
session_start();
session_unset();
session_destroy();

// going to Home page 

view("index.view.php", [
    'heading' => 'Home',
    'errors' => $errors
]);