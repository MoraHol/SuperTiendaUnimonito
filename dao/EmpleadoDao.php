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
        $employee->setSalario($employeeDB["salario"]);
        $this->db->close();
        return $employee;
    }
    public function save($employee)
    {
        $this->db->connect();
        $query = "INSERT INTO `empleados` (`id_empleado`, `nombre`, `cedula`, `telefono`, `salario`, `fecha_ingreso`, `franquicias_id_franquicia`) VALUES (NULL, '".$employee->getNombre()."', '".$employee->getCedula()."', 
        '".$employee->getTelefono()."', '".$employee->getSalario()."', current_timestamp(), '".$employee->getIdfranquicia()->getId()."')";
        return $this->db->consult($query);
    }
    public function update($employee)
    {
        $this->db->connect();
        $query = "UPDATE `empleados` SET `nombre` = '".$employee->getNombre()."',
        `cedula` = '".$employee->getCedula()."', `telefono` = '".$employee->getTelefono()."',
        `salario` = '".$employee->getSalario()."',
        `franquicias_id_franquicia` = '".$employee->getIdfranquicia()->getId()."' WHERE `empleados`.`id_empleado` = " . $employee->getId();
        return $this->db->consult($query);
    }
    public function delete($id)
    {
        $this->db->connect();
        $query = "DELETE FROM `empleados` WHERE `empleados`.`id_empleado` = $id";
        return $this->db->consult($query);
    }
    public function findAll(){
        $this->db->connect();
        $query = "SELECT `id_empleado` FROM `empleados`";
        $employeesDB = $this->db->consult($query, "yes");
        if (count($employeesDB) > 0) {
            $employees = [];
            foreach ($employeesDB as $employeeDB) {
                array_push($employees, $this->findById($employeeDB["id_empleado"]));
            }
            return $employees;
        } else {
            return null;
        }
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
