<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<link rel="stylesheet" href="./calc.css">
<body>
    <div class="wrap">   
        <form>
            <input class="insert" type="text" name="num1" placeholder="Number 1">
            <select name="operator">
                <option>None</option>
                <option>Plus</option>
                <option>Subtrct</option>
                <option>Multily</option>
                <option>Divide</option>
            </select>
            <input class="insert" type="text" name="num2" placeholder="Number 2">
            </br>
            <button name="submoooit" value="submit" type="submit">Submit</button>
        </form>
        <p>This is answer is: </p>
        <?php
            if(isset($_GET['submoooit'])){
                $resultnum1 = $_GET['num1'];
                $resultnum2 = $_GET['num2'];
                $operator = $_GET['operator'];
                
                switch($operator){
                    case "None":
                        echo "Something wrrong! Yu need to select a method!".PHP_EOL;
                        break;
                    
                    case "Plus":
                        echo $resultnum1 + $resultnum2 .PHP_EOL;
                        break;
                    
                    case "Subtrct":
                        echo $resultnum1 - $resultnum2 .PHP_EOL;
                        break;

                    case "Multily":
                        echo $resultnum1 * $resultnum2 .PHP_EOL;
                        break;

                    case "Divide":
                        echo $resultnum1 / $resultnum2 .PHP_EOL;
                        break;

                }

            }
            ?> 
    </div>
    
</body>
</html>