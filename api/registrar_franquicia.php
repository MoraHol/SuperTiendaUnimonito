<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");
require_once(DAO_PATH . "EmpleadoDao.php");
require_once(DAO_PATH . "FranquiciaDao.php");

header('Content-Type: application/json');

$response = new stdClass();
if(isset($_POST["nombre"]) && isset($_POST["localidad"]) ){
$franquiciaDao = new FranquiciaDao();
$franquicia = new FranquiciaVO();
$franquicia->setNombre($_POST["nombre"]);
$franquicia->setIdLocalidad($_POST["localidad"]);

$response->status = $franquiciaDao->save($franquicia) > 0 ? true: false;

}else{
	$response->status = false;
}
echo json_encode($response);