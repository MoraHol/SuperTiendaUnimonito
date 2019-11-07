<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");
require_once(DAO_PATH . "ProductoDao.php");
require_once(DAO_PATH . "EmpleadoDao.php");

// revisar si existe session
session_start();
header("Content-Type: application/json");

if (isset($_SESSION["empleado"])) {
    $empleado = unserialize($_SESSION["empleado"]);
    $empleadoDao = new EmpleadoDao();
    $empleados = $empleadoDao->findAll();
    if (isset($_GET["dataTable"])) {
        $response = new  stdClass();
        $response->data = $empleados;
        echo json_encode($response);
        exit;
    } else {
        echo json_encode($empleados);
        exit;
    }
} else {
    http_response_code(401);
    exit;
}