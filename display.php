<?php include('connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>READ | UPDATE | DELETE</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome CSS for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<div class="container mt-5">
  <h2>CRUD Table</h2>

  <table class="table">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Password</th>
        <th>Operations
        <button class="btn btn-primary my-0"><a href="user.php" class="text-light">Add User</a></button>
        </th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sql="SELECT * FROM `customer`";
        $result= mysqli_query($connection,$sql);
        if(!$result){
          die("mysqli query failed" . mysqli_connect_error());
        }else{
          $sequenceNumber = 1;
        while($row = mysqli_fetch_assoc($result)){
          $id = $row['id'];
          $name = $row['name'];
          $email = $row['email'];
          $mobile = $row['mobile'];
          $password = $row['password'];
      echo '<tr>
        <td>' .$sequenceNumber. '</td>
        <td>' .$name. '</td>
        <td>' .$email. '</td>
        <td>' .$mobile. '</td>
        <td>' .$password. '</td>
        <td>
          <a href="update.php?updateid='.$id.'" class="btn btn-sm btn-primary"><i class="fas fa-edit"> Edit</i></a>
          <a href="delete.php?deleteid='.$id.'" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"> Delete</i></a>
        </td>
      </tr>';
      $sequenceNumber++;
    }
  }
     ?>
    </tbody>
  </table>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
