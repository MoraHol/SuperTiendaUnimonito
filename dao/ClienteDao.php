<?php
include($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");

require_once(DB_PATH . "env.php");
require_once(DB_PATH . "DBOperator.php");
require_once(MODEL_PATH. "ClienteVO.php");

class ClienteDao
{
    public function __construct()
    {
        $this->db = new DBOperator($_ENV["db_host"], $_ENV["db_user"], $_ENV["db_name"], $_ENV["db_pass"]);
    }
    public function findById($id)
    { 
        $this->db->connect();
        $query = "";
        $clientDB = $this->db->consult($query,"yes");
        $clientDB = $clientDB[0];
        $client = new ClienteVO();
        $client->setId($clientDB["id_cliente"]);
        $client->setNombre($clientDB["nombre"]);
        $client->setPuntos($clientDB["puntos"]);
        $client->setCedula($clientDB["cedula"]);
        $client->setCiudad($clientDB["ciudad"]);
        $this->db->close();
        return $client;
    }
    public function save($client)
    { 
        $this->db->conect();
        $query = "";
        return $this->db->consult($query);
    }
    public function update($client)
    { 
        $this->db->conect();
        $query = "";
        return $this->db->consult($query);
    }
    public function findByCC($cc)
    { 
        $this->db->conect();
        $query = "SELECT `id_cliente` FROM `clientes` WHERE `cedula` = $cc";
        $clientDB = $this->db->consult($query, "yes");
        if (count($clientDB) > 0) {
            $clientDB = $clientDB[0];
            return $this->findById($clientDB["id_cliente"]);
        } else {
            return null;
        }
    }
}
