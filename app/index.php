<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/dirs.php');
require_once(PARTIALS_PATH . "verify_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> SuperTienda Unimonito</title>

  <!-- Custom fonts for this template-->
  <link href="/app/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/app/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php include(PARTIALS_PATH . 'sidebar.php'); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <?php include(PARTIALS_PATH . 'navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ventas</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  Cliente
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="cedula">Cedula</label>
                        <input id="cedula" class="form-control" type="text" name="">
                      </div>
                      <button class="btn btn-primary" id="btn-search-cliente">Buscar</button>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="">
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="ciudad">Ciudad</label>
                        <input id="ciudad" class="form-control" type="text" name="">
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="puntos">Puntos</label>
                        <input id="puntos" class="form-control " disabled type="text" name="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-4">
              <div class="card">
                <div class="card-header">
                  Orden
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="products">Producto</label>
                    <select id="products" class="form-control">
                      <option disabled> -- Seleccione un producto --</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input id="cantidad" class="form-control" type="number" name="">
                  </div>
                  <button class="btn btn-primary" id="btn-add-product">
                    <i class="fas fa-plus"></i> Agregar
                  </button>
                </div>
              </div>
            </div>
            <div class="col-8">
              <div class="card">
                <div class="card-header">
                  Orden
                </div>
                <div class="card-body">
                  <div class="table-responsive table-hover tableFixHead">
                    <table class="table" id="tableProductos">
                      <thead class="text-primary">
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                      </thead>
                      <tbody>

                      </tbody>
                    </table>
                  </div>
                  <button class="btn btn-primary" id="btn-procesar">Procesar Compra</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php include(PARTIALS_PATH . 'footer.php'); ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="/app/vendor/jquery/jquery.min.js"></script>
  <script src="/app/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/app/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/app/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/app/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/app/js/demo/chart-area-demo.js"></script>
  <script src="/app/js/demo/chart-pie-demo.js"></script>
  <script src="/vendor/notify/bootstrap-notify.js"></script>
  <script src="/js/clientes.js"></script>
</body>

</html>