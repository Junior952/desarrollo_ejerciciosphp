<?php
//_PHP
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    echo "Nombre de usuario: " . $username;
}

//_GET
$name = $_GET['name'];
echo "Nombre: " . $name;

//_FILES
if (isset($_FILES['archivo'])) {
    $nombreArchivo = $_FILES['archivo']['name'];
    $rutaTemporal = $_FILES['archivo']['tmp_name'];
    move_uploaded_file($rutaTemporal, "uploads/" . $nombreArchivo);
    echo "Archivo subido: " . $nombreArchivo;
}

//_REQUEST Enviar datos vía GET o POST (name=Juan)
$name = $_REQUEST['name'];
echo "Nombre: " . $name;

//_SESSION Iniciar sesión
session_start();
$_SESSION['usuario'] = 'Juan';
echo "Usuario: " . $_SESSION['usuario'];

//COOKIE
// Crear una cookie válida por 1 día
setcookie("nombre_usuario", "Juan", time() + (86400 * 1));

// Leer la cookie
if (isset($_COOKIE['nombre_usuario'])) {
    echo "Usuario: " . $_COOKIE['nombre_usuario'];
}
