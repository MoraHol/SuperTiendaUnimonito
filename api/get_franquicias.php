<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");
require_once(DAO_PATH . "ProductoDao.php");
require_once(DAO_PATH . "FranquiciaDao.php");

header("Content-Type: application/json");

$franquiciaDao = new FranquiciaDao();

echo json_encode($franquiciaDao->findAll());