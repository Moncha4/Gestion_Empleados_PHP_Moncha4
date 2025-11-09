<?php
require_once "Producto.php";

class Alimento extends Producto {
    private $fechaExpiracion;

    public function __construct($nombre, $precio, $cantidad, $fechaExpiracion) {
        parent::__construct($nombre, $precio, $cantidad);
        $this->fechaExpiracion = $fechaExpiracion;
    }

    public function mostrarInfo() {
        return "🍎 Alimento: {$this->nombre}, Expira: {$this->fechaExpiracion}, Precio: $this->precio, Cantidad: $this->cantidad";
    }
}
?>
