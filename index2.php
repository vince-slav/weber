<?php session_start(); ?>
<?php include "./connection.php"; ?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font AweIcons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
          <a href="index2.php" class="nav-link">Home</a>
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

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">

              </div>
              <!-- Message End -->
            </a>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
              </div>
              <!-- Message End -->
            </a>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">Ver todas as mensagens</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">Ver todas as notificações</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./pages/logoff.php" role="button">
            <i class="fas fa-power-off"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index2.php" class="brand-link">
        <img src="dist/img/agencia-weber-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Agência Weber</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user1.jpeg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Thalles Vicente</a>
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
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tag"></i>
                <p>
                  Categoria
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/cats.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listar</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/newCat.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Novo</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-gift"></i>
                <p>
                  Produto
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/prods.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listar</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/newProd.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Novo</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Últimas categorias cadastradas</h3>
                  <div class="card-tools">
                    <a href="pages/cats.php">Todas as categorias</a>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Atualizar</th>
                        <th>Deletar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $stmt = $conn->prepare("SELECT * FROM categorias ORDER BY id DESC");
                      $stmt->execute();
                      while ($reg = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      ?>
                        <td><?php echo $reg["id"]; ?></td>
                        <td><?php echo $reg["nome"]; ?></td>
                        <td><?php echo $reg["descr"]; ?></td>
                        <td>
                          <form action="./pages/updateCat.php" method="GET" style="display: inline;">
                            <input type="hidden" name="id" value="<?php echo $reg["id"]; ?>">
                            <a href="./pages/updateCat.php" class="text-muted">
                              <i class="fas fa-pen"></i>
                            </a>
                          </form>
                        </td>
                        <td>
                          <form action="./pages/delCat.php" method="GET" style="display: inline;">
                            <input type="hidden" name="id" value="<?php echo $reg["id"]; ?>">
                            <button class="text-muted" style="border: none;">
                              <i class="fas fa-trash"></i>
                            </button>
                          </form>
                        </td>
                        </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Últimos produtos cadastrados</h3>
                  <div class="card-tools">
                    <a href="pages/prods.php">Todos os produtos</a>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Situação</th>
                        <th>Atualizar</th>
                        <th>Deletar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $res = $conn->query("SELECT * FROM produtos ORDER BY id DESC");
                      while ($reg = $res->fetch(PDO::FETCH_ASSOC)) {
                      ?>
                        <tr>
                          <td><?php echo $reg["id"]; ?></td>
                          <td>
                            <img src="dist/img/default-150x150.png" alt="" class="img-circle img-size-32 mr-2">
                          </td>
                          <td><?php echo $reg["nome"]; ?></td>
                          <td><?php echo $reg["preco"]; ?></td>
                          <td><?php echo $reg["sit"]; ?></td>
                          <td>
                            <a href="./pages/updateProd.php" class="text-muted">
                              <i class="fas fa-pen"></i>
                            </a>
                          </td>
                          <td>
                            <form action="./pages/delProd.php" method="GET" style="display: inline;" onsubmit="confDel(event, this)">
                              <input type="hidden" name="id" value="<?php echo $reg["id"]; ?>">
                              <button class="text-muted" style="border: none;">
                                <i class="fas fa-trash"></i>
                              </button>
                            </form>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard3.js"></script>
  <script src="dist/js/funcs.js"></script>
</body>

</html>
