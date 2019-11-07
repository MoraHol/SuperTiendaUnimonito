<?php

include($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");
require_once(DAO_PATH . "EmpleadoDao.php");

$response = new stdClass();

if (isset($_POST["cedula"])) {
    $empleadoDao = new EmpleadoDao();
    $empleado = $empleadoDao->findByCC($_POST["cedula"]);
    if ($empleado != null) {
        $response->status = true;
        $_SESSION["empleado"] = serialize($empleado);
    } else {
        $response->status = false;
    }
    echo json_encode($response);
} else {
    http_response_code(400);
}
