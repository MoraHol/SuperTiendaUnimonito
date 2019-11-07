<?php

class CompraVo implements JsonSerializable
{
  private $id;
  private $cliente;
  private $fecha;
  private $monto;
  private $descuento;
  private $productosComprados;

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getCliente()
  {
    return $this->cliente;
  }

  public function setCliente($cliente)
  {
    $this->cliente = $cliente;
  }

  public function getFecha()
  {
    return $this->fecha;
  }

  public function setFecha($fecha)
  {
    $this->fecha = $fecha;
  }

  public function getMonto()
  {
    return $this->monto;
  }

  public function setMonto($monto)
  {
    $this->monto = $monto;
  }

  public function getDescuento()
  {
    return $this->descuento;
  }

  public function setDescuento($descuento)
  {
    $this->descuento = $descuento;
  }

  public function getProductosComprados()
  {
    return $this->productosComprados;
  }

  public function setProductosComprados($productosComprados)
  {
    $this->productosComprados = $productosComprados;
  }
  public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
