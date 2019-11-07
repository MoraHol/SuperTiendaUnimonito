<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");

require_once(DB_PATH . "env.php");
require_once(DB_PATH . "DBOperator.php");
require_once(MODEL_PATH . "FranquiciaVO.php");

class FranquiciaDao
{

    public function __construct()
    {
        $this->db = new DBOperator($_ENV["db_host"], $_ENV["db_user"], $_ENV["db_name"], $_ENV["db_pass"]);
    }

    public function findById($id)
    {
        $this->db->connect();
        $query = "SELECT * FROM `franquicias` WHERE `id_franquicia` = $id";
        $franquiciaDB = $this->db->consult($query, "yes");
        $franquiciaDB = $franquiciaDB[0];
        $franquicia = new FranquiciaVO();
        $franquicia->setId($franquiciaDB["id_franquicia"]);
        $franquicia->setNombre($franquiciaDB["nombre_franquicia"]);
        $franquicia->setIdLocalidad($franquiciaDB["localidades_id_localidad"]);
        $franquicia->setGerente($franquiciaDB["gerente"]);
        $this->db->close();
        return $franquicia;
    }
    public function save()
    { }
    public function update()
    { }
}
