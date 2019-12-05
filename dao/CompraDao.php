<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/dirs.php");

require_once(DB_PATH . "env.php");
require_once(DB_PATH . "DBOperator.php");
require_once(MODEL_PATH . "CompraVO.php");
require_once(MODEL_PATH . "ProductoCompraVO.php");
require_once(MODEL_PATH . "ProductoVO.php");

class CompraDao
{

    public function __construct()
    {
        $this->db = new DBOperator($_ENV["db_host"], $_ENV["db_user"], $_ENV["db_name"], $_ENV["db_pass"]);
    }

    public function findById($id)
    { }
    public function save($sale)
    {
        $this->db->connect();
        $query = "INSERT INTO `compras` (`id_compra`, `fecha`, `monto`,
        `descuento`, `clientes_id_cliente`, `empleados_id_empleado`,
        `empleados_franquicias_id_franquicia`) VALUES 
        (NULL, current_timestamp(), '" . $sale->getMonto() . "',
        '" . $sale->getDescuento() . "','" . $sale->getCliente()->getId() . "',
        '" . $sale->idVendedor . "', '" . $sale->idFranquicia . "')";
        $id = $this->db->consult($query, 'no', true);
        $sale->setId($id);
        foreach ($sale->getProductosComprados() as  $productoComprado) {
            $query = "INSERT INTO `compras_has_productos` (`compras_id_compra`,
            `productos_id_producto`, `cantidad`) VALUES ('" . $sale->getId() . "',
            '" . $productoComprado->id . "', '" . $productoComprado->quantity . "')";
            $status = $this->db->consult($query);
        }
        $this->db->close();
        return $status;
    }
    public function update($sale)
    { }
}
