<?php
  session_start();
  if(!isset($_SESSION['login'])){
    header('Location: index.php');
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active" style="text-color:red"><a href="emailP.php">Mail</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                </div>

                <h3 class="profile-username text-center">Full Name</h3>

                <p class="text-muted text-center">Profesor</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i>UP</strong>

                <p class="text-muted">
                  FIEK
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> FIEK </strong>

                <p class="text-muted">Prishtine, Kosove</p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Change username</a></li>
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Change password</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <!-- /.tab-pane -->
                    <!--Qka m'duhet-->
                    <div class="active tab-pane" id="activity">
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Confirm Username</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Confirm</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane" id="settings">
                        <form class="form-horizontal">
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="inputName" placeholder="Name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Change Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-danger">Confirm</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
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
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
