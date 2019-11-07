<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");

require_once(DB_PATH . "env.php");
require_once(DB_PATH . "DBOperator.php");
require_once(MODEL_PATH . "EmpleadoVO.php");
require_once(DAO_PATH . "FranquiciaDao.php");

class EmpleadoDao
{

    public function __construct()
    {
        $this->db = new DBOperator($_ENV["db_host"], $_ENV["db_user"], $_ENV["db_name"], $_ENV["db_pass"]);
        $this->franquiciaDao = new FranquiciaDao();
    }

    public function findById($id)
    {
        $this->db->connect();
        $query = "SELECT * FROM `empleados` WHERE `id_empleado` = $id";
        $employeeDB = $this->db->consult($query, "yes");
        $employeeDB = $employeeDB[0];
        $employee = new EmpleadoVO();
        $employee->setId($employeeDB["id_empleado"]);
        $employee->setNombre($employeeDB["nombre"]);
        $employee->setCedula($employeeDB["cedula"]);
        $employee->setTelefono($employeeDB["telefono"]);
        $employee->setFechaIngreso($employeeDB["fecha_ingreso"]);
        $employee->setIdfranquicia($this->franquiciaDao->findById($employeeDB["franquicias_id_franquicia"]));
        $this->db->close();
        return $employee;
    }
    public function save($employee)
    {
        $this->db->connect();
        $query = "";
        return $this->db->consult($query);
    }
    public function update($employee)
    {
        $this->db->connect();
        $query = "";
        return $this->db->consult($query);
    }
    public function delete($id)
    {
        $this->db->connect();
        $query = "";
        return $this->db->consult($query);
    }

    public function findByCC($cc)
    {
        $this->db->connect();
        $query = "SELECT `id_empleado` FROM `empleados` WHERE `cedula` = $cc";
        $employeeDB = $this->db->consult($query, "yes");
        if (count($employeeDB) > 0) {
            $employeeDB = $employeeDB[0];
            return $this->findById($employeeDB["id_empleado"]);
        } else {
            return null;
        }
    }
}
