<?php
 
    // connect with database
    $conn = new PDO("mysql:host=localhost:3307;dbname=studentmanagementsystem", "root", "");
 
    // check if insert form is submitted
    if (isset($_POST["submit"]))
    {
        // create table if not already created
        $sql = "CREATE TABLE IF NOT EXISTS faqs (
            id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
            question TEXT NULL,
            answer TEXT NULL,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )";
        $statement = $conn->prepare($sql);
        $statement->execute();
 
        // insert in faqs table
        $sql = "INSERT INTO faqs (question, answer) VALUES (?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([
            $_POST["question"],
            $_POST["answer"]
        ]);
    }
 
    // [query to get all FAQs]
    // get all faqs from latest to oldest
$sql = "SELECT * FROM faqs ORDER BY id DESC";
$statement = $conn->prepare($sql);
$statement->execute();
$faqs = $statement->fetchAll();
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Validation Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<?php 
   if (isset($_POST['submitted'])){
    #nese po, vendosi vlerat nga POST array ne variabla
    $newbgColor=$_POST['bgColor'];
    #set cookies
    setcookie("bgColor",$newbgColor,time()+3600);
}
//ne rast se shfrytezuesi vjen per here te pare dhe cookies nuk jane vendosur,
//atehere
if (!isset($_COOKIE['bgColor'])) {
$bgColor = "#f0ca59";
}
#nese cookie-t jane vendousr, atehere perdori ato cookie
else{
$bgColor = $_COOKIE['bgColor'];
}
?>
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
      <img src="../../dist/img/FIEK-UP.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                  <a href="../examples/profileS.php" class="nav-link">
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
                      <a href="../examples/faqStudent.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>FAQ</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="RegjistroPyetje.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Bëj pyetje</p>
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
            <h1>Bëj pyetje</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pyetje</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section>
    <div class="container">
    <div class="row">
        <div class="offset-md-3 col-md-6">
            <h1 class="text-center">Shto FAQ</h1>
            <!-- for to add FAQ -->
            <form method="POST" action="" >
                <!-- question -->
                <div class="form-group" >
                    <label>Shkruaj pyetjen</label>
                    <input  style="background-color:<?php echo $bgColor ?>"type="text" name="question" class="form-control" required />
                </div>
 
                <!-- answer -->
                <div class="form-group">
                    <label>Shkruaj përgjigjen</label>
                    <textarea  style="background-color:<?php echo $bgColor ?>" name="answer" id="answer" class="form-control" required></textarea>
                </div>
                <!-- submit button -->
                <input type="submit" name="submit" class="btn btn-info" value="Add FAQ " />
            </form>
        </div>
    </div>
    </div>
<div class="row">
    <div class="card-body">
        <table class="table table-bordered">
            <!-- table heading -->
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pyetja</th>
                    <th>Përgjigja</th>
                    <th>Veprimet</th>
                </tr>
            </thead>
 
            <!-- table body -->
            <tbody>
                <?php foreach ($faqs as $faq): ?>
                    <tr>
                        <td><?php echo $faq["id"]; ?></td>
                        <td><?php echo $faq["question"]; ?></td>
                        <td><?php echo $faq["answer"]; ?></td>
                        <td>
                          <form method="POST" action="delete.php" onsubmit="return confirm('Are you sure you want to delete this FAQ ?');">
                            <a href="edit.php?id=<?php echo $faq['id']; ?>" class="btn btn-warning btn-sm">
                              Edit
                              </a>
                              <input type="hidden" name="id" value="<?php echo $faq['id']; ?>" required />
                              <input type="submit" value="Delete" class="btn btn-danger btn-sm" />
                          </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method ="POST">
<span> </span></br></br>
<span class="css" >Choose background mode</span>
<select name=bgColor class="css">
<option value ="#FFFFFF" selected>White</option>
<option value ="#FFE5CC" >Pink</option>
<option value ="#EFEFEF">Light</option>
</select>
<input type ="hidden" name="submitted" value="true">
<input type="submit" value="Kujto vlerat" class="css">
</form>
 </section>
    <!-- Main content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  
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
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
</body>
</html>

