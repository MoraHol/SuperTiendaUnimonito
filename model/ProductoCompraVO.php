<?php

class ProductoCompra implements JsonSerializable
{
    private $idCompra;
    private $producto;
    private $cantidad;

    public function getIdCompra()
    {
        return $this->idCompra;
    }

    public function setIdCompra($idCompra)
    {
        $this->idCompra = $idCompra;
    }

    public function getProducto()
    {
        return $this->producto;
    }

    public function setProducto($producto)
    {
        $this->producto = $producto;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }
}
