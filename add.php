<?php include "dbc.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
<form method="post" action="add.php">
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
              <option value="Male">Male</option>
              <option value="Other">Other</option>
            </select>
            </div><br>
            <button type="submit" value="submit "class="btn btn-primary" name="insert">Insert</button>
          </form>

          <?php 
              if(isset($_POST["insert"])){
              $name=$_POST["name"];
              $email=$_POST["email"];
              $gender=$_POST["gender"];
              
              $sql= "INSERT INTO student(`name`, email, gender) VALUES
              ('$name', '$email', '$gender')";
            
              if (mysqli_query($conn,$sql)){
                echo "new record created successfully";
                header("Refresh:5; url=idatabase.php");
              }
              else {
                echo mysqli_error($conn);
              }
            }
          ?>
</div>
</body>
</html>