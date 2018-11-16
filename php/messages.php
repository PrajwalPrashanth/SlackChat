<?php
session_start();
include 'connect.php';

// if (!isset($_SESSION['username'])) {
//   header("Location: ../index.php");
// }
// $username = $_SESSION['username'];
$db = dbconnect();

$channel = 'messages_general';
$sql = "SELECT * FROM messages_general";

$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $username = $row['username'];
    $timestamp = $row['timestamp'];
    $message = $row['message_text'];

    $name_query = "SELECT name FROM users WHERE username='$username';";
    $result1 = mysqli_query($db, $name_query);
    if($name_query = mysqli_fetch_assoc($result1)) {
      $fullname = $name_query['name'];
      $nameArray = explode(' ', $fullname);
      $initials = $nameArray[0][0] . $nameArray[1][0];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="refresh" content="2">
  <title>Some title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="../res/styles/app/messages.css" />
  <script>
     function pageScroll() { 
       window.scrollTo(0,100vh); 
       scrolldelay = setTimeout('pageScroll()',1); //Increase this # to slow down, decrease to speed up scrolling 
      }
  </script>
</head>
<body>
  
  <div class="message-div">
    <div class="display-pic"><?php echo $initials; ?></div>
    <div class="right-pane">
      <div class="details">
        <h3 class="name"><?php echo $fullname; ?></h3>
        <p class="text-muted"><?php echo $timestamp; ?></p>
      </div>
      <div class="message-text">
        <p><?php echo $message; ?></p>
      </div>
    </div>
  </div>
  <?php
        }
      }
    }
  ?>
</body>
</html>
