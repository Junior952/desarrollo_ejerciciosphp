<?php
//HERENCIA
$carro = new Carro("Ferrari", "California T", 123403, "Colombia");
echo $carro->createVehiculo();

class Vehiculo
{
    public string $marca;
    public string $modelo;
    public int $placa;

    public function __construct(string $marca, string $modelo, int $placa)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->placa = $placa;
    }
    public function createVehiculo(): string
    {
        return "Se ha creado el vehículo correctamente <br>";
    }
}
class Carro extends Vehiculo
{
    public string $ciudad;

    public function __construct(string $marca, string $modelo, int $placa, string $ciudad)
    {
        parent::__construct($marca, $modelo, $placa);
        $this->ciudad = $ciudad;
    }
}

//ABSTRACCION
abstract class Figura
{
    abstract public function calcularArea();
}
// Clase hija que implementa el método abstracto
class Cuadrado extends Figura
{
    private $lado;

    public function __construct($lado)
    {
        $this->lado = $lado;
    }

    public function calcularArea()
    {
        return $this->lado * $this->lado;
    }
}
// Crear instancia de Cuadrado
$miCuadrado = new Cuadrado(5);
echo "Área del cuadrado: " . $miCuadrado->calcularArea();


//INTERFACES
// Definir interfaz
interface Movible
{
    public function mover();
}
// Clase que implementa la interfaz
class Coche implements Movible
{
    public function mover()
    {
        return "El coche se mueve hacia adelante.";
    }
}
// Clase que implementa la interfaz
class Avion implements Movible
{
    public function mover()
    {
        return "El avión vuela en el aire.";
    }
}
// Crear instancias de Coche y Avion
$miCoche = new Coche();
$miAvion = new Avion();
echo $miCoche->mover() . "\n";
echo $miAvion->mover();



