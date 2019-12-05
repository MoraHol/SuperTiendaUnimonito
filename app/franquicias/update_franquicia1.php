<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/dirs.php');
  require_once(PARTIALS_PATH . "verify_session.php");
  require_once(DAO_PATH . "EmpleadoDao.php");
  require_once(DAO_PATH . "FranquiciaDao.php");


  if (isset($_GET["id"])) {
    $franquiciaDao = new FranquiciaDao();
    $franquicia = $franquiciaDao->findById($_GET["id"]);
  } else {
    header("Location: /empleados/list_franquicias.php");
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
                    <h1 class="h3 mb-0 text-gray-800">Actualizacion franquicia</h1>
                </div>

                <!-- Content Row -->
                <div class="row justify-content-center">
                    <form class="form" id="form-update-franquicia">

                        <div class="col">
                            <div class="row">
                                <label for="nombres">Nombre</label>
                                <input type="text" name="nombre" class="form-control"
                                       placeholder="Nombre" required value="<?= $franquicia->getNombre() ?>">
                            </div>
                            <div class="row">
                                <label for="franquicias-select">Localidad a asignar:</label>
                                <select class="form-control" name="localidad"
                                        required>
                                    <option value="1" <?= $franquicia->getIdLocalidad()->getId() == 1 ? "selected" : "" ?> >
                                        Norte
                                    </option>
                                    <option value="2" <?= $franquicia->getIdLocalidad()->getId() == 2 ? "selected" : "" ?> >
                                        Sur
                                    </option>
                                    <option value="3" <?= $franquicia->getIdLocalidad()->getId() == 3 ? "selected" : "" ?> >
                                        Oriente
                                    </option>
                                    <option value="4" <?= $franquicia->getIdLocalidad()->getId() == 4 ? "selected" : "" ?> >
                                        Occidente
                                    </option>
                                </select>

                            </div>

                            <div class="row mt-4" id="button-sub">
                                <button type="submit" class="btn btn-dark">Actualizar Franquicia</button>
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
<script type="text/javascript" src="/vendor/dataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/vendor/dataTables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="/vendor/dataTables/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="/js/franquicias.js"></script>
<script type="text/javascript">
    $('#form-update-franquicia').submit(function (e) {
        e.preventDefault()
        let serialize = $(this).serialize() + `&id=<?= $franquicia->getId()?>`
        $.post('/api/update_franquicia.php', serialize, (data, status) => {
            if (data.status) {
                $.notify({
                    message: 'Se ha actualizado la franquicia'
                }, {
                    type: 'success'
                })
            } else {
                $.notify({
                    message: 'No se ha altualizado la franquicia'
                }, {
                    type: 'danger'
                })
            }
        })
    })
</script>
<script type="text/javascript">
    $('#ventas-item').removeClass('active')
    $('#franquicias-item').addClass('active')
</script>
</body>

</html>
