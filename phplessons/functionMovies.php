<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <?php
        $movies = [
            ["name"=>"Jurassic World: Dominion",
            "date"=>"2022",
            "runningTime"=>"2.5hr"
            ],

            ["name"=>"Moonfall",
            "date"=>"2022",
            "runningTime"=>"2.1hr"
            ],

            ["name"=>"Me Before you",
            "date"=>"2016",
            "runningTime"=>"1.5hr"
            ]
        ];

       foreach($movies as $movie):
         if($movie["date"]==="2022"){
            echo $movie['name']. "</br>";
         }
         else{
            echo "No this movie!</br>";
         }
       endforeach;
    ?>
</body>
</html>