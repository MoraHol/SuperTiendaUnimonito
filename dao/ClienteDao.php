<?php
include($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");

require_once(DB_PATH . "env.php");
require_once(DB_PATH . "DBOperator.php");

class ClienteDao
{
    public function __construct()
    {
        $this->db = new DBOperator($_ENV["db_host"], $_ENV["db_user"], $_ENV["db_name"], $_ENV["db_pass"]);
    }
    public function findById($id)
    { }
    public function save($client)
    { }
    public function update($client)
    { }
    public function findByCC($cc)
    { }
}
