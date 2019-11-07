<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");
require_once(DAO_PATH . "ProductoDao.php");
require_once(DAO_PATH . "EmpleadoDao.php");

// revisar si existe session
session_start();
header("Content-Type: application/json");

if (isset($_SESSION["empleado"])) {
  $empleado = unserialize($_SESSION["empleado"]);
  $productoDao = new ProductoDao();
  $products = $productoDao->findByFranquicia($empleado->getIdFranquicia());
  if (isset($_GET["dataTable"])) {
    $response = new  stdClass();
    $response->data = $products;
    echo json_encode($response);
    exit;
  } else {
    echo json_encode($products);
    exit;
  }
} else {
  http_response_code(401);
  exit;
}
