<?php
//THROW
function verificarNumero($numero) {
    if ($numero <= 0) {
        throw new Exception("El número debe ser positivo.");
    }
    return "Número válido.";
}
try {
    echo verificarNumero(-5); // Esto lanzará un error
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

//TRY
function dividir($dividendo, $divisor) {
    if ($divisor == 0) {
        throw new Exception("<br>No se puede dividir entre cero.");
    }
    return $dividendo / $divisor;
}

try {
    echo dividir(10, 0); // Intentamos dividir por cero
} catch (Exception $e) {
    echo "Error: " . $e->getMessage(); // Muestra el mensaje del error
}

//TRY CATCH
function abrirArchivo($nombreArchivo) {
    if (!file_exists($nombreArchivo)) {
        throw new Exception("<br>El archivo no existe.");
    }
    return fopen($nombreArchivo, "r");
}
try {
    $archivo = abrirArchivo("<br>archivo_inexistente.txt"); // Intentamos abrir un archivo que no existe
    echo "<br>Archivo abierto con éxito.";
} catch (Exception $e) {
    echo "<br>Error: " . $e->getMessage(); // Muestra el mensaje de error si ocurre una excepción
}
