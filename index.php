<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <h1 class="text-center text-primary mb-4"><a href="index.php">Student Managment System</a></h1>
    
<table class="table table-hover text-center mb-4" >
  <thead>
    <tr class="table-primary" >
      <th scope="col">ID</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
<?php
    include "db_connect.php";
    mysqli_query($conn,"ALTER TABLE students AUTO_INCREMENT = 1");


    $sql = "SELECT * FROM `students`";
    $result = mysqli_query($conn, $sql);


    
            while ($row = mysqli_fetch_assoc($result)) {
                ?>       
                
                    <tr>
                      <td><?php echo $row['id']?></td>
                      <td><?php echo $row['firstname']?></td>
                      <td><?php echo $row['lastname']?></td>
                      <td><?php echo $row['email']?></td>
                      <td><?php echo $row['gender']?></td>
                      <td>
                        <a class="btn btn-primary" href="edit.php?id=<?php echo $row['id'] ?>"><i 
                        class="fa-solid bi bi-pencil-square"></i></a>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>"><i 
                        class="bi bi-trash3"></i></a>
                      </td>
                    </tr>
   
                <?php
}
?>
               </tbody>
                </table>

<a class="btn btn-outline-primary mb-4" href="new_student.php">Add a new</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
</body>
</html>