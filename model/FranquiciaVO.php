<?php

class FranquiciaVO implements JsonSerializable
{
  private $id;
  private $idLocalidad;
  private $gerente;
  private $nombre;

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getIdLocalidad()
  {
    return $this->idLocalidad;
  }

  public function setIdLocalidad($idLocalidad)
  {
    $this->idLocalidad = $idLocalidad;
  }

  public function getGerente()
  {
    return $this->gerente;
  }

  public function setGerente($gerente)
  {
    $this->gerente = $gerente;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }
  public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
