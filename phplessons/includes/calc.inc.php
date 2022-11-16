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
