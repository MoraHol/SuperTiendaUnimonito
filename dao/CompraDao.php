<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");

require_once(DB_PATH . "env.php");
require_once(DB_PATH . "DBOperator.php");
require_once(MODEL_PATH . "CompraVO.php");
require_once(MODEL_PATH . "ProductoCompraVO.php");
require_once(MODEL_PATH . "ProductoVO.php");

class CompraDao
{

    public function __construct()
    {
        $this->db = new DBOperator($_ENV["db_host"], $_ENV["db_user"], $_ENV["db_name"], $_ENV["db_pass"]);
    }

    public function findById($id)
    { }
    public function save($sale)
    { }
    public function update($sale)
    { }
}