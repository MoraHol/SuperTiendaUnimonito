<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio de registro empleado</title>

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
        de empleado:</h1></div>

    <form class="form" id="form-registro-empleado">

      <div class="col">
        <div class="row">
          <label for="nombres">Nombres</label>
          <input type="text" name="nombres" class="form-control"
            placeholder="Nombres" required>
        </div>
        <div class="row">
          <label for="nombres">Apellidos</label>
          <input type="text" name="apellidos" class="form-control"
            placeholder="Apellidos" required>
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
            placeholder="Numero de documento" required>
        </div>
        <div class="row">
          <label for="nombres">Telefono</label>
          <input type="number" name="telefono" class="form-control"
            placeholder="Telefono" required>
        </div>
        <div class="row">


          <label for="nombres">Salario a asignar: </label>
          <input type="number" name="salary" class="form-control"
            placeholder="Salario" step="any" required>


          <label for="franquicias-select">Franquicia a asignar:</label>
          <select class="form-control" name="franquicia" id="franquicias-select"
            required>
            <select></select>

          </div>

          <div class="row" id="button-sub">
            <button type="submit" class="btn btn-dark">Registrar Empleado</button>
          </div>

        </div>
      </form>
      <script src="/vendor/notify/bootstrap-notify.js"></script>
      <script src="/js/registroEmpleado.js"></script>
      <script type="text/javascript">
        $('#ventas-item').removeClass('active')
        $('#empleados-item').addClass('active')
    </script>
    </body>
  </html>