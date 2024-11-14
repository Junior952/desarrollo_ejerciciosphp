<?php
//PUBLICO
class Coche {
    // Atributo público
    public $marca;

    public function __construct($marca) {
        $this->marca = $marca;
    }

    // Método público
    public function mostrarMarca() {
        echo "Marca: " . $this->marca . "<br>";
    }
}

$miCoche = new Coche("Toyota");
$miCoche->mostrarMarca(); // Acceso al método público
echo $miCoche->marca;      // Acceso directo al atributo público

//PRIVADO
class Coche1 {
    // Atributo privado
    private $modelo;

    public function __construct($modelo) {
        $this->modelo = $modelo;
    }

    // Método público para acceder a un atributo privado
    public function mostrarModelo() {
        echo "Modelo: " . $this->modelo . "<br>";
    }
}

$miCoche = new Coche("Corolla");
$miCoche->mostrarModelo(); // Funciona, ya que mostrarModelo() es público
// echo $miCoche->modelo; // Error: no se puede acceder directamente a un atributo privado

//PROTEGIDO
class Vehiculo {
    // Atributo protegido
    protected $color;

    public function __construct($color) {
        $this->color = $color;
    }
}
class Coche2 extends Vehiculo {
    public function mostrarColor() {
        echo "Color: " . $this->color . "<br>";
    }
}
$miCoche = new Coche("Rojo");
$miCoche->mostrarColor(); // Funciona, porque mostrarColor() accede a $color dentro de una clase hija
// echo $miCoche->color; // Error: no se puede acceder directamente a un atributo protegido desde fuera
