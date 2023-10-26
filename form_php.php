<?php

  include "dbc.php";

if (isset($_POST["insert"])){
            
  $name=$_POST["name"];
  $email=$_POST["email"];
  $gender=$_POST["gender"];
  $dob=$_POST["dob"];
  
  $sql= "INSERT INTO student(`name`, email, gender, dob) VALUES
  ('$name', '$email', '$gender', '$dob')";

  if (mysqli_query($conn,$sql)){
    echo "new record created successfully";
    header("Refresh:5; url=form_html.html");
  }
  else {
    echo mysqli_error($conn);
  }

  
}

else if(isset($_POST["update"])){
          
    $stuid=$_POST["stuid"];
    $nname=$_POST["nname"];
    $nemail=$_POST["nemail"];
  $sql="UPDATE student SET `name`='$nname',email='$nemail' WHERE id=$stuid";

if(mysqli_query($conn, $sql)){
    echo "Record updated successfully";
    header("Refresh:5; url=form_html.html");
  }

  else{
    echo mysqli_error($conn);
  }
}

else if(isset($_POST["updateemail"])){
          
  $stuid=$_POST["stuid"];
  $nemail=$_POST["nemail"];
$sql="UPDATE student SET `email`='$nemail' WHERE id=$stuid";

if(mysqli_query($conn, $sql)){
  echo "Record updated successfully";
  header("Refresh:5; url=form_html.html");
}

else{
  echo mysqli_error($conn);
}
}

else if(isset($_POST["updatename"])){
        
  $stuid=$_POST["stuid"];
  $nname=$_POST["nname"];
$sql="UPDATE student SET `name`='$nname' WHERE id=$stuid";

if(mysqli_query($conn, $sql)){
  echo "Record updated successfully";
  header("Refresh:5; url=form_html.html");
}

else{
  echo mysqli_error($conn);
}
}




else if(isset($_POST["delete"])){
    $stuid=$_POST["stuid"];
    $sql="DELETE FROM student WHERE id=$stuid;";
    
    if(mysqli_query($conn, $sql)){
        echo "Record deleted successfully";
            header("Refresh:5; url=form_html.html");
      }
    
      else{
        echo mysqli_error($conn);
      }

}


        // $sql = "SELECT * FROM student WHERE name LIKE 'Kochar%'";
        // $result = mysqli_query($conn,$sql);

        // if (mysqli_num_rows($result)>0){
        //   while($row=mysqli_fetch_assoc($result)){
        //     echo $row["name"]."<br>";
        //   }
        // }



?>