<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detyrat e mia | Modifiko </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
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
        <a href="profileS.php" class="nav-link">Home</a>
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
      <img src="../../dist/img/FIEK-UP.png" alt="FIEK UP" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">FIEK UP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Student</a>
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
                  <a href="profileS.php" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                      Profili i studentit
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                      Detyrat e mia
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../tables/ListaELendeve.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lëndët</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="project-editS.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Detyrat e mia</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="project-editS2.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dorëzo detyrën</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="Vleresimet.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Vlerësimet</p>
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
  <div class="content-wrapper" style="justify-content: center; width: 2000px;padding-left: 100px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detyra</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" >
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Dorëzo detyrën</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="inputStatus">Zgjedh lëndën</label>
                    <select id="inputStatus" class="form-control custom-select">
                      <option disabled>Lenda 1</option>
                      <option>Lenda 2</option>
                      <option>Lenda 3</option>
                      <option selected>Success</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputStatus">Zgjedh semestrin</label>
                    <select id="inputStatus" class="form-control custom-select">
                      <option disabled>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option selected>Success</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputStatus">Zgjedh detyrën</label>
                    <select id="inputStatus" class="form-control custom-select">
                      <option disabled>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option selected>Success</option>
                    </select>
                  </div>
              <div class="form-group">
                <label for="inputProjectLeader">Detyra</label>
                <input type="file" id="inputProjectLeader" class="form-control" value="Tony Chicken" style="height: 60px; padding-top: 15px;padding-bottom: 0px;">
                
            </div>
              <div class="row">
                <div class="col-12">
                  <!-- <input type="submit" value="Save Changes" class="btn btn-success float-right"> -->
                  <div class="col-12" style="height: 60px; padding-top: 0px;padding-bottom: 0px;padding-right: 0px;padding-left: 650px;">
                    <a href="#" class="btn btn-danger">Unsubmit <i class="fas fa-trash"></i></a>
                    <a href="uploadFile.php" class="btn btn-danger" >Save Changes</a>
                </div>
                </div>

              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
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
