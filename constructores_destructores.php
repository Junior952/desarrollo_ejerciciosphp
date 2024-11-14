<?php
//CONSTRUCTORES
class Coche {
    public $marca;
    public $modelo;
    public $color;

    // Constructor para inicializar los atributos
    public function __construct($marca, $modelo, $color) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        echo "Un nuevo coche ha sido creado: $marca $modelo de color $color.<br>";
    }

    public function mostrarDetalles() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Color: " . $this->color . "<br>";
    }
}

// Crear una instancia de la clase Coche
$miCoche = new Coche("Toyota", "Corolla", "Rojo");
$miCoche->mostrarDetalles();

//DESTRUCTOR
class Coche1 {
    public $marca;
    public $modelo;
    public $color;

    // Constructor para inicializar atributos
    public function __construct($marca, $modelo, $color) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        echo "Coche creado: $marca $modelo, color $color.<br>";
    }

    public function mostrarDetalles() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Color: " . $this->color . "<br>";
    }

    // Destructor que se ejecuta cuando se destruye el objeto
    public function __destruct() {
        echo "El coche $this->marca $this->modelo ha sido destruido.<br>";
    }
}

// Crear una instancia de Coche
$miCoche = new Coche("Ford", "Fiesta", "Azul");
$miCoche->mostrarDetalles();

// El destructor se ejecutará al final del script automáticamente
