<?php include "dbc.php";
$id=$_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
<form method="post" action="?">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input name= "name" type="text" class="form-control" id="name" value="<?php mysqli_query($conn,"SELECT `name` FROM student WHERE id=$id"); ?>">
            </div><br>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input name= "email" type="email" class="form-control" id="email" >
            </div><br>
            <div class="mb-3">
              <label for="gender" class="form-label">Gender</label><br>
              <select name="ngender" class="form-control" id="ngender">
                <option value="" disabled selected>Choose an Option</option>
              <option value="Female">Female</option>
              <option value="Male">Male</option>
              <option value="Other">Other</option>
            </select>
            <br>
            <button type="submit" value="submit "class="btn btn-primary" name="edit">Edit</button>
          </form>

          <?php

          if(isset($_POST["edit"])){
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
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>