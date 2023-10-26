<?php

if (isset($_POST["dob"])){
            
    $name=$_POST["name"];
  $email=$_POST["email"];
  $gender=$_POST["gender"];
  $dob=$_POST["dob"];
  
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

if(isset($_POST["stuid"]) && $_POST["button"]=="update"){
          
    $stuid=$_POST["stuid"];
    $nname=$_POST["nname"];
  $sql="UPDATE student SET `name`='$nname' WHERE id=$stuid";

  if(mysqli_query($conn, $sql)){
    echo "Record updated successfully";
    $delay = 5;
      header("Refresh: $delay");
  }

  else{
    echo mysqli_error($conn);
  }
}

if(isset($_POST["stuid"]) && $_POST["button"]=="delete"){
    $stuid=$_POST["stuid"];
    $sql="DELETE FROM student WHERE id=$stuid";
    
    if(mysqli_query($conn, $sql)){
        echo "Record deleted successfully";
        $delay = 5;
          header("Refresh: $delay");
      }
    
      else{
        echo mysqli_error($conn);
      }

}


        $sql = "SELECT * FROM student WHERE name LIKE 'Kochar%'";
        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result)>0){
          while($row=mysqli_fetch_assoc($result)){
            echo $row["name"]."<br>";
          }
        }



?>