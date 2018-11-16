<?php
include 'connect.php';
$db = dbconnect();

// if($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $password_query = "SELECT password FROM users WHERE username='$username'";
    $stored_password = mysqli_query($db, $password_query);
    $result = mysqli_fetch_assoc($stored_password);
    
    if ($password == $result['password']) {

      include 'homepage.php';
      // header('Location: homepage.php');
    } else {
      // include '../index.php'; // current webpage
      echo '<script> alert("You Have Entered Wrong Username/Password, Please Try Again!")</script>'; // alert or a pop up to notify
      header("Location: ../index.php");
    }
//   }
// }

function consolelog($msg)
{
	echo "<script>console.log($msg);</script>";
}

?>