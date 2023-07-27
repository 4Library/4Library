<?php

$host= "localhost";
$dbname="library_db";
$book = "root";

$conn = new mysqli($dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtiene el término de búsqueda ingresado por el usuario //
if (isset($_GET['query'])) {
    $search_query = $_GET['query'];

    // Realizar la consulta en la base de datos //
    $sql = "SELECT * FROM tabla_books WHERE titulo LIKE '%$search_query%' OR autor LIKE '%$search_query%'";
    $result = $conn->query($sql);

    // Mostrar los resultados
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>" . $row["title"] . " - " . $row["author"] . "</p>";
        }
    } else {
        echo "No se encontraron resultados.";
    }
}

$conn->close();
?>
