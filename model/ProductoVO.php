<?php

class ProductoVO implements JsonSerializable
{
  private $id;
  private $fechaCompra;
  private $precio;
  private $tipo;
  private $observaciones;
  private $nombre;
  private $cantidad;


  public function getCantidad()
  {
    return $this->cantidad;
  }

  public function setCantidad($cantidad)
  {
    $this->cantidad = $cantidad;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getFechaCompra()
  {
    return $this->fechaCompra;
  }

  public function setFechaCompra($fechaCompra)
  {
    $this->fechaCompra = $fechaCompra;
  }

  public function getPrecio()
  {
    return $this->precio;
  }

  public function setPrecio($precio)
  {
    $this->precio = $precio;
  }

  public function getTipo()
  {
    return $this->tipo;
  }

  public function setTipo($tipo)
  {
    $this->tipo = $tipo;
  }

  public function getObservaciones()
  {
    return $this->observaciones;
  }

  public function setObservaciones($observaciones)
  {
    $this->observaciones = $observaciones;
  }

  public function jsonSerialize()
  {
    return get_object_vars($this);
  }
}
