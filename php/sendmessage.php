<?php
include 'connect.php';

// session_start();

// if (!isset($_SESSION['username'])) {
//     header("Location: ../index.php");
// }
// $username = $_SESSION['username'];

$db = dbconnect();

$username = $_POST['username'];
$message = $_POST['message'];
$channel = 'messages_general';

$sql = "INSERT INTO messages_general(username, message_text) VALUES ('$username','$message');";
$res = mysqli_query($db, $sql);

include 'homepage.php';
?> 