<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/dirs.php');
require_once(PARTIALS_PATH . "verify_session.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Productos </title>
  <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/vendor/font-awesome/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/vendor/dataTables/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="/vendor/dataTables/dataTables.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/vendor/dataTables/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="/vendor/font-awesome/font-awesome.min.css">
</head>

<body>
  <?php include(PARTIALS_PATH . "navbar.php") ?>

  <div class="card-body">
    <div class="table-responsive table-hover tableFixHead">
      <table class="table" id="tableProductos">
        <thead class="text-primary">
          <th>Nombre</th>
          <th>Observaciones</th>
          <th>precio</th>
          <th>tipo</th>
          <th>cantidad</th>
          <th>Acciones</th>
        </thead>
        <tbody>

        </tbody>
      </table>
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
  <script type="text/javascript" src="/js/productos.js"></script>
  <script type="text/javascript">
    $('#ventas-item').removeClass('active')
    $('#productos-item').addClass('active')
  </script>
</body>

</html>