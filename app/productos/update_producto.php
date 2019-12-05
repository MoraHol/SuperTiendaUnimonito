<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/dirs.php');
  require_once(PARTIALS_PATH . "verify_session.php");
  require_once(DAO_PATH . "EmpleadoDao.php");
  require_once(DAO_PATH . "ProductoDao.php");


  if (isset($_GET["id"])) {
    $productoDao = new ProductoDao();
    $producto = $productoDao->findById($_GET["id"]);
  } else {
    header("Location: /empleados/list_prodcutos.php");
  }
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
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

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
          <h1 class="h3 mb-0 text-gray-800">Actualización de producto</h1>
        </div>

        <!-- Content Row -->
        <div class="row justify-content-center">
          <form class="form" id="form-registro-producto">
            <div class="col">
              <div class="row">
                <label for="nombres">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombres" required value="<?= $producto->getNombre() ?>">
              </div>
              <div class="row">
                <label for="nombres">Observaciones</label>
                <textarea type="text" name="observaciones" class="form-control" placeholder="Observaciones" required><?= $producto->getObservaciones() ?></textarea>
              </div>
              <div class="row">
                <label for="nombres">Precio</label>
                <input type="number" name="precio" class="form-control" placeholder="precio" required value="<?= $producto->getPrecio() ?>">
              </div>
              <div class="row">
                <label for="nombres">Tipo</label>
                <input type="text" name="tipo" class="form-control" placeholder="tipo" required value="<?= $producto->getTipo() ?>">
              </div>
              <div class="row">
                <label for="nombres">Cantidad</label>
                <input type="number" name="cantidad" class="form-control" placeholder="cantidad" required value="<?= $producto->getCantidad() ?>">
              </div>
              <div class="row mt-4" id="button-sub">
                <button type="submit" class="btn btn-dark">Actualizar Producto</button>
              </div>
            </div>
          </form>
        </div>

        <!-- Content Row -->


      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <?php include (PARTIALS_PATH. 'footer.php');?>

  </div>
  <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
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

<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="/vendor/notify/bootstrap-notify.js"></script>
<script src="/js/registroProducto.js"></script>

<script type="text/javascript">
    $('#ventas-item').removeClass('active')
    $('#productos-item').addClass('active')
</script>
<script>
    $('#form-update-franquicia').submit(function(e) {
        e.preventDefault()
        let serialize = $(this).serialize() + `&id=<?= $producto->getId() ?>`
        $.post('/api/update_producto.php', serialize, (data, status) => {
            if (data.status) {
                $.notify({
                    message: 'Se ha actualizado el producto'
                }, {
                    type: 'success'
                })
            } else {
                $.notify({
                    message: 'No se ha altualizado el producto'
                }, {
                    type: 'danger'
                })
            }
        })
    })
</script>
</body>

</html>
