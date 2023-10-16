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
        <h1 class="text-center">Check your email</h1>
        <form method="post" action="post.php">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">University Email</label>
              <input name= "email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">Only your Email from your university is accepted </div>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check Check Check Check</label>
            </div>
            <button type="submit" class="btn btn-primary">Check</button>
          </form>
    </div>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $email=$_POST['email'];
    if ($email=="aland.aramf21@komar.edu.iq"){
        echo "wassup og get in";
    }

    else{
        echo "nah fam fr i ain' playing";
    }
    }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>