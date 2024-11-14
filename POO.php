<?php
//DEFINICION DE CLASES, ATRIBUTOS, METODOS, INSTANCIAS Y USO DE OBJETOS
class Coche {
    public $marca;
    public $modelo;
    public $color;

    public function mostrarDetalles() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Color: " . $this->color . "<br>";
    }
}
// Crear una instancia de la clase Coche
$miCoche = new Coche();

// Asignar valores a los atributos
$miCoche->marca = "Toyota";
$miCoche->modelo = "Corolla";
$miCoche->color = "Rojo";

// Llamar al método para mostrar los detalles del coche
$miCoche->mostrarDetalles();




