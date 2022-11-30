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
            "date"=>2022,
            "runningTime"=>"2.5hr"
            ],

            ["name"=>"Moonfall",
            "date"=>2022,
            "runningTime"=>"2.1hr"
            ],

            ["name"=>"Me Before you",
            "date"=>2016,
            "runningTime"=>"1.5hr"
            ],

            ["name"=>"Emma.",
            "date"=>2020,
            "runningTime"=>"2hr"
            ]
        ];

        function filter ($items, $fn){
            $filterItems = [];
            
            foreach($items as $item){
                if($fn($item)){
                    array_push($filterItems, $item);
                }
            }
            return $filterItems;
        }

        $getMovies = filter($movies, function($movie){
            // return $movie['name'] === 'Moonfall';
            return $movie['date'] > 2019;
        }); 
    ?>
    <?php foreach($getMovies as $movie): ?>
        <p><?= $movie['name'] ." In {$movie['date']} years "; ?></p>
    <?php endforeach; ?>
    
</body>
</html>