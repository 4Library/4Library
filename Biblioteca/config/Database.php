<?php

$host = "localhost";
$username = "root";
$password = ""; // Dejar la contraseña en blanco si no hay contraseña
$dbname = "biblioteca_db";

// Crear una conexión a la base de datos
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar si hay errores en la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Asignar la conexión a la variable $db para poder utilizarla en otros archivos
$db = $conn;

?>

