<?php
include_once "dbconn.php";
echo "welcome";

    $fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="INSERT INTO users(firstname,lastname,email,password) VALUES('$fname','$lname','$email','$password');";

mysqli_query($conn,$sql);


?>