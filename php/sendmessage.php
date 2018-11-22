<?php
include 'connect.php';
session_start();

// session_start();

// if (!isset($_SESSION['username'])) {
//     header("Location: ../index.php");
// }
// $username = $_SESSION['username'];

$db = dbconnect();

$username = $_POST['username'];
$message = $_POST['message'];

// $channel = 'messages_general';

// if (isset($_SESSION['channel_name'])) {
//     $channel = $_SESSION['channel_name'];
// }

$channel = $_POST['channel_name'];

$sql = "INSERT INTO $channel(username, message_text) VALUES ('$username','$message');";
$res = mysqli_query($db, $sql);

include 'homepage.php';
?> 