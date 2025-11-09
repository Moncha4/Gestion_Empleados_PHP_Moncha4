<?php
require_once "Electronico.php";
require_once "Alimento.php";
require_once "Ropa.php";
require_once "Inventario.php";

$inventario = new Inventario();

// Instanciamos objetos de diferentes tipos
$celular = new Electronico("Smartphone", 4500, 5, "Samsung");
$manzanas = new Alimento("Manzanas", 25, 100, "2025-12-30");
$playera = new Ropa("Playera", 250, 20, "M");

// Agregamos los productos al inventario
$inventario->agregarProducto($celular);
$inventario->agregarProducto($manzanas);
$inventario->agregarProducto($playera);

// Mostramos el inventario (polimorfismo en acción)
$inventario->mostrarInventario();
?>
