<?php
include 'connect.php';
$db = dbconnect();

$name = $_POST["name"];
$username = $_POST["username"];
$password = $_POST]["password"];
$email = $_POST["email"];

$registration_query = "INSERT INTO users(name, email, username, password) VALUES('$name', '$email', '$username', '$password')";

if(mysqli_query($db,$registration_query))
{
	include ''; // target page
	echo '<script> alert("Registration Successful")</script>'; 
}
else
{
	include ''; //current page
	echo '<script> alert("Registration Unsuccessful")</script>'; 
}
?>