<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/dirs.php');
require_once(PARTIALS_PATH . "verify_session.php");
require_once(DAO_PATH . "EmpleadoDao.php");
require_once(DAO_PATH . "FranquiciaDao.php");


if(isset($_GET["id"])){
  $empleadoDao = new EmpleadoDao();
  $franquiciaDao = new FranquiciaDao();
  $empleado = $empleadoDao->findById($_GET["id"]);
}else{
  header("Location: /empleados/lis_empleados.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleados</title>
    <link rel="stylesheet" href="/css/registroEmpleado.css">
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

    <div class="p-3 mb-2 bg-primary text-white"><h1 id="tituloPrincipal">Actualizacion de empleado:</h1></div>

    <form class="form" id="form-registro-empleado">

      <div class="col">
        <div class="row">
          <label for="nombres">Nombres</label>
          <input type="text" name="nombres" class="form-control"
            placeholder="Nombres" required value="<?= $empleado->getNombre();?>">
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
            placeholder="Numero de documento" required value="<?= $empleado->getCedula();?>" readonly>
        </div>
        <div class="row">
          <label for="nombres">Telefono</label>
          <input type="number" name="telefono" class="form-control"
            placeholder="Telefono" required value="<?= $empleado->getTelefono()?>">
        </div>
        <div class="row">
          <label for="nombres">Salario: </label>
          <input type="number" name="salary" class="form-control"
            placeholder="Salario" step="any" required value="<?= $empleado->getSalario();?>">


          <label for="franquicias-select">Franquicia a asignar:</label>
          <select class="form-control" name="franquicia" id="franquicias-select"
            required>
            <?php 
            $franquicias = $franquiciaDao->findAll();
            foreach ($franquicias as  $franquicia) {?>
              <option value="<?= $franquicia->getId() ?>" <?= $franquicia->getId() == $empleado->getIdfranquicia()->getId() ? 'selected': '' ?> > <?= $franquicia->getNombre()?> </option>
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

    <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="/vendor/bootstrap/js/tooltip.js"></script>
    <script src="/vendor/bootstrap/js/popper.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/vendor/notify/bootstrap-notify.js"></script>
    <script type="text/javascript" src="/vendor/dataTables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/vendor/dataTables/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="/vendor/dataTables/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
      $('#form-registro-empleado').submit(function(e){
      e.preventDefault()
       $.post('/api/update_empleado.php',$(this).serialize(),(data,status)=>{
        if(data.status){
        $.notify({
        message: 'Se ha actualizado al empleado'
      },{
        type: 'success'
      })
    }else{
      $.notify({
        message: 'No se ha altualizado al empleado'
      },{
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