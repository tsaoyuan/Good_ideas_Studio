<?php

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])){

    $serverName = "localhost";
    $dBUserName = "root";
    $dBPassword = "";
    $dBName = "project01";

    $conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName) or die("Connection failed: " .mysqli_connect_error());

    if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["uid"]) && isset($_POST["pwd"]) && isset($_POST["repeat_pwd"])){

        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["uid"];
        $pwd = $_POST["pwd"];
        $repeat_pwd = $_POST["repeat_pwd"];

        $sql = "INSERT INTO `users`(`Name`, `Email`, `Uid`, `Pwd`) VALUES('$name', '$email', '$username', '$pwd');";

        $query = mysqli_query($conn, $sql);
        if($query){
            echo "Write in databases!";
        }
        else{
            echo "Write in databases, something it's wrong.";
        }

    }

}