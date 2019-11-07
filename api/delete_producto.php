<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");
require_once(DAO_PATH . "ProductoDao.php");
header("Content-Type: application/json");

$response = new  stdClass();
if (isset($_POST["id"])) {
  $productoDao = new ProductoDao();
  $response->status = $productoDao->delete($_POST["id"]) > 0 ? true : false;
  echo json_encode($response);
} else {
  http_response_code(401);
  exit;
}
