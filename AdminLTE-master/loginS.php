<?php
  session_start();
  // if already logged in
  if(isset($_SESSION['loggedIn'])){
    header("Location: pages/examples/profileP.php");
    exit();
  }

  require_once 'pages/include/db.inc.php';
  if(isset($_POST['login'])){
    //$connection = mysqli_connect("localhost", "root", "", "studentmanagementsystem");

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = md5(mysqli_real_escape_string($conn,$_POST['password']));

    $data=$conn->query("SELECT * FROM profesor WHERE email='$email' AND password='$password'");

    if($data->num_rows >0){
      $_SESSION['loggedIn'] ='1';
      $_SESSION["email"] = $email;

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
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="pages/examples/profileS.php" class="h1"><b>UP</b> FIEK</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg"> Student Sign in</p>

      <form action="pages/include/login.inc.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <?php
          if(isset($_GET["error"]))
          {
            if($_GET["error"]=="emptyInput")
            {
              echo "<p>Fill all the fields</p>";
            }
            else if($_GET["error"]=="wrongLogin")
            {
              echo "<p>Please check your username and password</p>";
            }
          }
          ?>
      <p class="mb-1">
        <a href="forgot-password-v2.php">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="pages/examples/register-v2.php" class="text-center">Don't have an account yet ?</a>
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
            email: email,
            password: password
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

<?php

 
require_once 'configF.php';

$permissions = ['email']; //optional

if (isset($accessToken))
{
	if (!isset($_SESSION['facebook_access_token'])) 
	{
		//get short-lived access token
		$_SESSION['facebook_access_token'] = (string) $accessToken;
		
		//OAuth 2.0 client handler
		$oAuth2Client = $fb->getOAuth2Client();
		
		//Exchanges a short-lived access token for a long-lived one
		$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
		$_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
		
		//setting default access token to be used in script
		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
	} 
	else 
	{
		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
	}
	
	
	//redirect the user to the index page if it has $_GET['code']
	if (isset($_GET['code'])) 
	{
		header('Location: index.php');
	}
	
	
	try {
		$fb_response = $fb->get('/me?fields=name,first_name,last_name,email');
		$fb_response_picture = $fb->get('/me/picture?redirect=false&height=200');
		
		$fb_user = $fb_response->getGraphUser();
		$picture = $fb_response_picture->getGraphUser();
		
		$_SESSION['fb_user_id'] = $fb_user->getField('id');
		$_SESSION['fb_user_name'] = $fb_user->getField('name');
		$_SESSION['fb_user_email'] = $fb_user->getField('email');
		$_SESSION['fb_user_pic'] = $picture['url'];
		
		
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		echo 'Facebook API Error: ' . $e->getMessage();
		session_destroy();
		// redirecting user back to app login page
		header("Location: index.php");
		exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		echo 'Facebook SDK Error: ' . $e->getMessage();
		exit;
	}
} 
else 
{	
	// replace your website URL same as added in the developers.Facebook.com/apps e.g. if you used http instead of https and you used
	$fb_login_url = $fb_helper->getLoginUrl('http://localhost/PHP_Project/', $permissions);
}
?>

<!-- NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN --> 
<!--  If the user is login  -->
<?php if(isset($_SESSION['fb_user_id'])): ?>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  <a class="navbar-brand" href="<?php echo BASE_URL; ?>">HOME</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
		  <li class="nav-item">
			<a class="nav-link" href="https://studio.youtube.com/channel/UCOXYfOHgu-C-UfGyDcu5sYw"><i class="fa fa-youtube"> YouTube Chennal</i></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="https://www.facebook.com/ahmadlogs"><i class="fa fa-facebook">acebook</i></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="https://github.com/ahmadlogs/"><i class="fa fa-github"> GitHub</i></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="logout.php">Logout</a>
		  </li>    
		</ul>
	  </div>  
	</nav>

	<div class="container" style="margin-top:30px">
	  <div class="row">
		<div class="col-sm-2">
		  <h2>About Me</h2>
		  <h5>Profile Picture:</h5>
		  <div class="fakeimg"><?php echo  $_SESSION['fb_user_pic']; ?></div>
		  <hr class="d-sm-none">
		</div>
		<div class="col-sm-2"></div>
		<div class="col-sm-8">


		  <h3>User Info</h3>
		  <ul class="nav nav-pills flex-column">
			<li class="nav-item">
			  <a class="nav-link" >Facebook ID: <?php echo  $_SESSION['fb_user_id']; ?></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link">Full Name: <?php echo $_SESSION['fb_user_name']; ?></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link">Email: <?php echo $_SESSION['fb_user_email']; ?></a>
			</li>
		  </ul>
		  
		</div>
	  </div>
	</div>
<!-- NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN --> 
<!-- if user not login --> 
<?php else: ?>
 
	<div class="login-form">
		<form action="" method="post">	
      <br></br>
			<div class="text-center social-btn">
				<a href="<?php echo $fb_login_url;?>" class="btn btn-primary btn-block" style="width:360px">Sign in with <b>Facebook</b></a>
			</div>
			
<?php endif ?>
<!-- NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN --> 
      
</body>
</html>

