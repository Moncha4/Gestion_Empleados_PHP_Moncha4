<?php
require_once "Producto.php";

class Ropa extends Producto {
    private $talla;

    public function __construct($nombre, $precio, $cantidad, $talla) {
        parent::__construct($nombre, $precio, $cantidad);
        $this->talla = $talla;
    }

    public function mostrarInfo() {
        return "👕 Ropa: {$this->nombre}, Talla: {$this->talla}, Precio: $this->precio, Cantidad: $this->cantidad";
    }
}
?>
