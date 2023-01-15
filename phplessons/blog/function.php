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

// `view` 在之後的應用程式會被多次使用
// 添加一個 View 這樣的補助函數是有意義的
// reuse base_path()
function view($path){
  return base_path('views/'.$path); // views/index.view.php
}

