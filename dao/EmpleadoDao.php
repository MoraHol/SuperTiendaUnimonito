<?php
include($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");

require_once(DB_PATH . "env.php");
require_once(DB_PATH . "DBOperator.php");
require_once(MODEL_PATH. "EmpleadoVO.php");

class EmpleadoDao
{

    public function __construct()
    {
        $this->db = new DBOperator($_ENV["db_host"], $_ENV["db_user"], $_ENV["db_name"], $_ENV["db_pass"]);
    }

    public function findById($id)
    {
        $this->db->conect();
        $query = "SELECT * FROM `empleados` WHERE `id_empleado` = $id";
        $employeeDB = $this->db->consult($query, "yes");
        $employeeDB = $employeeDB[0];
        $employee = new EmpleadoVO();
        $employee->setId($employeeDB["id_empleado"]);
        $employee->setNombre($employeeDB["nombre"]);
        $employee->setCedula($employeeDB["cedula"]);
        $employee->setTelefono($employeeDB["telefono"]);
        $employee->setFechaIngreso($employeeDB["fecha_ingreso"]);
        $employee->setIdfranquicia($employeeDB["franquicias_id_franquicia"]);
        $this->db->close();
        return $employee;
    }
    public function save($employee)
    { }
    public function update($employee)
    { }
    public function delete($id)
    { }

    public function findByCC($cc)
    { }
}
