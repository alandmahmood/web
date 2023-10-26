<?php 
setcookie("user","amy",time()+(86400),"/");
session_start();
$_SESSION["color"]="pink";
include "dbc.php";
?>
<!-- the setcookie function has to be before the html tag but aslo be contained inside a php tag -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
    
        if(!isset($_COOKIE["user"])){
            echo "cookie user is not set";
        }
        else {
            echo "cookie user is set<br>";
            echo "value of the cookie is: ".$_COOKIE["user"];
        }

        echo "<br>".$_SESSION["color"];

        session_unset();
        session_destroy();
        // you can write the session name inside the parenthesies to destroy or unset only that value
    
        
    ?>

    
</body>
</html>