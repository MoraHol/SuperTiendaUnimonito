<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");
require_once(DAO_PATH . "EmpleadoDao.php");
require_once(DAO_PATH . "FranquiciaDao.php");

header('Content-Type: application/json');

$response = new stdClass();
if(isset($_POST["nombres"]) && isset($_POST["apellidos"]) && isset($_POST["numeroDocumento"]) 
&& isset($_POST["telefono"]) && isset($_POST["salary"]) && isset($_POST["franquicia"])){
$empleadoDao= new EmpleadoDao();
$franquiciaDao = new FranquiciaDao();
$empleado = new EmpleadoVO();
$empleado->setNombre($_POST["nombres"] . " " . $_POST["apellidos"]);
$empleado->setCedula($_POST["numeroDocumento"]);
$empleado->setSalario($_POST["salary"]);
$empleado->setTelefono($_POST["telefono"]);
$empleado->setIdFranquicia($franquiciaDao->findById($_POST["franquicia"]));

$response->status = $empleadoDao->save($empleado) > 0 ? true: false;

}else{
	$response->status = false;
}
echo json_encode($response);