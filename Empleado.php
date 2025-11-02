<?php
class Empleado {
    protected $nombre;
    protected $salario;
    protected $puesto;

    public function __construct($nombre, $salario, $puesto) {
        $this->nombre = $nombre;
        $this->salario = $salario;
        $this->puesto = $puesto;
    }

    public function mostrarInfo() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Salario: $" . $this->salario . "<br>";
        echo "Puesto: " . $this->puesto . "<br>";
    }

    public function calcularSalarioAnual() {
        return $this->salario * 12;
    }
}
?>
