<?php
 session_start();
 include_once 'headerS.php';
 require '../../includes/PHPMailer.php';
 require '../../includes/SMTP.php';
 require '../../includes/Exception.php';
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;

 $mail = new PHPMailer();
 $mail->isSMTP();
 $mail->Host="smtp.gmail.com";
 $mail->SMTPAuth = "true";
 $mail->SMTPSecure = "tls";
 $mail->Port = "587";
 $mail->Username = "albak6809@gmail.com";
 $mail->Password = "albaalba1";
 $mail->Subject = "Manuali i perdorimit te Sistemit per Menaxhimin e Studenteve";
 $mail->setFrom("albaalba1");

 $mail->Body="Se shpejti...";

 //receiver email address
 $mail->addAddress('albak6809@gmail.com');
  if($mail->Send())
  {
    echo "Email sent";
  }
  else
  {
    echo "Not Sent";
  }
 
 $mail->smtpClose();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<body onload="myFunction()">
	<script>
		function myFunction() {
			let text = "Accept Cookies";
			if (confirm(text) == true) {

			} else {
				window.location = "signup.inc.php";
			}
		}

		function showHint(str) {
			if (str.length == 0) {
				document.getElementById("txtHint").innerHTML = "";
				return;
			} else {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("txtHint").innerHTML = this.responseText;
					}
				}
				xmlhttp.open("GET", "loginAjax.php?q=" + str, true);
				xmlhttp.send();
			}
		}
	</script>
<script>
function myFunction() {
  let text = "Accept Cookies";
  if (confirm(text) == true) {
	
  } else {
	window.location="signup.php";
  }
}
</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | User Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="logout.php" class="nav-link" style="background-color:blue">Log Out</a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="profileP.php" class="brand-link">
      <img src="../../dist/img/FIEK-UP.png" alt="FIEK-UP" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">FIEK UP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Profesor</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
     <!-- Sidebar Menu -->
                                      <nav class="mt-2">
                                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                          <li class="nav-item">
                                            <a href="profileP.php" class="nav-link">
                                              <i class="nav-icon fas fa-user"></i>
                                              <p>
                                                Profili i profesorit
                                              </p>
                                            </a>
                                          </li>
                                          <li class="nav-item">
                                            <a href="#" class="nav-link">
                                              <i class="nav-icon fas fa-copy"></i>
                                              <p>
                                                Detyrat e studenteve
                                                <i class="fas fa-angle-left right"></i>
                                              </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                              <li class="nav-item">
                                                <a href="Dorezimet.php" class="nav-link">
                                                  <i class="far fa-circle nav-icon"></i>
                                                  <p>Detyrat e dorezuara</p>
                                                </a>
                                              </li>
                                              <li class="nav-item">
                                                <a href="DetyratEVlersuara.php" class="nav-link">
                                                  <i class="far fa-circle nav-icon"></i>
                                                  <p>Detyrat e vlersuara</p>
                                                </a>
                                              </li>
                                            </ul>
                                          </li>
                                          <li class="nav-item">
                                            <a href="#" class="nav-link">
                                              <i class="nav-icon fas fa-copy"></i>
                                              <p>
                                                Lista e lendeve
                                                <i class="fas fa-angle-left right"></i>
                                              </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                              <li class="nav-item">
                                                <a href="../tables/ListaELendeveP.php" class="nav-link">
                                                  <i class="far fa-circle nav-icon"></i>
                                                  <p>Lista e lendeve</p>
                                                </a>
                                              </li>
                                            </ul>
                                          </li>
                                          <li class="nav-item">
                                            <a href="#" class="nav-link">
                                              <i class="nav-icon fas fa-chart-pie"></i>
                                              <p>
                                                FAQ
                                                <i class="right fas fa-angle-left"></i>
                                              </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                              <li class="nav-item">
                                                <a href="../FAQ/indexFaq.php" class="nav-link">
                                                  <i class="far fa-circle nav-icon"></i>
                                                  <p>FAQ</p>
                                                </a>
                                              </li>
                                              <li class="nav-item">
                                                <a href="../FAQ/add.php" class="nav-link">
                                                  <i class="far fa-circle nav-icon"></i>
                                                  <p>Bëjë pyetje</p>
                                                </a>
         </li>
    </nav>
  <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Compose</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="profileS.php">Home</a></li>
              <li class="breadcrumb-item active">Compose</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-9">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Kerkese per manualin e perdorimit</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form id="myForm" method="post">
               <!-- <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Enter your name:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="Enter your email:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject:">
                </div>
                <div class="form-group">
                    <textarea id="body" rows="5" class="form-control" >
                    </textarea>
                </div>-->
                <div class="form-group">

                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                  <!--<button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft</button>-->
                  <button type="button" onclick="sendEmail()" name="submit" class="btn btn-primary" value="Send an email"><i class="far fa-envelope"></i>Send it to my email</button>
                </div>
                <!--<button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>-->
              </div>
            </form>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>
</body>
</html>
