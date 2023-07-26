<?php
// Incluir la clase de la base de datos
require_once 'Database.php';

// Obtener el término de búsqueda del formulario
$busqueda = $_GET['busqueda'];

// Crear una instancia de la clase database
$db = new Database();

// Obtener la conexión a la base de datos
$conexion = $db->conexion();

// Consulta SQL para buscar libros que coincidan con el término de búsqueda en título o autor
$sql = "SELECT * FROM libros WHERE titulo LIKE :term OR autor LIKE :term";

// Preparar la consulta
$stmt = $conexion->prepare($sql);

// Asignar el valor del término de búsqueda a la variable en la consulta
$term = "%$busqueda%";
$stmt->bindParam(':term', $term);

// Ejecutar la consulta
$stmt->execute();

// Obtener los resultados
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Mostrar resultados
if (count($resultados) > 0) {
    echo "<h2>Resultados de la búsqueda:</h2>";
    echo "<ul>";
    foreach ($resultados as $fila) {
        echo "<li>Título: " . $fila['titulo'] . ", Autor: " . $fila['autor'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No se encontraron libros que coincidan con la búsqueda.</p>";
}
?>