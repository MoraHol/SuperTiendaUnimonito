<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");
require_once(DAO_PATH . "ProductoDao.php");

header('Content-Type: application/json');

$response = new stdClass();
if (
  isset($_POST["nombre"]) && isset($_POST["observaciones"]) && isset($_POST["precio"])
  && isset($_POST["tipo"]) && isset($_POST["cantidad"])
) {
  

  $productoDao = new ProductoDao();
  $producto = new ProductoVO();


  $producto->setNombre($_POST["nombre"]);
  $producto->setObservaciones($_POST["observaciones"]);
  $producto->setPrecio($_POST["precio"]);
  $producto->setTipo($_POST["tipo"]);
  $producto->setCantidad($_POST["cantidad"]);


  $response->status = $productoDao->save($producto) > 0 ? true : false;

  
} else {
  $response->status = false;
}
echo json_encode($response);
