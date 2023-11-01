
<?php
include "dbc.php";
          if(isset($_POST["Edit"])){
          $nname=$_POST["nname"];
          $nemail=$_POST["nemail"];
          $ngender=$_POST["ngender"];

        $sql="UPDATE student SET `name`='$nname',email='$nemail', gender='$ngender' WHERE id=$id";
      
      if(mysqli_query($conn, $sql)){
          echo "Record updated successfully";
          header("Refresh:5; url=idatabase.php");
        }
      
        else{
          echo mysqli_error($conn);
        }
    }
          ?>