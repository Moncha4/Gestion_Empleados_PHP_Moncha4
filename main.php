<?php
// ======================================================
// Aplicación: Gestión de Empleados
// Autor: Elsa Monserrath Guerra Mendoza
// Materia: Programación Orientada a Objetos
// Docente: Gustavo Alfredo Valdez González
// ======================================================

// Clase principal: Empleado
class Empleado {
    // Atributos
    public $nombre;
    public $puesto;
    public $salario;

    // Constructor
    public function __construct($nombre, $puesto, $salario) {
        $this->nombre = $nombre;
        $this->puesto = $puesto;
        $this->salario = $salario;
    }

    // Método para mostrar información del empleado
    public function mostrarInfo() {
        echo "Nombre: " . $this->nombre . "\n";
        echo "Puesto: " . $this->puesto . "\n";
        echo "Salario: $" . $this->salario . "\n";
        echo "--------------------------\n";
    }

    // Método para aumentar el salario
    public function aumentarSalario($porcentaje) {
        $this->salario += $this->salario * ($porcentaje / 100);
        echo "Se aumentó el salario de {$this->nombre} en {$porcentaje}%\n";
    }
}

// Clase Empresa que gestiona varios empleados
class Empresa {
    public $nombreEmpresa;
    public $empleados = [];

    // Constructor
    public function __construct($nombreEmpresa) {
        $this->nombreEmpresa = $nombreEmpresa;
    }

    // Método para agregar empleados
    public function agregarEmpleado($empleado) {
        $this->empleados[] = $empleado;
        echo "Empleado agregado: {$empleado->nombre}\n";
    }

    // Método para mostrar todos los empleados
    public function mostrarEmpleados() {
        echo "\n=== Lista de empleados de {$this->nombreEmpresa} ===\n";
        foreach ($this->empleados as $emp) {
            $emp->mostrarInfo();
        }
    }
}

// ======================================================
// Programa principal
// ======================================================

$empresa1 = new Empresa("Tech Solutions S.A.");

// Crear objetos de tipo Empleado
$empleado1 = new Empleado("Ana López", "Gerente", 25000);
$empleado2 = new Empleado("Carlos Pérez", "Programador", 18000);
$empleado3 = new Empleado("María Ruiz", "Diseñadora", 15000);

// Agregar empleados a la empresa
$empresa1->agregarEmpleado($empleado1);
$empresa1->agregarEmpleado($empleado2);
$empresa1->agregarEmpleado($empleado3);

// Aumentar salario de un empleado
$empleado2->aumentarSalario(10);

// Mostrar toda la información
$empresa1->mostrarEmpleados();

?>
