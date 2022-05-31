<?php
 include_once 'headerP.php'
?>

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
            <h1>Lista e detyrave</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Profili i shfrytezuesit</a></li>
              <li class="breadcrumb-item active">Detyrat e mia</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style="width:auto ;">Detyrat</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects" >
              <thead>
                  <tr>
                      <th style="width: 1%">
                         ID
                      </th>
                      <th style="width: 15%">
                         Emri dhe mbiemri
                      </th>
                      <th style="width: 15%">
                          Detyra
                      </th>
                      <th style="width: 6%; padding: 0px;" class="text-center">
                          Data e dorezimit
                      </th>
                      <th style="width:30px" >
                        Piket
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                          1
                      </td>
                      <td>
                          <a>
                              Porjekti1
                          </a>
                          <br/>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <p>Programimi ne internet</p>
                              </li>
                          </ul>
                      </td>
                      <td class="project_progress" style="width: 6%; text-align: center;">
                          <p>1.202081</p>
                      </td>
                      <td class="project-actions text-right" >
                        <p style="width: 6%; text-align: center;">53%</p>
                      </td>
                  </tr>
                  <tr>
                    <td>
                        1
                    </td>
                    <td>
                        <a>
                            Porjekti1
                        </a>
                        <br/>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p>Programimi ne internet</p>
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress" style="width: 6%; text-align: center;">
                        <p>1.202081</p>
                    </td>
                    <td class="project-actions text-right">
                        <p style="width: 6%; text-align: center;">53%</p>
                    </td>
                </tr>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

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
