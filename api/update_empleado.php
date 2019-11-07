<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");
require_once(DAO_PATH . "EmpleadoDao.php");
require_once(DAO_PATH . "FranquiciaDao.php");

header('Content-Type: application/json');

$response = new stdClass();
if(isset($_POST["nombres"]) && isset($_POST["numeroDocumento"]) 
&& isset($_POST["telefono"]) && isset($_POST["salary"]) && isset($_POST["franquicia"])){
$empleadoDao= new EmpleadoDao();
$franquiciaDao = new FranquiciaDao();
$empleado = $empleadoDao->findByCC($_POST["numeroDocumento"]);
$empleado->setNombre($_POST["nombres"]);
$empleado->setSalario($_POST["salary"]);
$empleado->setTelefono($_POST["telefono"]);
$empleado->setIdFranquicia($franquiciaDao->findById($_POST["franquicia"]));

$response->status = $empleadoDao->update($empleado) > 0 ? true: false;

}else{
	$response->status = false;
}
echo json_encode($response);