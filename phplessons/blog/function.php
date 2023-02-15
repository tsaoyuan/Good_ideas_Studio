<?php
// var_dump($value) and die()
function dumpDie($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

// return true or false
function urlIs($value){
    return $_SERVER['REQUEST_URI'] == $value;
}

// post 權限判斷
function authorize($condition, $status = Response::FORBIDDEN)
{
    if(!$condition){
      abort($status);
    }
}

