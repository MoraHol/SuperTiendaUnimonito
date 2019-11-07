<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");
require_once(DAO_PATH . "FranquiciaDao.php");

header('Content-Type: application/json');

$response = new stdClass();
if(isset($_POST["nombre"]) && isset($_POST["localidad"]) && isset($_POST["id"])){
$franquiciaDao = new FranquiciaDao();
$franquicia = $franquiciaDao->findById($_POST["id"]);
$franquicia->setNombre($_POST["nombre"]);
$franquicia->setIdLocalidad($_POST["localidad"]);

$response->status = $franquiciaDao->update($franquicia) > 0 ? true: false;

}else{
	$response->status = false;
}
echo json_encode($response);