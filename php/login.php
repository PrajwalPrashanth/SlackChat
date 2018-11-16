<?php
include 'connect.php';
$db = dbconnect();

$name = $_POST['username'];
$password = $_POST['password'];

$password_query = "SELECT password FROM users WHERE username='$name'";
$stored_password = mysqli_query($db,$password_query);

if($password == $stored_password)
{
 header('Location: homepage.php');
}
else
{
	include 'index.php'; // current webpage
	echo '<script> alert("You Have Entered Wrong Username/Password, Please Try Again!")</script>'; // alert or a pop up to notify
}

?>