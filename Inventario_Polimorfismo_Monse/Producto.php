<?php
// Clase abstracta que define la estructura base de cualquier producto
abstract class Producto {
    protected $nombre;
    protected $precio;
    protected $cantidad;

    public function __construct($nombre, $precio, $cantidad) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
    }

    // Método común que todas las subclases deben implementar
    abstract public function mostrarInfo();

    // Método normal compartido por todas las clases
    public function calcularValorInventario() {
        return $this->precio * $this->cantidad;
    }
}
?>
