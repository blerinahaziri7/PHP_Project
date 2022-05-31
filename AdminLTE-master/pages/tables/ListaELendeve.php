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
              <a href="../examples/profileP.php" class="nav-link">
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
                  <a href="ListaELendeve.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lëndët</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../examples/project-editS.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Detyrat e mia</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../examples/project-editS2.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dorëzo detyrën</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../examples/Vleresimet.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Vlersimet</p>
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
                </ul>
            <li class="nav-item">
            <a href="profileS.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Log Out
              </p>
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card"style="width:1250px">
              <div class="card-header">
                <h3 class="card-title">Lista e Lëndëve</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Lënda</th>
                      <th style="width: 40px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Programimi në Internet</td>
                      <td>
                        <form action="" style="width:100px">
                          <a href="../examples/projectsS.php">
                            <button type="button" value="Kliko" style="border: none; background-color:#ff4b47; border-radius: 5px;font-size: large; padding: 0 30px;">Kliko</button>
                          </a>
                        </form>
                      </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Databaza</td>
                      <td>
                        <form action="" style="width:100px">
                          <a href="../examples/projectsS.php">
                            <button type="button" value="Kliko" style="border: none; background-color:#ff4b47; border-radius: 5px;font-size: large; padding: 0 30px;">Kliko</button>
                          </a>
                        </form>
                      </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Matematikë</td>
                      <td>
                        <form action="" style="width:100px">
                          <a href="../examples/projectsS.php">
                            <button type="button" value="Kliko" style="border: none; background-color:#ff4b47; border-radius: 5px;font-size: large; padding: 0 30px;">Kliko</button>
                          </a>
                        </form>
                      </td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Programim i orientuar në objekte</td>
                      <td>
                        <form action="" style="width:100px">
                          <a href="../examples/projectsS.php">
                            <button type="button" value="Kliko" style="border: none; background-color:#ff4b47; border-radius: 5px;font-size: large; padding: 0 30px;">Kliko</button>
                          </a>
                        </form>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
        
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div> 
            <script>
            function showCD(str) {
              if (str=="") {
                document.getElementById("txtHint").innerHTML="";
                return;
              }
              var xmlhttp=new XMLHttpRequest();
              xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                  document.getElementById("txtHint").innerHTML=this.responseText;
                }
              }
              xmlhttp.open("GET","getcd.php?q="+str,true);
              xmlhttp.send();
            }
            </script>
            </head>
            <body>

            <form>
            Selekto nje lende:
            <select name="cds" onchange="showCD(this.value)">
              <option value="">Selekto nje lende:</option>
              <option value="Programimi ne internet">Programimi ne internet</option>
              <option value="Databaza">Databaza</option>
              <option value="Interneti">Interneti</option>
              <option value="Programim">Programim</option>
              <option value="Komunikimi njeri kompjuter">Komunikimi njeri kompjuter</option>
              <option value="Matematike 1">Matematike 1</option>
              <option value="Qarqe elektrike">Qarqe elektrike</option>
              <option value="Arkitekturë e kompjuterëve">Arkitekturë e kompjuterëve</option>
            </select>
            </form>
            <div id="txtHint"><b>Informatat per lenden e zgjedhur do shfaqen ketu:</b></div>                          
    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2021-2022 <a href="">FIEK UP</a>.</strong> All rights reserved.
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
