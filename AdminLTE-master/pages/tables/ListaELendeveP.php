<?php

$serverName = "locahost";
$dbUserName = "root";
$dbPassword = "1172058627";
$dbName = "studentmanagementsystem";


$conn = mysqli_connect("localhost", "root", "", "studentmanagementsystem");

if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FIEK UP | Lista e Lëndëve</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      var commentCount = 2;
      $("#button").click(function(){
        commentCount = commentCount + 2;
          $("#subjects").load("../../pages/examples/load-subjects.php",{
            commentNewCount: commentCount
          });
      });
    });
  </script>
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
        <a href="../../index3.php" class="nav-link">Home</a>
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
    <a href="../../index3.php" class="brand-link">
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
                        <a href="../examples/profileP.php" class="nav-link">
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
                            <a href="ListaELendeveP.php" class="nav-link">
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
                            <a href="../examples/faqStudent.php" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>FAQ</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="../forms/RegjistroPyetje.php" class="nav-link">
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
            <h1>Lëndët</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Lëndët</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid" >
        <div class="row">
          <div class="col-md-6">
            <div class="card"style="width:1250px">
              <div class="card-header">
                <h3 class="card-title">Lista e Lëndëve</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body" id="subjects">
              <?php 
                  $sql="SELECT* FROM lendet LIMIT 2";
                  $result = mysqli_query($conn, $sql);
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                      echo ("<p>");
                      echo ($row['semestri']);
                      echo ("<br>");
                      echo ($row['emri']);
                      echo "</p>";
                    }
                  }else{
                    echo "Nuk ka asnje lende!";
                  }
                ?>
                <!-- <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">Semestri</th>
                      <th>Lënda</th>
                      <th>
                          <form action="" style="width:100px">
                            <a href="../examples/ShtoLende.php">
                              <button type="button" value="Shto lende" style="border: none; background-color:#ff4b47; border-radius: 5px;font-size: large; padding: 5px;">Shto lëndë</button>
                            </a>
                          </form>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Programimi në Internet</td>
                      <td>
                        <form action="" style="width:80px">
                          <a href="../examples/ShtoLende.php">
                            <button type="button" value="Shto lende" style="border: none; background-color:lightblue; border-radius: 5px;font-size: large; padding: 5px;">Modifiko</button>
                          </a>
                        </form>
                      </td>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Programimi në Internet</td>
                      <td>
                        <form action="" style="width:80px">
                          <a href="../examples/ShtoLende.php">
                            <button type="button" value="Shto lende" style="border: none; background-color:lightblue; border-radius: 5px;font-size: large; padding: 5px;">Modifiko</button>
                          </a>
                        </form>
                      </td>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Programimi në Internet</td>
                      <td style="width:80px">
                        <form action="" style="width:50px">
                          <a href="../examples/ShtoLende.php">
                            <button type="button" value="Shto lende" style="border: none; background-color:lightblue; border-radius: 5px;font-size: large; padding: 5px; ">Modifiko</button>
                          </a>
                        </form>
                      </td>
                    </tr>
                  </tbody>
                </table> -->
              </div>
              <!-- /.card-body -->
      </div>  
            
        <button type="button" name="button" id="button" value="more" style="border: none; background-color:lightblue; border-radius: 5px;font-size: large; padding: 5px; ">Shiko me shume</button>
            
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
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
