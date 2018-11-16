<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SlackChat</title>
  <meta name="description" content="A simple chat application.">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- favicon -->
  <link rel="icon" href="res/assets/app/SlackChat.svg">
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" 
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
  crossorigin="anonymous">
  <!-- Local Styles -->
  <link rel="stylesheet" href="res/styles/app/index.css">
</head>
<body class="text-center">
  
  <div class="container form-signin">
    <img class="mb-4" src="res/assets/app/SlackChat.svg" alt="SlackChat Logo" width="72" height="72">
    
    <!-- This is the nav tab -->
    <ul class="nav justify-content-center" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active h3 mb-3 font-weight-normal" id="login-div-tab" data-toggle="tab" href="#login-div" role="tab">Sign In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link h3 mb-3 font-weight-normal" id="register-div-tab" data-toggle="tab" href="#register-div" role="tab">Register</a>
      </li>
    </ul>

    <!-- This is the nav content -->
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade show active" id="login-div">
        <form id="login-form" method="POST" action="login.php">
          <!-- <h1 class="h3 mb-3 font-weight-normal">Sign in</h1> -->
          
          <label for="inputEmail" class="sr-only">Username</label>
          <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
          
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
  
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
      </div>
      
      <div class="tab-pane fade" id="register-div">
        <form id="register-form" method="POST" action="register.php">
          <!-- <h1 class="h3 mb-3 font-weight-normal">Register</h1> -->
  
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="First name" name="firstName">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Last name" name="lastName">
            </div>
          </div>
  
          <label class="sr-only" for="emailReg">Email</label>
          <input type="email" class="form-control" id="emailReg" aria-describedby="emailHelp" placeholder="Enter email">
          
          <label class="sr-only" for="usernameReg">Username</label>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">@</div>
            </div>
            <input type="text" class="form-control" id="usernameReg" placeholder="Username">
          </div>
  
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="passwordReg" class="form-control" placeholder="Password" required>
        
          <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </form>
      </div>
                      

    </div>
      <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
    crossorigin="anonymous"></script>
</body>
</html>