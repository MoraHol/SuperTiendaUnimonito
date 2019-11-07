<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");

require_once(DB_PATH . "env.php");
require_once(DB_PATH . "DBOperator.php");
require_once(MODEL_PATH . "ProductoVO.php");

class ProductoDao
{

  public function __construct()
  {
    $this->db = new DBOperator($_ENV["db_host"], $_ENV["db_user"], $_ENV["db_name"], $_ENV["db_pass"]);
  }

  public function findById($id)
  {
    $this->db->connect();
    $query = "SELECT * FROM `productos` WHERE `id_producto` = $id";
    $productDB = $this->db->consult($query, "yes");
    $productDB = $productDB[0];
    $product = new ProductoVO();
    $product->setId($productDB["id_producto"]);
    $product->setNombre($productDB["nombre"]);
    $product->setFechaCompra($productDB["fecha_compra"]);
    $product->setObservaciones($productDB["observaciones"]);
    $product->setPrecio($productDB["precio"]);
    $product->setTipo($productDB["tipo"]);
    $product->setCantidad($productDB["cantidad"]);
    $this->db->close();
    return $product;
  }
  public function save($product)
  {
    $this->db->connect();
    $query = "INSERT INTO `productos` (`id_producto`, `nombre`, `fecha_compra`, `observaciones`, `precio`, `tipo`, `cantidad`) VALUES (NULL,
    '" . $product->getNombre() . "', '2019-11-07', '" . $product->getObservaciones() . "',
    '" . $product->getPrecio() . "', '" . $product->getTipo() . "', '" . $product->getCantidad() . "')";
    return $this->db->consult($query);
  }
  public function update($product)
  { }
  public function findByFranquicia($franquicia)
  {
    $this->db->connect();
    $query = "SELECT `productos`.`id_producto` FROM `productos` LEFT JOIN productos_especiales ON productos.id_producto = productos_especiales.id_producto WHERE productos_especiales.id_localidad = " . $franquicia->getIdLocalidad()->getId() . " OR productos_especiales.id_producto IS null";
    $employeesDB = $this->db->consult($query, "yes");
    if (count($employeesDB) > 0) {
      $products = [];
      foreach ($employeesDB as $employeeDB) {
        array_push($products, $this->findById($employeeDB["id_producto"]));
      }
      return $products;
    } else {
      return null;
    }
  }
  public function delete($id)
  {
    $this->db->connect();
    $query = "DELETE FROM `productos` WHERE `productos`.`id_producto` = $id";
    return $this->db->consult($query);
  }
}
