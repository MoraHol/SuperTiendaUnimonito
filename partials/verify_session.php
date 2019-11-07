<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/dirs.php');
require_once DAO_PATH . "EmpleadoDao.php";


$empleadoDao = new EmpleadoDao();
if (!isset($_SESSION)) {
  session_start();
  if (!isset($_SESSION["empleado"])) {
    header("Location: /");
  } else {
    $empleado = unserialize($_SESSION["empleado"]);
  }
}
