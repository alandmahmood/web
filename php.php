<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 5;
        function test(){
            $y = 5;
            echo "<p>Variable y inside funtion is: $y</p>";
            echo "<p>Variable x inside funtion is: $x</p>";
        }
            test();
            echo "<p>Variable y outside funtion is: $y</p>";
            echo "<p>Variable x outside funtion is: $x</p>";
            
            function statictest(){
                static $x=5;
                static $y=3;
                //a static variable doesn't initialize everytime
                echo "$x<br>";
                if($y!="1"){
                    $x=$x**$y;
                }
                
                if($x > "100" && $y>"1"){
                    echo "the value of x is greater than 100<br>";
                }    
                
                $y--;
                if($x > "100" && $y=="1"){
                    echo "$x<br>";
                    echo "<br>the value of x is greater than 100, and y is equal to 1";
                }
                
                
                
                
            }

            statictest();
            statictest();
            
            
            


            
            ?>
</body>
</html>