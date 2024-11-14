<?php
//CONSTANTES DE CLASE
class Coche {
    public $marca;
    public $modelo;
    public $color;

    // ESTA ES LA CONSTANTE
    const NUMERO_RUEDAS = 4;

    public function mostrarDetalles() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Color: " . $this->color . "<br>";
        echo "Número de ruedas: " . self::NUMERO_RUEDAS . "<br>";
    }
}
// Crear una instancia de Coche
$miCoche = new Coche();
$miCoche->marca = "Toyota";
$miCoche->modelo = "Corolla";
$miCoche->color = "Rojo";
$miCoche->mostrarDetalles();
// Acceder a la constante de clase fuera de la clase
echo "Un coche típico tiene " . Coche::NUMERO_RUEDAS . " ruedas.<br>";

//AUTOCARGA DE CLASES
class Coche {
    public function mostrar() {
        echo "Este es un coche.<br>";
    }
}

