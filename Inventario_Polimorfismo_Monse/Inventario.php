<?php
class Inventario {
    private $productos = [];

    public function agregarProducto(Producto $producto) {
        $this->productos[] = $producto;
    }

    public function mostrarInventario() {
        foreach ($this->productos as $producto) {
            echo $producto->mostrarInfo() . "<br>";
            echo "Valor total: $" . $producto->calcularValorInventario() . "<hr>";
        }
    }
}
?>
