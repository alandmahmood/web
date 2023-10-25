<?php
include "dbc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
<form method="post" action="database.php">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input name= "name" type="text" class="form-control" id="name" >
            </div><br>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input name= "email" type="email" class="form-control" id="email" >
            </div><br>
            <div class="mb-3">
              <label for="gender" class="form-label">Gender</label><br>
              <select name="gender" class="form-control" id="gender">
                <option value="" disabled selected>Choose an Option</option>
              <option value="Female">Female</option>
                <option value="Other">Other</option>
                <option value="Male">Male</option>
            </select>
            </div><br>
            <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label><br>
            <input type="date" name="dob" class="form-control" id="dob">
            </div><br>
            <button type="submit" value="submit "class="btn btn-primary">Insert</button>
          </form>
</div>
          <hr>
          <div class="container">
          <form method="post" action="cookie&session.php">
            <div class="mb-3">
              <label for="stuid" class="form-label">ID to be affected</label>
              <input name= "stuid" type="number" class="form-control" id="stuid" >
            </div><br>
            <div class="mb-3">
              <label for="nname" class="form-label">The new name</label>
              <input name= "nname" type="text" class="form-control" id="nname" >
            </div><br>
            </div><br>
            <button type="submit" value="submit "class="btn btn-primary">Replace</button>
          </form>
          </div>
          <?php
          if (isset($_REQUEST["dob"])){
            
            $name=$_REQUEST["name"];
          $email=$_REQUEST["email"];
          $gender=$_REQUEST["gender"];
          $dob=$_REQUEST["dob"];
          
          $sql= "INSERT INTO student(`name`, email, gender, dob) VALUES
          ('$name', '$email', '$gender', '$dob')";

          if (mysqli_query($conn,$sql)){
            echo "new record created successfully";
            $delay = 5;
            header("Refresh: $delay");
          }
          else {
            echo mysqli_error($conn);
          }

          
        }
        else {
          return;
        }
        
        

      //   if(isset($_POST["stuid"])){
          
      //     $stuid=$_POST["stuid"];
      //     $nname=$_POST["nname"];
      //   $sql="UPDATE student SET `name`='$nname' WHERE id=$stuid";

      //   if(mysqli_query($conn, $sql)){
      //     echo "Record updated successfully";
      //     $delay = 5;
      //       header("Refresh: $delay");
      //   }

      //   else{
      //     echo mysqli_error($conn);
      //   }
      // }

        // $sql = "SELECT * FROM student WHERE name LIKE 'Kochar%'";
        // $result = mysqli_query($conn,$sql);

        // if (mysqli_num_rows($result)>0){
        //   while($row=mysqli_fetch_assoc($result)){
        //     echo $row["name"]."<br>";
        //   }
        // }
          
          ?>
</div>
</body>
</html>