<?php

class LocalidadVO implements JsonSerializable
{
  private $id;
  private $nombre;
  private $productosEspeciales;

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

  public function getProductosEspeciales()
  {
    return $this->productosEspeciales;
  }

  public function setProductosEspeciales($productosEspeciales)
  {
    $this->productosEspeciales = $productosEspeciales;
  }
}
