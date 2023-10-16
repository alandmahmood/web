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

                $names=array("Daisy","Melody","Katie");

                $arraylength=count($names);
                //array

                for($x =0; $x<$arraylength; $x++){
                    echo "$names[$x]<br>";
                }
                //print an array
                
                $ages=array("Daisy"=>"20","Melody"=>"17","Katie"=>"19");
                //asoociative array: array where you use something other than the automatic numbers given as indexes
                echo "<br>";
                foreach($ages as $x =>$x_value){
                    echo "key= ".$x.", age= ".$x_value;
                    echo "<br>";
                }
                //foreach look, automatically goes through all the indexes

                $gfs=array(array("Daisy","Amy"),array("Melody","Fall"),array("Katie","Unknown"));

                $countx=count($gfs);
                $county=count($gfs[1]);
                echo "<br>";
                for ($x=0; $x<$countx;$x++){
                    for($y=0; $y<$county; $y++){
                        echo $gfs[$x][$y]." <3 ";
                    }
                    echo "<br>";
                }

                echo "<br>";
                krsort($ages);

                foreach($ages as $x =>$x_value){
                    echo "key= ".$x.", age= ".$x_value;
                    echo "<br>";
                }

            
            ?>
</body>
</html>