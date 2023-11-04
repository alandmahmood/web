<?php 

require "dbc.php";
if(isset($_GET["id"])){
  $id=$_GET["id"];
$query = "SELECT * from student where id='$id'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
}
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
<form method="post" action="edit.php">
            <div class="mb-3">
            <input name="stuid" type="hidden" value="<?php echo $row['id'];?>" />
              <label for="nname" class="form-label">Name</label>
              <input name= "nname" type="text" class="form-control" id="nname" value="<?php echo $row['name']; ?>">
            </div><br>
            <div class="mb-3">
              <label for="nemail" class="form-label">Email</label>
              <input name= "nemail" type="email" class="form-control" id="nemail" value="<?php echo $row['email']; ?>" >
            </div><br>
            <div class="mb-3">
              <label for="ngender" class="form-label">Gender</label><br>
              <select name="ngender" class="form-control" id="ngender" value="<?php echo $row['gender']; ?>">
              <option value="Female">Female</option>
              <option value="Male">Male</option>
              <option value="Other">Other</option>
            </select>
            <br>
            <button type="submit" value="submit "class="btn btn-primary" name="edit">Edit</button>
          </form>

          <?php

          if(isset($_POST["edit"])){
          $stuid=$_POST["stuid"];
          $nname=$_POST["nname"];
          $nemail=$_POST["nemail"];
          $ngender=$_POST["ngender"];

        $sql="UPDATE student SET `name`='$nname',email='$nemail', gender='$ngender' WHERE id=$stuid";
      
      if(mysqli_query($conn, $sql)){
          header("location: idatabase.php");
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