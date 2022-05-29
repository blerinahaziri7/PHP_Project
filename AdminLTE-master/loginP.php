<?php
  session_start();
  // if already logged in
  if(isset($_SESSION['login'])){
    header("Location: pages/examples/profileP.php");
    exit();
  }

  require_once 'pages/include/db.inc.php';
  if(isset($_POST['login'])){
    //$connection = mysqli_connect("localhost", "root", "", "studentmanagementsystem");

    $email = mysqli_real_escape_string($conn,$_POST['emailPHP']);
    $password = md5(mysqli_real_escape_string($conn,$_POST['passwordPHP']));

    $data=$conn->query("SELECT * FROM profesori WHERE email='$email' AND password='$password'");

    if($data->num_rows >0){
      $_SESSION['login'] ='1';
      $_SESSION["email"] = $email;
      
      if(!empty($_POST['rememberPHP'])){

        $rememberMe=$_POST['rememberPHP'];
        setcookie('email', $email, time()+3600*24*7);
        setcookie('password', $password, time()+3600*24*7);
      }else{
        //expire cookie
        setcookie('email', $email, 30);
        setcookie('password', $password, 30);
      }

      

      exit("<font color='green'> Login success... </font>");

    } else{
        exit("<font color='red'>Email or Password Incorrect </font>");
    }
      // if($data->num_rows >0) {
      //   if(isset($_POST['remember'])){
      //     setcookie('email', $email, time()+60*60*7);
      //     setcookie('password', $password, time()+60*60*7);

      //   }
      //   session_start();
      //   $_SESSION['email']= $email;
      //   header("location:profileP.php");
      // } else{
      //   echo "Email or password invalid";
      // }
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> UP FIEK | Log in page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body class="hold-transition login-page">
  
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="pages/examples/profileS.php" class="h1"><b>UP</b> FIEK</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in</p>

      <!-- action="pages/include/login.inc.php" -->
      <form  action="loginP.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" id = "username" class="form-control" placeholder="Username"
          value="<?php if(isset($_COOKIE['email'])){echo $_COOKIE['email'];};?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password"
          value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];};?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="rememberMe">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="button" name="login" id="login"class="btn btn-primary btn-block">Sign In</input>
          </div>
          <!-- /.col -->
        </div>
      </form>

     <p id="response"></p>

      <p class="mb-1">
        <a href="forgot-password-v2.php">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="pages/examples/select.php" class="text-center">Don't have an account yet ?</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->


<script>
  $(document).ready(function(){
    $("#login").on('click', function(){
      var email = $("#username").val(); //e mer vleren prej username field
      var password = $("#password").val();
      var rememberMe = $("#remember").val();
      
      if(email == "" || password == ""){
        alert("Please check your inputs!");
      }else{
              //if everything okay send information to server
      $.ajax(
        {
          url: 'index.php',
          method: 'POST',
          data:{
            login: 1,
            emailPHP: email,
            passwordPHP: password,
            rememberPHP: rememberMe
          },
          success: function(response){
            $("#response").html(response);
            if(response.indexOf('success')>=0){
              window.location = 'pages/examples/profileP.php';
            }
          },
          dataType: 'text'

        }
      )
      }
    })
  })
</script>

  <!--jQuery--> 
  <script src="plugins/jquery/jquery.min.js"></script>
  <!--Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script> 
</body>
</html>
