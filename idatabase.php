<?php require "dbc.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>db</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
</head>
<body>
    <div class="container">
        <a href="add.php" class="btn btn-primary">Add</a>
        <br>
        <br>
<table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
    </thead>

    <tfoot>
        <tr>
        <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
    </tfoot>

    <tbody>
        <?php
            $select = "SELECT * FROM student";
            $result = mysqli_query($conn,$select);
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["gender"];?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletedialogue" <?php $id=$row["id"]?>>
                        Delete
                    </button>
                    <!-- <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a> -->
                </td>
            </tr>
                
              <?php  
            }
            ?>
    </tbody>
    </table>
    </div>

    

<div class="modal fade" id="deletedialogue" tabindex="-1" role="dialog" aria-labelledby="deletedialogue" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Delete <b><?php $query = "SELECT * from student where id='$id'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error($conn));
$row = mysqli_fetch_assoc($result); 
echo $row["name"] ?></b> from the records?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary"><a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a></button>
      </div>
    </div>
  </div>
</div>

    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> </body>
</html>