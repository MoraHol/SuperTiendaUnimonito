<?php

class ClienteVO implements JsonSerializable
{
    private $id;
    private $puntos;
    private $cedula;
    private $nombre;
    private $ciudad;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPuntos()
    {
        return $this->puntos;
    }

    public function setPuntos($puntos)
    {
        $this->puntos = $puntos;
    }

    public function getCedula()
    {
        return $this->cedula;
    }

    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
