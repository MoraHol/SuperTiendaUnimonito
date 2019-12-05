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
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Actualizacion de producto</title>

    <link rel="stylesheet" href="/public/css/registroEmpleado.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <script src="/public/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>

</head>

<body>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/dirs.php');
    include(PARTIALS_PATH . "sidebar.php");  ?>

    <div class="p-3 mb-2 bg-primary text-white">
        <h1 id="tituloPrincipal">actualización
            de Producto:</h1>
    </div>

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
            <div class="row" id="button-sub">
                <button type="submit" class="btn btn-dark">Actualizar Producto</button>
            </div>
        </div>
    </form>
    <script src="/public/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="/public/vendor/notify/bootstrap-notify.js"></script>
    <script src="/public/js/registroProducto.js"></script>
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