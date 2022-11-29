<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <?php
        $users = [
            ["name"=>"Tom",
             "age"=>35,
             "city"=>"Taipei"],

             ["name"=>"Lucy",
             "age"=>25,
             "city"=>"Tainan"],
        ];
    ?>
    <ul>
        <?php foreach($users as $user) : ?>
        <li><?= $user["name"] ?></li>
        <?php endforeach; ?>
    </ul>
 
</body>
</html>