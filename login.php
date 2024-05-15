<?php
include('connection.php');
if(isset($_POST['submit'])){
    $username=$_POST['fusername'];
    $password=$_POST['fpassword'];

    
    $sql="SELECT * FROM `signup` WHERE tusername='$username' AND tpassword='$password'";
    $result=mysqli_query($connection, $sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            session_start();
            $_SESSION['tusername']=$username;
            header('location:welcome.php');
            // echo "<h1>Login Success</h1>";
        }else{
            echo "<h1>Invalid data</h1>";
        }
    }else{
        die(mysqli_connect_error());
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>
    <form method="post">
    <h1>sign Up Page</h1>
    <input  name="fusername" type="text" placeholder="Username">
    <input  name="fpassword" type="password" placeholder="Password">
    <button name="submit">login</button>
</center>
    </form>
</body>
</html>