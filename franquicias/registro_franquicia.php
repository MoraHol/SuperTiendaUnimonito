<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro Franquicia</title>

    <link rel="stylesheet" href="/css/registroEmpleado.css">

    <link rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css"
      integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA"
      crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Cinzel"
      rel="stylesheet">
      <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"
      integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp"
      crossorigin="anonymous"></script>

  </head>
  <body>
   <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/dirs.php');
   include(PARTIALS_PATH . "navbar.php");  ?>

    <div class="p-3 mb-2 bg-primary text-white"><h1 id="tituloPrincipal">Registro
        de franquicia:</h1></div>

    <form class="form" id="form-registro-franquicia">

      <div class="col">
        <div class="row">
          <label for="nombres">Nombre</label>
          <input type="text" name="nombre" class="form-control"
            placeholder="Nombre" required>
        </div>
        <div class="row">
          <label for="franquicias-select">Localidad a asignar:</label>
          <select class="form-control" name="localidad"
            required>
            <option value="1">Norte</option>
            <option value="2">Sur</option>
            <option value="3">Oriente</option>
            <option value="4">Occidente</option>
            </select>

          </div>

          <div class="row" id="button-sub">
            <button type="submit" class="btn btn-dark">Registrar Franquicia</button>
          </div>

        </div>
      </form>
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