<?php
include "db_connect.php";

if(isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `students`(`id`, `firstname`, `lastname`, `email`, `gender`) VALUES (NULL,'$firstname','$lastname',
    '$email','$gender')";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        header("Location: index.php?msg=New record created successfully");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    
<h1 class="text-center text-primary mb-4"><a href="index.php">Student Managment System</a></h1>
     <h3 class="text-center mb-4">Add a new student</h3>
<div class="btn mu-4 container d-flex justify-content-center">   
      <form action="" method="post">
        <div class="row mb-4">
          <div class="col">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="firstname">
          </div>
          <div class="row mb-4">
          <div class="col">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lastname">
          </div>
          <div class="row mb-4">
          <div class="col">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label for="">Gender</label>
            <input type="radio" class="form-check-input" name="gender" id="male" value="male">
            <label for="male" class="form-input-label">Male</label>
            <input type="radio" class="form-check-input" name="gender" id="female" value="female">
            <label for="female" class="form-input-label">Female</label>
          </div>
        </div>




      </form>
</div>
<div class="container d-flex justify-content-center">    
            <button class="btn btn-outline-primary" type="submit" name="submit">Save</button>
            <a class="btn btn-outline-danger" href="index.php">Cancel</a>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
</body>
</html>

