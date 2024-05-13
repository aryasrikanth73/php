<?php
include ('connection.php');

$id=$_GET['updateid'];
$sql="SELECT * FROM `customer` WHERE id=$id";
$result=mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$name=$row['name']; //from table name
$email=$row['email']; //from table name
$mobile=$row['mobile']; //from table name
$password=$row['password']; //from table name

if(isset($_POST['submit'])){
    $name=$_POST['fname'];
    $email=$_POST['femail'];
    $mobile=$_POST['fmobile'];
    $password=$_POST['fpassword'];

    $sql = "UPDATE `customer` SET id=$id, name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";
    $result = mysqli_query($connection,$sql);

    if($result){
        header('location:display.php');
        // echo "updated successfully";
    } else {
        die("not connected" . mysqli_connect_error($connection));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>UPDATE</title>
</head>
<body>
    <div class="container my-5">
<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" value=<?php echo $name; ?> name="fname" placeholder="Enter Name" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" value=<?php echo $email; ?> name="femail" placeholder="Enter email" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Contact</label>
    <input type="number" class="form-control" value=<?php echo $mobile; ?> name="fmobile" placeholder="Enter Mobile Number" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" value=<?php echo $password; ?> name="fpassword" placeholder="Enter Password" autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>