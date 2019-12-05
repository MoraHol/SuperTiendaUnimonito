<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/dirs.php');
  require_once(PARTIALS_PATH . "verify_session.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Custom styles for this template-->
    <link href="/app/css/sb-admin-2.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleados</title>
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/dataTables/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/dataTables/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/dataTables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/font-awesome/font-awesome.min.css">
    <!-- Custom fonts for this template-->
    <link href="/app/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
</head>

<body id="page-top">
<div id="wrapper">
  <?php include(PARTIALS_PATH . "sidebar.php") ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
          <?php include(PARTIALS_PATH . 'navbar.php'); ?>
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Empleados</h1>
                </div>

                <!-- Content Row -->
                <div class="row">
                    <div class="card-body">
                        <div class="table-responsive table-hover tableFixHead">
                            <table class="table" id="tableEmpleados">
                                <thead class="text-primary">
                                <th>Nombre</th>
                                <th>Cedula</th>
                                <th>telefono</th>
                                <th>Salario</th>
                                <th>Fecha de ingreso</th>
                                <th>Franquicia</th>
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
    </div>
</div>


<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="/vendor/bootstrap/js/tooltip.js"></script>
<script src="/vendor/bootstrap/js/popper.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/vendor/notify/bootstrap-notify.js"></script>
<script type="text/javascript" src="/vendor/dataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/vendor/dataTables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="/vendor/dataTables/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="/js/empleados.js"></script>
<script type="text/javascript">
    $('#ventas-item').removeClass('active')
    $('#empleados-item').addClass('active')
</script>
</body>

</html>