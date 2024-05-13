<?php

include('connection.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `customer` WHERE id=$id";
    $result = mysqli_query($connection,$sql);
    if($result){
        header('location:display.php');
    } else{
        die("connection failed" . mysqli_connect_error());
    }
}

?>