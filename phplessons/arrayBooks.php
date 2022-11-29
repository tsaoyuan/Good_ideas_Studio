<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
</head>
<body>
    <?php
    $books = ["Love and Gun",
            "Invesetment portfolio",
            "Pets"];
    ?>
    <li><?php echo $books[0]; ?></li>
    <li><?php echo $books[1]; ?></li>
    <li><?php echo $books[2]; ?></li>
</br>
   <ul> 
        <?php
            foreach($books as $book){
                echo $book."</br>";
            }
        ?>
    </ul>
    <ul> 
        <?php foreach($books as $book): ?>
            <li><?= $book ?></li> 
        <?php endforeach; ?>

    </ul>
</body>
</html>