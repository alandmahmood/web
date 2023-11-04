
<?php

require "dbc.php";
          if(isset($_GET["id"])){
            $id=$_GET["id"];
            $sql="DELETE FROM student WHERE id=$id";
            if(mysqli_query($conn, $sql)){
              header("location: idatabase.php");
            }
          
            else{
              echo mysqli_error($conn);
            }
          }
          ?>