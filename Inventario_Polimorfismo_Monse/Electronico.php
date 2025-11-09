<?php
require_once "Producto.php";

class Electronico extends Producto {
    private $marca;

    public function __construct($nombre, $precio, $cantidad, $marca) {
        parent::__construct($nombre, $precio, $cantidad);
        $this->marca = $marca;
    }

    public function mostrarInfo() {
        return "📱 Electrónico: {$this->nombre}, Marca: {$this->marca}, Precio: $this->precio, Cantidad: $this->cantidad";
    }
}
?>
