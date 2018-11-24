<?php
//start session, if it exists

if (session_status() == PHP_SESSION_NONE || session_id() == '') {
  session_start();
  $_SESSION['channel_name'] = 'messages_general';
}

if (isset($_POST['channel_name'])) {
  $channel = $_POST['channel_name'];
} else {
  $channel = $_SESSION['channel_name'];
}

// if(!isset($_SESSION['username'])){ 
//     header("Location: ../index.php");
//   }
// $username = $_POST['username'];
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
  <!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SlackChat</title>
    <meta name="description" content="A simple chat application.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="icon" href="res/assets/app/SlackChat.svg">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" 
  href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
  integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
  crossorigin="anonymous"> -->
    <!-- Google Web Fonts  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Local Styles -->
    <link rel="stylesheet" href="../res/styles/app/homepage.css">
  </head>

  <body>
    <div class="homepage-container">
      <div class="height-100 left-pane">
        <div class="name-div">
          <h1 class="name">
            Hello,
            <?php 
              $query = "SELECT name FROM users WHERE username='$username'";
              $result = mysqli_fetch_assoc(mysqli_query($db,$query));
              $full_name =$result['name'];
              $first_name = explode(' ', $full_name)[0];
              echo $first_name;
             ?>
          </h1>
          <p class="username"><?php echo "@".$username ?></p>
        </div>
        <div class="details">

          <div class="workspace-list-div">
            <div class="workspace-list">
              <span>GN</span>
              <span>WS1</span>
              <span>WS2</span>
              <span>RN</span>
              <span>AB</span>
              <span>XZ</span>
            </div>
          </div>

          <div class="channel-details-div">
            <div class="channels">
              <h2 class="channel-header">Channels</h2>
              <div class="channel-list">
                <form action="messages.php" target="message-iframe" class="channel-name" method="POST">
                  <p>#</p><input type="submit" name="channel_name" value="general" id="general">
                </form>
                <form action="messages.php" target="message-iframe" class="channel-name" method="POST">
                  <p>#</p><input type="submit" name="channel_name" value="random" id = "random">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="height-100 workspace-div">
        <div class="workspace-main">
          <div class="workspace-name">
            <h2>Workspace Name</h2>
          </div>
          <div class="messages-div">
            <div class="messages-box" id="messages-box">
              <iframe name="message-iframe" id="message-iframe" class="iframe" src="messages.php" frameborder="0" width="100" height="100"></iframe>
            </div>
          </div>
        </div>
        <form class="input-div" action="./sendmessage.php" method="POST">
          <input required type="text" placeholder="Send a message" name="message">
          <input type="hidden" name="username" value="<?php echo $username ?>">
          <!-- <input type="hidden" name="channel_name" value="<?php echo $channel; ?>"> -->
          <input type="hidden" name="channel_name" value="messages_general" id="channel">
          <button type="submit"><i class="material-icons">send</i></button>
        </form>
      </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
      <script>
        
document.getElementById("general").addEventListener("click",
          function () {
            document.getElementById("channel").value = "messages_general";
          }
        )
document.getElementById("random").addEventListener("click",
              function () {
                document.getElementById("channel").value = "messages_random";
              }
            )
      </script>
    </div>
  </body>

</html>
