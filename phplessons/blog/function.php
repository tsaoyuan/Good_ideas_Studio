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

function authorizeLogin($conditionUid, $conditionPwd, $status = Response::FORBIDDEN)
{
    if(!$conditionUid || !$conditionPwd ){
      abort($status);
    }
    
    abort(200);
}

// relative path function (path hleper function)
// why can I use BASE_PATH? index.php require function.php, then function can use `BASE_PATH`
function base_path($path){
  return BASE_PATH.$path;
}
