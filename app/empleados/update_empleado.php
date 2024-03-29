<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/dirs.php');
  require_once(PARTIALS_PATH . "verify_session.php");
  require_once(DAO_PATH . "EmpleadoDao.php");
  require_once(DAO_PATH . "FranquiciaDao.php");


  if (isset($_GET["id"])) {
    $empleadoDao = new EmpleadoDao();
    $franquiciaDao = new FranquiciaDao();
    $empleado = $empleadoDao->findById($_GET["id"]);
  } else {
    header("Location: /app/empleados/list_empleados.php");
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
                    <h1 class="h3 mb-0 text-gray-800">Actualización de empleado</h1>
                </div>

                <!-- Content Row -->
                <div class="row justify-content-center">
                    <form class="form" id="form-registro-empleado">

                        <div class="col">
                            <div class="row">
                                <label for="nombres">Nombres</label>
                                <input type="text" name="nombres" class="form-control"
                                       placeholder="Nombres" required value="<?= $empleado->getNombre(); ?>">
                            </div>
                            <div class="row">
                                <label for="state">Tipo de documento:</label>
                                <select class="form-control" id="state" required>
                                    <option value="C.C.">Cedula de ciudadania</option>
                                    <option value="D.E.">Documento Extranjero</option>
                                </select>
                            </div>
                            <div class="row">
                                <label for="nombres">Numero de documento</label>
                                <input type="number" name="numeroDocumento" class="form-control"
                                       placeholder="Numero de documento" required value="<?= $empleado->getCedula(); ?>"
                                       readonly>
                            </div>
                            <div class="row">
                                <label for="nombres">Telefono</label>
                                <input type="number" name="telefono" class="form-control"
                                       placeholder="Telefono" required value="<?= $empleado->getTelefono() ?>">
                            </div>
                            <div class="row">
                                <label for="nombres">Salario: </label>
                                <input type="number" name="salary" class="form-control"
                                       placeholder="Salario" step="any" required
                                       value="<?= $empleado->getSalario(); ?>">


                                <label for="franquicias-select">Franquicia a asignar:</label>
                                <select class="form-control" name="franquicia" id="franquicias-select"
                                        required>
                                  <?php
                                    $franquicias = $franquiciaDao->findAll();
                                    foreach ($franquicias as $franquicia) { ?>
                                        <option value="<?= $franquicia->getId() ?>" <?= $franquicia->getId() == $empleado->getIdfranquicia()->getId() ? 'selected' : '' ?> > <?= $franquicia->getNombre() ?> </option>
                                      <?php
                                    }
                                  ?>
                                </select>

                            </div>

                            <div class="row" id="button-sub">
                                <button type="submit" class="btn btn-dark">Actualizar Empleado</button>
                            </div>

                        </div>
                    </form>
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
<script src="/app/vendor/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="/app/vendor/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="/app/vendor/js/demo/chart-area-demo.js"></script>
<script src="/app/vendor/js/demo/chart-pie-demo.js"></script>
<script src="/vendor/notify/bootstrap-notify.js"></script>
<script type="text/javascript">
    $('#form-registro-empleado').submit(function (e) {
        e.preventDefault()
        $.post('/api/update_empleado.php', $(this).serialize(), (data, status) => {
            if (data.status) {
                $.notify({
                    message: 'Se ha actualizado al empleado'
                }, {
                    type: 'success'
                })
            } else {
                $.notify({
                    message: 'No se ha altualizado al empleado'
                }, {
                    type: 'danger'
                })
            }
        })
    })
</script>
<script type="text/javascript">
    $('#ventas-item').removeClass('active')
    $('#empleados-item').addClass('active')
</script>
</body>

</html>
