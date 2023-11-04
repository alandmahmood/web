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
                    <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
                
              <?php  
            }
            ?>
    </tbody>
    </table>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>