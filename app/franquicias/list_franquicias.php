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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/vendor/dataTables/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/dataTables/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/dataTables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/font-awesome/font-awesome.min.css">
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
                    <div class="card-body">
                        <div class="table-responsive table-hover tableFixHead">
                            <table class="table" id="tableFranquicias">
                                <thead class="text-primary">
                                <th>Nombre</th>
                                <th>Localidad</th>
                                <th>Acciones</th>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
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
<script src="/vendor/bootstrap/js/tooltip.js"></script>
<script src="/vendor/bootstrap/js/popper.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/vendor/notify/bootstrap-notify.js"></script>
<script type="text/javascript" src="/vendor/dataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/vendor/dataTables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="/vendor/dataTables/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="/js/franquicias.js"></script>
<script type="text/javascript">
    $('#ventas-item').removeClass('active')
    $('#franquicias-item').addClass('active')
</script>

</body>

</html>
