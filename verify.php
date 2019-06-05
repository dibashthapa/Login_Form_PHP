<?php
include_once "dbconn.php";
$session_start();

$email=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM users where email='$email' and password='$password';";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1)
     {
        echo 'hi there';
$_SESSION['username']=$email;
  }
?>