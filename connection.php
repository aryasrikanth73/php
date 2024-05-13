<?php 
$connection = mysqli_connect("localhost", "root", "", "crud");
if(!$connection){
    die("mysqli connection error" . mysqli_connect_error());
}
?>