<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");
require_once(DAO_PATH . "ProductoDao.php");
require_once(DAO_PATH . "FranquiciaDao.php");

header("Content-Type: application/json");

$franquiciaDao = new FranquiciaDao();

$franquicias = $franquiciaDao->findAll();
if (isset($_GET["dataTable"])) {
        $response = new  stdClass();
        $response->data = $franquicias;
        echo json_encode($response);
        exit;
    } else {
        echo json_encode($franquicias);
        exit;
    }
