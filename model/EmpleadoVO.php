<?php

class EmpleadoVO implements JsonSerializable
{
    private $id;
    private $nombre;
    private $cedula;
    private $telefono;
    private $fechaIngreso;
    private $idfranquicia;
    private $idLocalidad;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCedula()
    {
        return $this->cedula;
    }

    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;
    }

    public function getIdfranquicia()
    {
        return $this->idfranquicia;
    }

    public function setIdfranquicia($idfranquicia)
    {
        $this->idfranquicia = $idfranquicia;
    }

    public function getIdLocalidad()
    {
        return $this->idLocalidad;
    }

    public function setIdLocalidad($idLocalidad)
    {
        $this->idLocalidad = $idLocalidad;
    }
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
