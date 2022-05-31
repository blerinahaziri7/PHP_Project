<?php
  $serverName = "locahost";
  $dbUserName = "root";
  $dbPassword = "1172058627";
  $dbName = "studentmanagementsystem";

  $conn = mysqli_connect("localhost", "root", "", "studentmanagementsystem");
  
    // $id=$_POST['lendaID'];
    // $emri=$_POST['emriLendes'];
    // $semestri= $_POST['semestri'];
    // $profesori= $_POST['profesori'];
    
    // $sql ="INSERT INTO lendet (LendaID, emri, semestri, profesori) VALUES ('$id', '$emri', '$semestri', '$profesori');";
    // mysqli_query($conn, $sql);


    
    if(isset($_POST['shto']))
    {
        $emri =mysqli_real_escape_string($conn, $_POST['emriLendes']);
        $semestri =mysqli_real_escape_string($conn, $_POST['semestri']);
        $profesori = mysqli_real_escape_string($conn,$_POST['profesori']);
  

        $sql ="INSERT INTO lendet (emri, semestri, profesori) VALUES ('$emri', '$semestri', '$profesori');";
        mysqli_query($conn, $sql);
        
        
       // if($sql->num_rows>0)
        //{
          //  echo '<script type="text/javascript"> alert("Subject added to the database") </script>'; }
        //else{
          //  echo '<script type="text/javascript"> alert("Subject count not be added to the database") </script>'; }
    }

    if(isset($_POST['modifiko']))
    {
        $emri =mysqli_real_escape_string($conn, $_POST['emriLendes']);
        $semestri =mysqli_real_escape_string($conn, $_POST['semestri']);
        $profesori = mysqli_real_escape_string($conn,$_POST['profesori']);
  

        $sql ="UPDATE lendet (emri, semestri, profesori) SET ('$emri', '$semestri', '$profesori');";
        mysqli_query($conn, $sql);
        
        
       // if($sql->num_rows>0)
        //{
          //  echo '<script type="text/javascript"> alert("Subject added to the database") </script>'; }
        //else{
          //  echo '<script type="text/javascript"> alert("Subject count not be added to the database") </script>'; }
    }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Project Add</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- <script>
    $(document).ready(function(){
     $("#shto").on('click', function(){
        if(lendaID.val() !=""){
          alert("Email enterted");
        }
        else{
          alert("Please enter email")
        }
    });
    });
  // </script> -->
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
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
          <form class="form-inline" >
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
                        <a href="profileP.php" class="nav-link">
                          <i class="nav-icon fas fa-user"></i>
                          <p>
                            Profili i shfrytezuesit
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
                            <a href="faqStudent.php" class="nav-link">
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
            <h1>Shto lëndën</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Shto Lëndën</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6" >
          <div class="card card-primary" style="width:1250px">
            <div class="card-header">
              <h3 class="card-title"></h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <form   action="ShtoLende.php" method="post"> 
              <div class="form-group">
                <label for="lendaID">LendaID</label>
                <input type="text" id="lendaID" class="form-control" name="lendaID" disabled>
              </div>
              <div class="form-group">
                <label for="inputName">Emri i lëndës</label>
                <input type="text" id="inputName" class="form-control" name="emriLendes">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Semestri</label>
                <input type="text" id="semestri" class="form-control" name="semestri">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Profesori</label>
                <input type="text" id="profesori" class="form-control" name="profesori">
              </div>
              <div>
              <button type="submit" name="shto" class="btn btn-primary btn-block">Register</button>
              </div>
            </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          
         
        </div>
      </div>
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
