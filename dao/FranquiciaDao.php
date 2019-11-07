<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");

require_once(DB_PATH . "env.php");
require_once(DB_PATH . "DBOperator.php");
require_once(MODEL_PATH . "FranquiciaVO.php");
require_once(MODEL_PATH . "LocalidadVO.php");

class FranquiciaDao
{

  public function __construct()
  {
    $this->db = new DBOperator($_ENV["db_host"], $_ENV["db_user"], $_ENV["db_name"], $_ENV["db_pass"]);
  }

  public function findById($id)
  {
    $this->db->connect();
    $query = "SELECT * FROM `franquicias`  INNER JOIN localidades ON franquicias.localidades_id_localidad = localidades.id_localidad WHERE `id_franquicia` = $id";
    $franquiciaDB = $this->db->consult($query, "yes");
    $franquiciaDB = $franquiciaDB[0];
    $franquicia = new FranquiciaVO();
    $franquicia->setId($franquiciaDB["id_franquicia"]);
    $franquicia->setNombre($franquiciaDB["nombre_franquicia"]);
    $localidad = new LocalidadVO();
    $localidad->setId($franquiciaDB["localidades_id_localidad"]);
    $localidad->setNombre($franquiciaDB["nombre"]);
    $franquicia->setIdLocalidad($localidad);
    $franquicia->setGerente($franquiciaDB["gerente"]);
    $this->db->close();
    return $franquicia;
  }
  public function save($franquicia)
  { 
    $this->db->connect();
    $query = "INSERT INTO `franquicias` (`id_franquicia`, `nombre_franquicia`, `localidades_id_localidad`, `gerente`) VALUES (NULL, '".$franquicia->getNombre()."', '".$franquicia->getidLocalidad()."', NULL)";
    return $this->db->consult($query);
  }
  public function update($franquicia)
  { 
  $this->db->connect();
    $query = "UPDATE `franquicias` SET `nombre_franquicia` = '".$franquicia->getNombre()."',
    `localidades_id_localidad` = '".$franquicia->getidLocalidad()."' 
    WHERE `franquicias`.`id_franquicia` = ".$franquicia->getId();
    return $this->db->consult($query);
  }
  public function findAll()
  {
    $this->db->connect();
    $query = "SELECT `id_franquicia` FROM `franquicias`";
    $franquiciasDB = $this->db->consult($query, "yes");
    if (count($franquiciasDB) > 0) {
      $franquicias = [];
      foreach ($franquiciasDB as $franquiciaDB) {
        array_push($franquicias, $this->findById($franquiciaDB["id_franquicia"]));
      }
      return $franquicias;
    } else {
      return null;
    }
  }
  public function delete($id){
    $this->db->connect();
    $query = "DELETE FROM `franquicias` WHERE `franquicias`.`id_franquicia` = $id";
    return $this->db->consult($query);
  }
}
